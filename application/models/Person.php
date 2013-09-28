<?php

class Person extends CI_Model {

	function insertRecord() {
		$q = $this->db->get('users');
		if ($q->num_rows > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
		}
		return $data;
	}
}