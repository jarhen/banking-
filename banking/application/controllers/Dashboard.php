<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index()
	{
		if ($this->session->has_userdata('user_id')) {
			 $uid = $this->session->userdata('user_id');
			 
			$data['balance'] = $this->Main_model->balance($uid);
			$data['alltransfer'] = $this->Main_model->alltransfer($uid);
			$data['transferdetails'] = $this->Main_model->transferdetails($uid);
			
			$this->load->view('header');
			$this->load->view('dashboard/home',$data);
			$this->load->view('footer');
			
		} else {
			redirect(base_url());
		}
	}
	public function logout(){
		
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function transfer(){
		$pid = $this->input->post('text1');
		$amt = $this->input->post('text2');
		$data['transfer'] = $this->Main_model->transfer($pid,$amt);
		
	}

	
}