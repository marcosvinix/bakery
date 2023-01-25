<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	public function index()
	{

		$data["title"] = "Home";

		$this->load->helper('url');
		$this->load->view('components/navbar');
		$this->load->view('components/header', $data);
		$this->load->view('home');
	}
}
