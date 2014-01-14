<?php

class Groups extends CI_Model {

	function getAmountLended($uid) {
		
		$q = $this->db->query("SELECT SUM(value) as sum FROM Owing WHERE id_from = '" . $uid . "'");
		if ($q->num_rows > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
		}
		return $this->ObjectToArray($data);
	}
}