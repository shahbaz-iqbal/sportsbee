<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Indoorteam extends CI_Controller {

    public function __construct() {
        parent::__construct();
       $this->load->model('Indoorteams');
    }

    public function index() {
 
      $ind_team_data=$this->Indoorteams->get_ind_team();
      $roles=$this->Indoorteams->get_roles();

      $passData=[
           'ind_team'=>$ind_team_data,
           //'edit_ind_team'=>$roles,
           'add_ind_team'=>$roles,
           'team_type' =>"Indoor team",
      ];
     
        $this->load->view('indoor',$passData);
    }

    public function outdoorpage(){

      $ind_team_data = $this->Indoorteams->get_out_team();
      $roles=$this->Indoorteams->get_roles();

      $passData=[
           'ind_team'=>$ind_team_data,
           //'edit_ind_team'=>$roles,
           'add_ind_team'=>$roles,
           'team_type' =>"Outdoor team"
      ];
        
        $this->load->view('outdoor',$passData);
    }

     public function add_indoor() {


         $status='Indoor team';
         $id=$this->input->post('edit_hidden_id');  
         $role_action=$this->input->post('role_action');
         // role_Action 1 is Add role (role=indoor team)........ role_Action else is edit role (role=indoor team)  
      
         $name = $this->input->post('name'); 
         $email = $this->input->post('email'); 
         $password=$this->input->post('password');
         $enc_password=md5($password);
         $role=$this->input->post('rolename');
         $phone1=$this->input->post('phone1');
         $address=$this->input->post('address');
         $module = implode(' , ', (array) $this->input->post('module_access'));
         // $module=$this->input->post('module');
         
       
                  $data = array(
                      'ind_team_name'=>$name,
                      'ind_email'=>$email,
                      'ind_password'=>$password,
                      'ind_enc_password'=>$enc_password,
                      'ind_phone1'=>$phone1,
                      'ind_address'=>$address,
                      'ind_modules'=>$module,
                      'role_id'=>$role,
                      'team_status'=>$status
                     
                      ); 
                  print_r($data);
                  exit();
                
                 

         if($role_action == 1){
           
            $res = $this->Indoorteams->insert_indoor($data);
         }else{

             $res = $this->Indoorteams->edit_indoor($data,$id);
         }

       
      
          redirect(base_url('admin/Indoorteam/index'), 'refresh');
        //$this->load->view('Tindex');
    }
    public function add_outdoor() {

        
         $status='Outdoor team';
         $id=$this->input->post('edit_hidden_id');  
         $role_action=$this->input->post('role_action');
         // role_Action 1 is Add role (role=indoor team)........ role_Action else is edit role (role=indoor team)  
        // $rolename = $this->input->post('rolename');
         $name = $this->input->post('name'); 
         $email = $this->input->post('email'); 
        
        
         $role=$this->input->post('rolename');
         $phone1=$this->input->post('phone1');
         $address=$this->input->post('address');
       
         // $module=$this->input->post('module');
         
       
                  $data = array(
                      'ind_team_name'=>$name,
                      'ind_email'=>$email,
                      'ind_password'=>'',
                      'ind_enc_password'=>'',
                      'ind_phone1'=>$phone1,
                      'ind_address'=>$address,
                      'ind_modules'=>'',
                      'role_id'=>$role,
                      'team_status'=>$status
                     
                      ); 
                
                 

         if($role_action == 1){
           
            $res = $this->Indoorteams->insert_indoor($data);
         }else{

             $res = $this->Indoorteams->edit_indoor($data,$id);
         }

       
      
          redirect(base_url('admin/Indoorteam/outdoorpage'), 'refresh');
        //$this->load->view('Tindex');
    }



    public function fetch_single_user(){
       
        $output =array();
       // $user_id=$_POST['userid'];
       $user_id = $this->uri->segment(4);
      
       $data= $this->Indoorteams->fetch_single_user($user_id);

       foreach ($data as $row) {
          $output['indoor_id']=$row->indoor_id;
           $output['ind_name']=$row->ind_team_name;
           $output['ind_email']=$row->ind_email;
           $output['ind_password']=$row->ind_password;
           $output['ind_phone1']=$row->ind_phone1;
            $output['ind_address']=$row->ind_address;
            $modul = explode(',', $row->ind_modules);

             $output['ind_modules']= $modul;
             $output['role_id']=$row->role_id;
          
       }
       echo json_encode($output);

    }

   


    public function delete() {
        $id = $this->uri->segment(4);
        $res = $this->Indoorteams->delete_indoor($id);
        if($res) {
            $this->session->set_flashdata('success', 'User delete successfully');
        } else {
            $this->session->set_flashdata('error', 'User not delete successfully');
        }
        $this->index();
    } 


    public function delete_out() {
        $id = $this->uri->segment(4);
        $res = $this->Indoorteams->delete_indoor($id);
        if($res) {
            $this->session->set_flashdata('success', 'User delete successfully');
        } else {
            $this->session->set_flashdata('error', 'User not delete successfully');
        }
        redirect(base_url('admin/Indoorteam/outdoorpage'), 'refresh');
    } 
      function check_phone1_availbility(){
        if($this->Indoorteams->is_phone1_available($_POST["phone1"])){

            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Mobile# Already registered</label>';
        }else{
         echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Mobile# Available</label>';
        }
    }
    

     function check_email_avalibility() {

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"> Invalid Email</span></label>';
        } else {
            if ($this->Indoorteams->is_email_available($_POST["email"])) {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already registered</label>';
                 
            } else {
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';
            }
        }
    }


}
