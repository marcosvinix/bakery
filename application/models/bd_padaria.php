<?php

class bd_padaria extends CI_Model {

    public function get_category_id($name) {
        $this->db->select('id_categoria');
        $this->db->from('Categorias');
        $this->db->where('nome_categoria', $name);
        $query = $this->db->get();
        return $query->row()->id_categoria;
    }

    public function get_receitas($category_id) {
        $this->db->select('*');
        $this->db->from('Receitas');
        $this->db->where('categoria', $category_id);
        $this->db->join('imagens', 'receitas.id_imagem = imagens.id_imagem');
        $query = $this->db->get();
        return $query->result();
    }

    public function get_receita($recipe_name) {
        $this->db->select('*');
        $this->db->from('Receitas');
        $this->db->where('nome_receita', $recipe_name);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_ingredients($recipe_id) {
        $query = $this->db->query("SELECT `i`.* FROM `ingredientes` `i` JOIN `receita_ingrediente` `ri` ON `i`.`id_ingrediente` = `ri`.`id_ingrediente` WHERE `ri`.`id_receita` = $recipe_id");
        return $query->result();
    }

    public function get_img($image_id) {
        $this->db->select('nome_imagem');
        $this->db->from('imagens');
        $this->db->where('id_imagem', $image_id);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_favoritas(){
        $this->db->select('*');
        $this->db->from('receitas');
        $this->db->where('favorita', 1);
        $this->db->join('imagens', 'receitas.id_imagem = imagens.id_imagem');
        $this->db->join('categorias', 'categorias.id_categoria = receitas.categoria');
        $query = $this->db->get();
        return $query->result();
        
    }

    public function get_estoque(){
        $this->db->select('*');
        $this->db->from('estoque');
        $query = $this->db->get();
        return $query->result();
    }

    public function delete_estoque($id){
        $this->db->where('id_produto', $id);
        $this->db->delete('estoque');
    }

    public function pesquisa($name){
        $this->db->select('*');
        $this->db->from('receitas');
        $this->db->join('imagens', 'receitas.id_imagem = imagens.id_imagem');
        $this->db->like('nome_receita', $name);
        $query = $this->db->get();
        return $query->result();
    }

    public function get_categorias(){
        $this->db->select('*');
        $this->db->from('categorias');
        $query = $this->db->get();
        return $query->result();
    }
    
  public function validate_credentials($username, $password) {

    $query = $this->db->get_where('funcionarios', array('login' => $username, 'senha' => $password));
    return $query->num_rows() > 0;
  
    }

    public function get_anotacao($username){
        $this->db->select('bloco');
        $this->db->from('funcionarios');
        $this->db->where('login', $username);
        $query = $this->db->get();
        return $query->result();
    }


    public function update_estoque($id, $quantidade){
        $this->db->where('id_produto', $id);
        $query = $this->db->get('estoque');
        $current_quantity = $query->row()->quantidade_disponivel;
     
        // update the value
        $this->db->where('id_produto', $id);
        $this->db->update('estoque', array('quantidade_disponivel' => $current_quantity - $quantidade));
     }
}