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
	
	function ObjectToArray($Array){
		for($i = 0; $i < count($Array); $i++){
			$Array[$i] = get_object_vars($Array[$i]);
		}
		return $Array;
	}
}