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
		
		$q = $this->db->query("Select Person.fb_id, Person.name, sum( Owing.value ) AS totals FROM Person INNER JOIN Owing ON Person.fb_id = Owing.id_from WHERE Owing.id_to = ".$uid." GROUP BY Owing.id_from ORDER BY Person.name");
		if ($q->num_rows > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
		}
		if(isset($data))
			return ($this->ObjectToArray($data));	
	}
	
	function getAmountOwedToPeople($uid){
		
		$q = $this->db->query("Select Person.fb_id, Person.name, sum( Owing.value ) AS totals FROM Person INNER JOIN Owing ON Person.fb_id = Owing.id_to WHERE Owing.id_from =".$uid." GROUP BY Owing.id_to ORDER BY Person.name");
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
		$q = $this->db->query("UPDATE Owing, SET status = 1 WHERE id = ".$recordId);
	}

	// Too sleepy, better phrase this query.
	function getIndividualTransactionsLended($uid){

		$q1 = $this->db->query("Select Person.fb_id, Person.name AS totals FROM Person INNER JOIN Owing ON Person.fb_id = Owing.id_from WHERE Owing.id_to =".$uid." GROUP BY Owing.id_from ORDER BY Person.name");
		 
		 if ($q1->num_rows > 0) {
			foreach ($q1->result() as $row) {
				$q2= $this->db->query("Select id_from, value, timestamp, event FROM Owing WHERE id_to =".$uid." AND id_from =".$row->fb_id." ORDER BY timestamp");
				foreach ($q2->result() as $finalRow){
					$data[] = $finalRow;
				}
				
				$finalData[] = $this->ObjectToArray($data);
				unset($data);
				unset($q2);
				
				}
			}
		if(isset($finalData))
			return $finalData;
	}

	function getIndividualTransactionsOwed($uid){

		$q1 = $this->db->query("Select Person.fb_id, Person.name AS totals FROM Person INNER JOIN Owing ON Person.fb_id = Owing.id_to WHERE Owing.id_from =".$uid." GROUP BY Owing.id_to ORDER BY Person.name");
		 
		 if ($q1->num_rows > 0) {
			foreach ($q1->result() as $row) {
				$q2= $this->db->query("Select id_from, value, timestamp, event FROM Owing WHERE id_from =".$uid." AND id_to =".$row->fb_id." ORDER BY timestamp");
				foreach ($q2->result() as $finalRow){
					$data[] = $finalRow;
				}
				
				$finalData[] = $this->ObjectToArray($data);
				unset($data);
				unset($q2);
				
				}
			}
			
		if(isset($finalData))
			return $finalData;
	}


}