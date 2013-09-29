<?php

class Login extends CI_Controller {

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
			} catch (FacebookApiException $e) {
				$user = null;
			}
		}

		if ($user) {
			redirect('home');
		} else {
			$data['login_url'] = $this -> facebook -> getLoginUrl();
			$this -> load -> view('loginPage', $data);
		}
	}
}
