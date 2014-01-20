<?php

class AddNewGroup extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
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
			$this -> load -> view('group_add', $data);
			
		} else {
			redirect('login');
		}
	}
}
		