<?php

class PeopleOweYou extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	function index() {
		
		$fb_config = array('appId' => '245822572241036', 'secret' => '4207143beadd507759999a2771729087');
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
			
			$totalLendedMoney = $this->Owing->getAmountOwing($data['user_profile']['id']);
			$data['total_lended'] = $totalLendedMoney[0]['sum'];
			$data['people_owe_you'] = $this->Owing->getAmountLendedToPeople($data['user_profile']['id']);
			$data['debtbyEvent'] = $this->Owing->getIndividualTransactionsLended($data['user_profile']['id']);
			$this->load->view("user_owe_me", $data);
			
		} else {
			redirect('login');
		}
	}
	
	function addNewExpense()
	{
		redirect('addNewExpense');
	}
}
