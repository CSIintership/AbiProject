<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function LoginAction()
	{
		$u=$this->input->post('username');
		$p=$this->input->post('password');
		$this->Mymodel1->login($u, $p);
	}

	public function Logout()
	{
		$this->session->sess_destroy();
		header('location:'.base_url().'Welcome');
	}
}