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

}