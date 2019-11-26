<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function __construct() {
        parent::__construct();
         $this->load->model('user_model');
    }


	public function index()
	{

		// echo "string";
		// $udata=$this->session->get_userdata();
		$r = $this->session->get_userdata();
		$id= $r['id'];
		  $res = $this->user_model->get_user_profile($id);
		 //echo "<pre>";
        // print_r($res);
        //echo "</pre>";


 // $newdata = array(
 //                'name' => $r['name'],
 //                'email' => $r['email'],
 //                'id'=>$r['id'],
 //                'address'=>$r['address'],
 //                'mobile'=>$r['mobile'],
 //               // 'username'=>$r['username']
               
 //            );
		//echo $udata['name'];
		$this->load->view('profile',$res);
	}

	

}
