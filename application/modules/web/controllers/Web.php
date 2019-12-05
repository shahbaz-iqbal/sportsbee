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

       $users = $this->Registrations->get_sport();
       $playas = $this->Registrations->get_playas();
       $cities=$this->Registrations->get_cities();
       $matchtype=$this->Registrations->get_match_type();
       $teamtype=$this->Registrations->get_team_level();
       $passData = [
           'users' => $users,
           'playas' => $playas,
           'cities'=>$cities,
           'matchtype' => $matchtype,
           'teamtype' =>$teamtype
       ];

       
       
        $this->load->view('player_registration',$passData);
    }

    public function team_registration() {
         $users = $this->Registrations->get_sport();
       $playas = $this->Registrations->get_playas();
       $cities=$this->Registrations->get_cities();
       $passData = [
           'users' => $users,
           'playas' => $playas,
           'cities'=>$cities,
           'playercities'=>$cities,
       ];
        $this->load->view('team_registration',$passData);
    }

    public function user_login() {
        $this->load->view('login');
    }
    public function login() {
        $name = $this->input->post('user');
        //$gmail=$this->input->post('gmail');
        $pass = $this->input->post('password');
        $user_login = [
            'username' => $name,
            'password' => $pass
        ];
        $res = $this->Webmodel->get_users($user_login);
        if ($res->status == 5) {
            $newdata = array(
                'name' => $res->name,
                'id' => $res->player_id,
                'logged_in' => TRUE,
                'user_type'=>'admin'
            );
            $this->session->set_userdata($newdata);
            redirect('admin/Dashboard', 'refresh');
        } else {
            if ($res->status == 1) {
                $newdata = array(
                    'name' => $res->name,
                    'id' => $res->player_id,
                    'email'=>$res->gmail,
                    'address'=>$res->address,
                    'mobile'=>$res->phone1,
                    'username'=>$res->username,
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
