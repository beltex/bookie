<?php

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {

		$user = $this -> facebook -> getUser();

		if ($user) {
			try {
				$data['user_profile'] = $this -> facebook -> api('/me');
			} catch (FacebookApiException $e) {
				$user = null;
			}
		}

		if ($user) {
			redirect('home');
		} else {
			$data['login_url'] = $this -> facebook -> getLoginUrl();
			$this -> load -> view('login_view', $data);
		}
	}
}
