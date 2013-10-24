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

				$jsonData = json_encode($friends);
				$data['user_friends'] = $jsonData;
				
			} catch (FacebookApiException $e) {
				$user = null;
			}
		}

		if ($user) {
			$data['logout_url'] = $this -> facebook -> getLogoutUrl();
			$this -> load -> view('user_add', $data);
			
		} else {
			redirect('login');
		}
	}
	
	function addNewRecord()
	{
		// Get the data from post, getting it from git at the moment.
		$clientID= $this->input->get('clientID');
		$event = $this->input->get('event');
		$amount = $this->input->get('amount');
		$who = $this->input->get("Who");
		$status = 0; // Status 0 means no decesion has been made yet.
		
		$fb_config = array('appId' => '570515386348687', 'secret' => '844705f10757e09b10bc16ab1a3ad65e');
		$this -> load -> library('facebook' , $fb_config);
		$user = $this -> facebook -> getUser();

		if ($user){
			$me = $this -> facebook -> api('/me');
			$myId = $me['id'];
			$this->load->model('Owing');
			$this->Owing->insertNewRecord($myId, $clientID, $amount, $event, $status);
			redirect('home');
		} else redirect('login');
	}
}
		