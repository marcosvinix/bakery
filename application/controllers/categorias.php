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

	public function r($categoria,$receita = null)
	{
		$this->load->database();
		$this->load->model('bd_padaria');

		if($receita == null){

			$data["title"] = $categoria;

			$category_id = $this->bd_padaria->get_category_id($categoria);
			$data['receitas'] = $this->bd_padaria->get_receitas($category_id);
	
			$this->load->helper('url');
			$this->load->view('components/navbar');
			$this->load->view('components/header', $data);
			$this->load->view('receitas', $data);
		}

			if($receita != null){

				$data['title'] = urldecode($receita);
				$data['recipe'] = $this->bd_padaria->get_receita(urldecode($receita));
				$data['ingredients'] = $this->bd_padaria->get_ingredients($data['recipe'][0]->id_receita);

				$this->load->helper('url');
				$this->load->view('components/navbar');
				$this->load->view('components/header', $data);
				$this->load->view('receita', $data);
				
			}
			

	}

}
