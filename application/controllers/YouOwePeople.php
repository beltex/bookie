<?php

class YouOwePeople extends CI_Controller {

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
			$owedAmount = $this->Owing->getAmountLended($data['user_profile']['id']);
			$data['total_owed'] = $owedAmount[0]['sum'];
			$PeopleYouOweAll = $this->Owing->getAmountOwedToPeople($data['user_profile']['id']);
			$size = sizeof($PeopleYouOweAll);
			$data['people_you_owe'] = $PeopleYouOweAll;
			$data['size'] = $size;
			$data['debtbyEvent'] = $this->Owing->getIndividualTransactionsOwed($data['user_profile']['id']);
			$this->load->view("user_you_owe", $data);
			
		} else {
			redirect('login');
		}
	}
	
	function addNewExpense()
	{
		redirect('addNewExpense');
	}
}
