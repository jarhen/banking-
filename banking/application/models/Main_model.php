<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_model extends CI_Model
{

	function __construct() {
		parent::__construct();
	}
	public function login_model($user){
		$this->db->where('username',$user);
		$query = $this->db->get('user');
		return $query->result();
	}
	public function balance($id){
		//get initial balance
		 $query = $this->db->query("SELECT ((((SELECT intbalans FROM user WHERE id ='$id') + 
							(SELECT COALESCE(SUM(amt),0) FROM  `totaltra` WHERE tratype =  'deposit' AND id ='$id') - 
							(SELECT COALESCE( SUM( amt ),0) FROM  `totaltra` WHERE tratype =  'withdraw' AND id ='$id' ))+(SELECT COALESCE(SUM(amt),0)ttransfer FROM  `transfer` 
							WHERE 
							Toid ='$id'))-(SELECT COALESCE(SUM(amt),0)ttransfer FROM  `transfer` 
							WHERE 
							Fromid ='$id')) AS tbalance");
		return $query->result();
		
		
	}
	public function transfer($pid,$amt){
		$this->db->where('id',$pid);
		$query = $this->db->get('user');
		if($query->num_rows() == 1){
			$data = array('Toid' => $pid, 'Fromid' => $this->session->userdata('user_id'), 'amt' => $amt);
			$this->db->insert('transfer',$data);
			return true;
			
		}else{
			return false;
		}
	}
	public function alltransfer($id){
		$this->db->where('id',$id);
		$query = $this->db->get('totaltra');
		return $query->result();
	}
	public function transferdetails($id){
		$this->db->where('Toid',$id);
		$this->db->or_where('Fromid',$id);
		$query = $this->db->get('transfer');
		return $query->result();
		
	}
	
	
}