<?php

class Owing extends CI_Model {

	function getAmountLended($uid) {
		
		$q = $this->db->query("SELECT SUM(value) as sum FROM Owing WHERE id_from = '" . $uid . "'");
		if ($q->num_rows > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
		}
		return $this->ObjectToArray($data);
	}
	
	function getAmountOwing($uid) {
		
		$q = $this->db->query("SELECT SUM(value) as sum FROM Owing WHERE id_to = '" . $uid . "'");
		if ($q->num_rows > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
		}
		return $this->ObjectToArray($data);
	}
	
	
	function insertNewRecord($uid, $toId, $value, $event, $status)
	{
		$q = $this->db->query("INSERT INTO Owing (`id_from`, `id_to`, `value`, `status`, `event`) VALUES ('". $toId ."', '". $uid ."', ". $value .", ".$status.", '". $event ."')");
		
		// Adding this user to the list if they don't already exist.	
		$this->load->model('Person');
		$this->Person->insertRecord($toId);
		
	}
	
	function getAmountLendedToPeople($uid){
		
		$q = $this->db->query("Select P.fb_id, P.name, sum(P2.value) as totals from Person as P inner join (SELECT O.id_from, O.value from Person as P1 inner join Owing as O on P1.fb_id = O.id_to where P1.fb_id ='".$uid."') as P2 where P.fb_id = P2.id_from GROUP BY P.name");
		if ($q->num_rows > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
		}
		if(isset($data))
			return ($this->ObjectToArray($data));	
	}
	
	function getAmountOwedToPeople($uid){
		
		$q = $this->db->query("Select P.name, sum(P2.value) as totals from Person as P inner join (SELECT O.id_to, O.value from Person as P1 inner join Owing as O on P1.fb_id = O.id_from where P1.fb_id = '" . $uid ."') as P2 where P.fb_id = P2.id_to GROUP BY P.name");
		if ($q->num_rows > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
		}
	
		if(isset($data))
			return ($this->ObjectToArray($data));	
	}
	
	function ObjectToArray($Array){
		for($i = 0; $i < count($Array); $i++){
			$Array[$i] = get_object_vars($Array[$i]);
		}
		return $Array;
	}

	function confirmRecord($recordId){
		$q = this->db->query("UPDATE Owing, SET status = 1 WHERE id = ".$recordId);
	}

}