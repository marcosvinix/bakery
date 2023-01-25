<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categorias extends CI_Controller {

	
	public function index()
	{

		$data["title"] = "Categorias";

		$this->load->helper('url');
		$this->load->view('components/navbar');
		$this->load->view('components/header', $data);
		$this->load->view('categorias');

	}
}
