<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	
	
	public function index()
	{
		$this->load->database();
		$this->load->model('bd_padaria');

		$data["title"] = "Home";
		$data["favoritas"] = $this->bd_padaria->get_favoritas();

		print_r($data['favoritas']);

		$this->load->helper('url');
		$this->load->view('components/navbar');
		$this->load->view('components/header', $data);
		$this->load->view('home');
	}
}
