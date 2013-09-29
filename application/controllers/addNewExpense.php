<?php

class AddNewExpense extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		$fb_config = array('appId' => '570515386348687', 'secret' => '844705f10757e09b10bc16ab1a3ad65e');
		$this -> load -> library('facebook', $fb_config);
		$user = $this -> facebook -> getUser();

		if ($user) {
			try {
				$data['user_profile'] = $this -> facebook -> api('/me');
				$friends = $this -> facebook -> api('/me/friends');
				$friends = $friends['data'];
				
				
				// Add All friends to database.
				// foreach($friends as $friend) {
					// $friendId = $friend['id'];
					// $friendName = $friend['name'];
					// $this->load->model('Person');
					// $this->Person->insertRecord($friendId, $friendName);
				// }
				
				$jsonData = json_encode($friends);
				
				
 				
				// $friendsString = sizeof($friends);
				// foreach($friends as $friend)
					// $friendsString = $friendsString . ":" . $friend['id'] .":" . $friend['name']; 
				
				$data['user_friends'] = $jsonData;
			} catch (FacebookApiException $e) {
				$user = null;
			}
		}

		if ($user) {
			$data['logout_url'] = $this -> facebook -> getLogoutUrl();
			$this -> load -> view('addNewExpensePage', $data);
			
		} else {
			redirect('login');
		}
	}
	
	function addNewRecord()
	{
		// Get the data from post
		$fb_config = array('appId' => '570515386348687', 'secret' => '844705f10757e09b10bc16ab1a3ad65e');
		$this -> load -> library('facebook' , $fb_config);
			$user = $this -> facebook -> getUser();

		if ($user){
			$myStuff = $this -> facebook -> api('/me');

			$myId = $myStuff['id'];
			$friendId = '502616400';
			$value = 55.5;
			$this->load->model('Owing');
			$this->Owing->insertRecord($myId, $friendId, $value);
			redirect('home');
		} else redirect('login');
	}
}
		