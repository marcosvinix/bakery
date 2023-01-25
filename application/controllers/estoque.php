<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estoque extends CI_Controller {

	
	public function index()
	{

		$data["title"] = "Estoque";

		$this->load->helper('url');
		$this->load->view('components/navbar');
		$this->load->view('components/header', $data);
	}
}
