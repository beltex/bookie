<?php

class home extends CI_Controller {

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
		
			//Dirty Fix -- Everytime a user logs in, check if they exist in the database, if they don't add them in.
			$this->load->model('Person');
			$this->Person->insertRecord($data['user_profile']['id']); 

			$this->load->model('Owing');

			$amountLended = $this->Owing->getAmountLended($data['user_profile']['id']);
			$amountOwing = $this->Owing->getAmountOwing($data['user_profile']['id']);
			
			$amountTotalLended = $this->Owing->getAmountLendedToPeople($data['user_profile']['id']);
			$sizeLended = sizeof($amountTotalLended);
			
			$amountTotalOwed = $this->Owing->getAmountOwedToPeople($data['user_profile']['id']);
			$sizeOwed = sizeof($amountTotalOwed);
		

			$data['size_lended'] = $sizeLended;
			$data['size_owed'] = $sizeOwed;	
			
			$data['amount_lended'] = $amountOwing[0]['sum'];
			$data['amount_owing'] = $amountLended[0]['sum'];;
			$this -> load -> view('home_view', $data);
		} else {
			redirect('login');
		}
	}
	
	function addNewExpense()
	{
		redirect('addNewExpense');
	}
	
	function PeopleOweYou()
	{
		redirect('PeopleOweYou');
	}
	
	function YouOwePeople()
	{
		redirect('YouOwePeople');
	}
}
