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

	public function r($categoria)
	{

		if($categoria == 'paes'){
			
			$data["title"] = "Pães";
		
			$this->load->helper('url');
			$this->load->view('components/navbar');
			$this->load->view('components/header', $data);

		}
		if($categoria == 'bolos'){
			
			$data["title"] = "Bolos";
		
			$this->load->helper('url');
			$this->load->view('components/navbar');
			$this->load->view('components/header', $data);

		}
		if($categoria == 'salgados'){
			
			$data["title"] = "Salgados";
		
			$this->load->helper('url');
			$this->load->view('components/navbar');
			$this->load->view('components/header', $data);

		}
		if($categoria == 'folhados'){
			
			$data["title"] = "Folhados";
		
			$this->load->helper('url');
			$this->load->view('components/navbar');
			$this->load->view('components/header', $data);

		}
		if($categoria == 'doces'){
			
			$data["title"] = "Docês";
		
			$this->load->helper('url');
			$this->load->view('components/navbar');
			$this->load->view('components/header', $data);

		}
		if($categoria == 'bebidas'){
			
			$data["title"] = "Bebidas";
		
			$this->load->helper('url');
			$this->load->view('components/navbar');
			$this->load->view('components/header', $data);

		}
		if($categoria == 'outros'){
			
			$data["title"] = "Outros";
		
			$this->load->helper('url');
			$this->load->view('components/navbar');
			$this->load->view('components/header', $data);

		}
	}

}
