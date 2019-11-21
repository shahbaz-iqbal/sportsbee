<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	
	public function __construct() { 
        parent::__construct();



        $this->load->model('Webmodel');
        $this->load->model('web/Registrations');


    }

	public function index()
	{
		$this->load->view('index');
	}

	public function player_registration() {

       // $users = $this->Registrations->get_sport();
       // $playas = $this->Registrations->get_playas();
       // $passData = [
       //     'users' => $users,
       //     'playas' => $playas
       // ];

       
       
        $this->load->view('player_registration');
    }

    public function team_registration() {
        $this->load->view('team_registration');
    }

    public function user_login() {
        $this->load->view('login');
    }
    public function login() {
        $name = $this->input->post('user');
        $pass = $this->input->post('password');
        $user_login = [
            'username' => $name,
            'password' => $pass
        ];
        $res = $this->Webmodel->get_users($user_login);
        if ($res->user_type == 1) {
            $newdata = array(
                'name' => $res->name,
                'id' => $res->id,
                'logged_in' => TRUE,
                'user_type'=>'admin'
            );
            $this->session->set_userdata($newdata);
            redirect('admin/Dashboard', 'refresh');
        } else {
            if ($res->user_type == "") {
                $newdata = array(
                    'name' => $res->name,
                    'id' => $res->id,
                    'logged_in' => TRUE,
                    'user_type'=>'user'
                );
                $this->session->set_userdata($newdata);

                redirect('User/Dashboard','refresh');
            } else {

                $this->session->set_flashdata('error', 'Invalid Email Password');

                $this->load->view('user/login');
            }
        }
    }

    public function logout() {
        $this->session->unset_userdata('logged_in');
        session_destroy();
        redirect(base_url(),'refresh');
    }

}
