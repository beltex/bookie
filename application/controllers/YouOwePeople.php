<?php

class YouOwePeople extends CI_Controller {

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
			$data['logout_url'] = $this -> facebook -> getLogoutUrl();
			$this->load->model('Owing');
			$amountLended = $this->Owing->getAmountLended($data['user_profile']['id']);
			
			$this->load->model("Owing");
			$owedAmount = $this->Owing->getAmountOwing($data['user_profile']['id']);
			$data['total_owed'] = $owedAmount[0]['sum'];
			$data['people_you_owe'] = $this->Owing->getAmountOwedToPeople($data['user_profile']['id']);
			$this->load->view("user_you_owe", $data);
			// $amountOwing = $this->Owing->getAmountOwing($data['user_profile']['id']);
			// $data['amount_lended'] = $amountLended[0]['sum'];
			// $data['amount_owing'] = $amountOwing[0]['sum'];;
			// $this -> load -> view('homePage', $data);
			
		} else {
			redirect('login');
		}
	}
	
	function addNewExpense()
	{
		redirect('addNewExpense');
	}
}
