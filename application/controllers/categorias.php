<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class categorias extends CI_Controller {

	
	public function index()
	{
		$this->load->database();
		$this->load->model('bd_padaria');

		$notify = $this->bd_padaria->get_estoque();
		foreach($notify as $n){
			if($n->quantidade_disponivel <= $n->quantidade_minima_produto+($n->quantidade_minima_produto*0.5)){
				$notify_all[] = $n;
			}
		}
		$data["notificacoes"] = $notify_all;

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

		$notify = $this->bd_padaria->get_estoque();
		foreach($notify as $n){
			if($n->quantidade_disponivel <= $n->quantidade_minima_produto+($n->quantidade_minima_produto*0.5)){
				$notify_all[] = $n;
			}
		}
		$data["notificacoes"] = $notify_all;

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
				$data['imagem'] = $this->bd_padaria->get_img($data['recipe'][0]->id_imagem);

				$this->load->helper('url');
				$this->load->view('components/navbar');
				$this->load->view('components/header', $data);
				$this->load->view('receita', $data);
				
			}
			

	}

}
