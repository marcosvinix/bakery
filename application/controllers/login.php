<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function index() {
      // Carrega a view do formulário de login
      $this->load->view('login');
    }
  
    public function process() {
      // Recupera as credenciais do usuário do formulário
      $username = $this->input->post('username');
      $password = $this->input->post('password');
  
      // Verifica se as credenciais são válidas
      if ($this->validate_credentials($username, $password)) {
        // Inicia a sessão do usuário
        $this->session->set_userdata('username', $username);
       
        redirect('./p/home');
      } else {
        
        $this->session->set_flashdata('error', 'Invalid credentials');
        redirect('login');
      }
    }
  
    private function validate_credentials($username, $password) {
      
        
    }
  }