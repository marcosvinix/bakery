<?php

class Logout extends CI_Controller {

    public function __construct() {
      parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
    }
  
    public function index() {
      // destroy the user's session data
      $this->session->sess_destroy();
  
      // redirect to login page
      redirect(base_url('/login'));
    }
  }