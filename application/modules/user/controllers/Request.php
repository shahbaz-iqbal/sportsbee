 <?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

    public function __construct() {
        parent::__construct();



        // $this->load->model('Webmodel');
        // $this->load->model('web/Registrations');
        $this->load->model('user/Requests');
           $this->load->model('User_model');
    }

    public function index() {

    	$sess= $this->session->all_userdata();
		   $id=$sess['id'];
		   print_r($id);echo'/';
		   
		   $res=$this->Requests->get_captain_details($id);
		   $passData = [
           
           'captaindata'=>$res,
           'id' =>$id
           ];
     //       echo '<pre>';
     //       print_r($res);
		   // die();
         $this->load->view('requests',$passData);
    }

    public function accept_Request(){
    	$playerid=$this->uri->segment(5);
		$teamid=$this->uri->segment(4);
		$check=$this->uri->segment(6);

		$data=array();
    	
    	if($check == 'c'){
    	 
    	  $data['status']=2;
        }else
           {
				$data['status']=1;

           }


		   $res=$this->Requests->accept_Request($playerid,$teamid,$data);
    	// echo $playerid;

		  // print_r($res);
		  // die();
    }

}

?>