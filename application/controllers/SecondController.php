<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecondController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$st=$this->session->userdata('status');
		if($st!=='Login'){
			header('location:'.base_url().'Welcome');
		}


	}

public function index()
	{
		$data['show']=$this->Mymodel1->select('tbl_first');
		// $this->load->view('tampil/tampiladmin');
		$data['side']='tampil/side';
		$data['content']='tampil/tampiladmin';
		$this->load->view('tampil/main',$data);
	}

	public function add()
	{
		$data['side']='tampil/side';
		$data['content']='tampil/add_v';
		$this->load->view('tampil/main', $data);

	}

	public function addfunction()
	{
		$data['name']=$this->input->post('idname');
		$data['address']=$this->input->post('idaddress');
		$this->Mymodel1->insert('tbl_first',$data);
		header('location:'.base_url().'index.php/secondController');

	}

	public function update()
	{
		$id=$this->uri->segment(3);
		$data['dataupdate']=$this->db->query("SELECT * FROM tbl_first WHERE no='$id'");
		$data['side']='tampil/side';
		$data['content']='tampil/update_v';
		$this->load->view('tampil/main', $data);

	}

	public function updatefunction()
	{
		$id=$this->input->post('id');
		$where= array('no'=>$id);
		$data['name']=$this->input->post('idname');
		$data['address']=$this->input->post('idaddress');
		$this->Mymodel1->update('tbl_first', $data, $where);
		header('location:'.base_url().'index.php/secondController');
	}

	public function deletedata()
	{
		$id=$this->uri->segment(3);
		$delete=array('no'=>$id);
		$this->Mymodel1->delete('tbl_first',$delete);
		header('location:'.base_url().'index.php/SecondController');
	}

}