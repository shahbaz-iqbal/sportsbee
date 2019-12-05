<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('user_model');
    }
    
    public function index() {
        $r = $this->session->get_userdata();
        $id = $r['id'];
        $res = $this->user_model->get_user_profile($id);
        $this->load->view('profile', $res);
    }

}
