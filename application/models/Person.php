<?php

class Person extends CI_Model {

	function insertRecord($id) {
			
		$q = $this->db->query("SELECT * FROM Person WHERE fb_id = '" . $id ."'");
		
		// User exixsts already! do not add.
		if ($q->num_rows > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
		} else
			{
				
				$pageContent = file_get_contents('http://graph.facebook.com/'.$id);
				$parsedJson  = json_decode($pageContent);
				$name = $parsedJson->name;

				$email = "";
				if(property_exists($parsedJson, 'username')) // Fix this, need to get the User's ID properly.
					 $emoil =  $parsedJson->username."@facebook.com";

				$query = $this->db->query("INSERT INTO Person(name, fb_id, email) VALUES ('".$name."', '".$id."', '".$email."')");
			}
	}
}