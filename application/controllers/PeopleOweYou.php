<?php

class PeopleOweYou extends CI_Controller {

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
