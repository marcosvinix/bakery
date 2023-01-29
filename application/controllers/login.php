<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->database();
      $this->load->library('session');
      $this->load->model('bd_padaria');
      $this->load->helper('url');

    }

    public function index() {

      $this->load->view('login');

    }
  
    public function process() {
      $username = $this->input->post('username');
      $password = $this->input->post('password');
  
      if ($this->bd_padaria->validate_credentials($username, $password)) {
  
        $data = array(
          'username' => $username,
          'logged_in' => TRUE
        );
    
        $this->session->set_userdata($data);
        redirect('../home');
        exit;

      } else {
        
        redirect('login');
      }
    }
    
  }