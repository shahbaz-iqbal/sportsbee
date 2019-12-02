<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Roletype extends CI_Controller {

    public function __construct() {
        parent::__construct();
       $this->load->model('Roletypes');
    }

    public function index() {
 
      $roles=$this->Roletypes->get_roles();

      $passData=[
           'roles'=>$roles,
           'addroles'=>$roles
      ];
        
        $this->load->view('role',$passData);
    }

     public function add_role() {
         

         $role_action=$this->input->post('role_action');
         // role_Action 1 is Add role ........ role_Action empty  is edit role   
         $rolename = $this->input->post('rolename');   
         $id=$this->input->post('edit_hidden_id');  
       
                  $data = array(
                     
                      'role_name'=>$rolename
                
                  );

         if($role_action == 1){
           
            $res = $this->Roletypes->insert_role($data);
         }else{

             $res = $this->Roletypes->edit_role($data,$id);
         }

       
      
          redirect(base_url('admin/Roletype/index'), 'refresh');
        //$this->load->view('Tindex');
    }


    public function fetch_single_user(){
        $output =array();
       // $user_id=$_POST['userid'];
       $user_id = $this->uri->segment(4);
      
       $data= $this->Roletypes->fetch_single_user($user_id);
       foreach ($data as $row) {
          $output['role_id']=$row->role_id;
           $output['rolename']=$row->role_name;
          
       }
       echo json_encode($output);

    } 

    public function count_reserved_roles(){
      // print_r('helloo');
      // die();
     // $output='';
      $id=$this->uri->segment(4);
      $data=$this->Roletypes->count_reserved_roles($id);
      // print_r($data);
      // die();
      echo $data;
      //die();
    }

   


    public function delete() {
        $id = $this->uri->segment(4);
        $res = $this->Roletypes->delete_Role($id);
        if($res) {
            $this->session->set_flashdata('success', 'User delete successfully');
        } else {
            $this->session->set_flashdata('error', 'User not delete successfully');
        }
        $this->index();
    }

 // function view_(){
 //     $id = $this->uri->segment(4);
 //   $roles=$this->Roletypes->get_roles_associated_teams($id);
   
 //   echo '<pre>';
 //   print_r($roles);
 //   echo '</pre>';
 //   die();

 //      // $passData=[
 //      //      'roles'=>$roles,
 //      //      'addroles'=>$roles
 //      // ];
       
        
 //        $this->load->view('teams');
 //    }

 


}
