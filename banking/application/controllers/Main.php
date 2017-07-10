<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct() {
		parent::__construct();
	}
	
    
	public function index()
	{
		if ($this->session->has_userdata('user_id')) {
			redirect('../dashboard');
		}else{
			$this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');
		}
	}
	
	public function login(){
		$pass = $this->input->post('password');
	    $cipherpass = $this->encrypter($pass);
	    $username = $this->input->post('username');
		$data = $this->Main_model->login_model($username);
		
		foreach($data as $u):
		     $uid =  $u->id;
			 $upass = $u->password;
			 $uname = $u->username;
		endforeach;
		if($data){
			$password = $this->decrypter($upass);
		
		if($pass == $password):
			$sessiondata = array(
			'user_id' => $uid,
			'username' => $uname
			);
			$this->session->set_userdata($sessiondata);
			  $this->load->view('dashboard/home');
		else:
			
		endif;
		}
		
		
		
		
	}
    public function encrypter($pass){
		$this->encryption->initialize(
        array(
                'cipher' => 'aes-256',
                'mode' => 'ctr',
                'key' => '<a 32-character random string>'
        ));
		
		$ciphertext = $this->encryption->encrypt($pass);
		
		return $ciphertext;
	}
	public function decrypter($pass){
		
		$this->encryption->initialize(
        array(
                'cipher' => 'aes-256',
                'mode' => 'ctr',
                'key' => '<a 32-character random string>'
        ));
		$cipherpass = $this->encryption->decrypt($pass);
	
		return $cipherpass;
	}
	
	
}
