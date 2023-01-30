<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class receitas extends CI_Controller {

	
	public function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('bd_padaria');
		$this->load->library('session');
		$this->load->helper('url');
		
		
		$logged_in = $this->session->userdata('logged_in');

		if(!$logged_in){
			redirect('./login');
		}

		
	}
	
	public function index()
	{
	
		$data['estoque'] = $this->bd_padaria->get_estoque();

		$notify = $this->bd_padaria->get_estoque();
		foreach($notify as $n){
			if($n->quantidade_disponivel <= $n->quantidade_minima_produto+($n->quantidade_minima_produto*0.5)){
				$notify_all[] = $n;
			}
		}
		$data["notificacoes"] = $notify_all;

		$data["title"] = "Categorias";

		$this->load->view('components/navbar');
		$this->load->view('components/header', $data);
		$this->load->view('categorias');
	

	} 

	public function r($categoria,$receita = null)
	{
		
		
		$notify = $this->bd_padaria->get_estoque();
		foreach($notify as $n){
			if($n->quantidade_disponivel <= $n->quantidade_minima_produto+($n->quantidade_minima_produto*0.5)){
				$notify_all[] = $n;
			}
		}
		$data["notificacoes"] = $notify_all;
		$data["categorias"] = $this->bd_padaria->get_categorias();
		$data['estoque'] = $this->bd_padaria->get_estoque();


		if($receita == null){

			$data["title"] = $categoria;

			$category_id = $this->bd_padaria->get_category_id($categoria);
			$data['receitas'] = $this->bd_padaria->get_receitas($category_id);

			$this->load->view('components/navbar');
			$this->load->view('components/header', $data);
			$this->load->view('receitas', $data);
			$this->load->view('components/adicionar_receita');
		}

			if($receita != null){

				$data['title'] = urldecode($receita);
				$data['recipe'] = $this->bd_padaria->get_receita(urldecode($receita));
				$data['ingredients'] = $this->bd_padaria->get_ingredients($data['recipe'][0]->id_receita);
				$data['imagem'] = $this->bd_padaria->get_img($data['recipe'][0]->id_imagem);
				

				$this->load->view('components/navbar');
				$this->load->view('components/header', $data);
				$this->load->view('receita', $data);
				$this->load->view('components/adicionar_receita');
				
			}
			

	}

	public function get_ingredientes(){
		$ingredientes = $this->bd_padaria->get_estoque();
		echo json_encode($ingredientes);

	}


	public function att_estoque(){
		print_r($this->input->post('ids'));
		print_r($this->input->post('qntds'));

		$ids = $this->input->post('ids');
		$qntds = $this->input->post('qntds');

		$j = 0;
		foreach ($ids as $id) {
			$this->bd_padaria->update_estoque($id,$qntds[$j]);
			$j++;
		}

		redirect('../../p/receitas');
	}


	public function adicionar_receita(){
		print_r($this->input->post());

		$nome_receita = $this->input->post('nome_receita');
		$modo_preparo = $this->input->post('modo_preparo');
		$rendimento_receita = $this->input->post('rendimento_receita');
		$categoria_receita = $this->input->post('categoria_receita');
		$imagem_receita = $this->input->post('imagem_receita');
		
		$data = array(
			'nome_imagem' => $imagem_receita
		);

		$this->db->insert('imagens', $data);

		$image_id = $this->db->insert_id();
	

		$data = array(
			'nome_receita' => $nome_receita,
			'instrucoes_receita' => $modo_preparo,
			'rendimento' => $rendimento_receita,
			'categoria' => $categoria_receita,
			'id_imagem' => $image_id,
			'favorita' => 0
			
		);

		$this->db->insert('receitas', $data);
	

		$recipe_id = $this->db->insert_id();
	

		$ingredients = $this->input->post('ingredientes');
		$porcentagens = $this->input->post('porcentagens');
	
		$j = 0;

		foreach ($ingredients as $ingredient) {

			$data = array(
			'nome' => $ingredient,
			'porcentagem' => $porcentagens[$j]
			);

			$this->db->insert('ingredientes', $data);
	
			
			$ingredient_id = $this->db->insert_id();
	
			
			$data = array(
			'id_receita' => $recipe_id,
			'id_ingrediente' => $ingredient_id
			);
			$this->db->insert('receita_ingrediente', $data);

			$j++;
		}

			redirect('../../p/receitas');
		
		}
	}


