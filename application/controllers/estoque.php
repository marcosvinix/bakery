<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estoque extends CI_Controller {

	
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


		$data["title"] = "Estoque";
		$data["estoque"] = $this->bd_padaria->get_estoque();

		$this->load->helper('url');
		$this->load->view('components/navbar');
		$this->load->view('components/header', $data);
		$this->load->view('estoque',$data);
	}

	public function delete($id){
		
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('bd_padaria');
		$this->bd_padaria->delete_estoque($id);
		redirect('./estoque');

	}
}
