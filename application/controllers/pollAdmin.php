<?php

class pollAdmin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('pollAdminModel');
    }
	public function index() {
		$this->load->view('pollHome');
    }
	
	public function pollSave() {
		$this->load->model('pollAdminModel');
		$pollAnswere=$this->input->post('select');
		print_r($pollAnswere);
		$previousPollValue=$this->pollAdminModel->getVotes($pollAnswere);
		$newPollValue=$previousPollValue+1;	
		$this->pollAdminModel->updateVote($pollAnswere, $newPollValue);
		$this->load->view('pollHome');    
    }
	
	public function result(){
		$this->load->model('pollAdminModel');
		$users = $this->pollAdminModel->getAllData();
		$data=array();
		$data['users']=$users;
		
		$this->load->view('pollResult',$data);
	}
	
	public function chart(){
		$this->load->model('pollAdminModel');
		$data = $this->pollAdminModel->getAllData();
		$x['data'] = json_encode($data);
		$this->load->view('pollResultChart',$x);
    }
	
}