<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class estoque extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('bd_padaria');
		$this->load->library('session');
		$this->load->helper('url');
		
		$logged_in = $this->session->userdata('username');

		if(!$logged_in){
			redirect('./login');
		}
	}

	
	public function index()
	{


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
		$this->load->view('components/adicionar_ingrediente');
	}

	public function delete($id){
		
		$this->bd_padaria->delete_estoque($id);
		redirect('./estoque');

	}

	public function adicionar_ingrediente(){
		print_r($this->input->post());

		$nome_ingrediente = $this->input->post('nome_ingrediente');
		$quantidade_disponivel = $this->input->post('quantidade_disponivel');
		$validade_lote = $this->input->post('validade_lote');
		$tipo_produto = $this->input->post('tipo_produto');
		$medida_produto = $this->input->post('medida_produto');
		$qntd_minima = $this->input->post('qntd_minima');
		$qntd_maxima = $this->input->post('qntd_maxima');


		$data = array(
			
			'descricao_produto_estoque' => $nome_ingrediente,
			'quantidade_disponivel' => $quantidade_disponivel,
			'validade_lote' => $validade_lote,
			'tipo_produto' => $tipo_produto,
			'medida_produto_estoque' => $medida_produto,
			'quantidade_minima_produto' => $qntd_minima,
			'quantidade_maxima_produto' => $qntd_maxima,
			'ignorado' => 0,
			'id_funcionario' => 1

		);

		$this->db->insert('estoque', $data);

		redirect('./estoque');
	}
}
