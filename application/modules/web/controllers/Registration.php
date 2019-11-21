<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Registration extends CI_Controller {

    function __construct(){

        parent::__construct();

        $this->load->model('web/Registrations');
    }

    

    public function insert_player() {
        $player = array();
        $Social=array();
        $player['status'] = 3;
        $player['name'] = $this->input->post('fullname');
        $player['fathername'] = $this->input->post('fathername');
        $player['cnic'] = $this->input->post('cnic');
        $player['dob'] = $this->input->post('dob');
        $player['gender'] = $this->input->post('gender');
        $player['bloodgroup'] = $this->input->post('bloodgroup');
        $player['bio'] = $this->input->post('bio');
        $player['gmail'] = $this->input->post('gmail');
        $player['username'] = $this->input->post('username');
        $player['password'] = ($this->input->post('password'));
        $player['phone1'] = $this->input->post('phone1');
        $player['phone2'] = $this->input->post('phone2');
        $player['city'] = $this->input->post('city');
        $player['postalcode'] = $this->input->post('postalcode');
        $player['address'] = $this->input->post('address');
        // $Social['facebook'] = $this->input->post('facebook');
        // $Social['twitter'] = $this->input->post('twitter');
        // $Social['instagram'] = $this->input->post('instagram');
        // $Social['youtube'] = $this->input->post('youtube');
        // $player['player_type'] = $this->input->post('playertype');
        // $player['sports_style'] = $this->input->post('switch');
        // $player['match_type'] = implode(' , ', (array) $this->input->post('matchtype'));
        // $player['team_type'] = implode(' , ', (array) $this->input->post('teamtype'));

        // if (!empty($_FILES['upload']['name'])) {
        //     $fileInfo = pathinfo($_FILES['upload']['name']);
        //     $newName = time() . '.' . $fileInfo['extension'];
        //     move_uploaded_file($_FILES['upload']['tmp_name'], "assets/uploads/" . $newName);
        // }
        // if (!empty($_FILES['upload']['name'])) {
        //     $player['profile_image'] = $newName;
        // }
          $res=$this->Registrations->addplayer($player);
         // foreach ($res as $value) {
         //   echo 'i am res :'.$value;
         // }

         // echo 'i am res :'.$res;
         // $t = $this->Registrations->ms();
         // echo '<br>this is t:'.$t;
         //$res = $this->Registrations->add_social_player($Social);
         if($res){
         // $this->session->set_flashdata('add', 'Successfully Resistered, Now Your Can login with your Account');
         //$this->session->set_flashdata('alert-class', 'alert-success');
         redirect('web/user_login', 'refresh');
        }

    }

    public function insert_team() {
        $player = array();
        $player['status'] = 3;
        $team['name'] = $this->input->post('teamname');
        $team['city'] = $this->input->post('teamcity');
        $team['postalcode'] = $this->input->post('teampostalcode');
        $team['address'] = $this->input->post('teamaddress');
        if (!empty($this->input->post('teammatchtype'))) {
            $team['matchtype'] = implode(',', $this->input->post('teammatchtype'));
        }
        if (!empty($this->input->post('teamcategory'))) {
            $team['teamcategory'] = implode(',', $this->input->post('teamcategory'));
        }
        $team['description'] = $this->input->post('description');
        $team['tokan'] = "sportsbee_" . time() . rand(10, 10000);
        $player['name'] = $this->input->post('fullname');
        $player['fathername'] = $this->input->post('fathername');
        $player['cnic'] = $this->input->post('cnic');
        $player['dob'] = $this->input->post('dob');
        $player['gender'] = $this->input->post('gender');
        $player['bloodgroup'] = $this->input->post('bloodgroup');
        $player['bio'] = $this->input->post('bio');
        $player['gmail'] = $this->input->post('gmail');
        $player['username'] = $this->input->post('username');
        $player['password'] = md5($this->input->post('password'));
        $player['phone1'] = $this->input->post('phone1');
        $player['phone2'] = $this->input->post('phone2');
        $player['city'] = $this->input->post('city');
        $player['postalcode'] = $this->input->post('postalcode');
        $player['address'] = $this->input->post('address');
        $player['profile_image_tag'] = $this->input->post('fullname') . " image";
        $player['captain_status'] = 1;
        $player['facebook'] = $this->input->post('facebook');
        $player['twitter'] = $this->input->post('twitter');
        $player['instagram'] = $this->input->post('instagram');
        $player['youtube'] = $this->input->post('youtube');
        $player['player_type'] = $this->input->post('playertype');
        $player['sports_style'] = $this->input->post('switch');
        if (!empty($this->input->post('matchtype'))) {
            $player['match_type'] = implode(',', $this->input->post('matchtype'));
        }
        if (!empty($this->input->post('teamtype'))) {
            $player['team_type'] = implode(',', $this->input->post('teamtype'));
        }
        if (!empty($_FILES['upload']['name'])) {
            $fileInfo = pathinfo($_FILES['upload']['name']);
            $newName = time() . '.' . $fileInfo['extension'];
            move_uploaded_file($_FILES['upload']['tmp_name'], "assets/uploads/" . $newName);
        }
        if (!empty($_FILES['upload']['name'])) {
            $player['profile_image'] = $newName;
        }
        $gmail = $player['gmail'];
        $this->Registrations->addplayer($player);
        $res = $this->Registrations->check_registration($gmail);
        $captionid = $res[0]->id;
        $team['captain_id'] = $captionid;
        $this->Registrations->addteam($team);
        $this->session->set_flashdata('add', 'Successfully Resistered, Now Your Can login with your Account');
        $this->session->set_flashdata('alert-class', 'alert-success');
        redirect('Registration/team_registration', 'refresh');
    }

    function check_email_avalibility() {

        if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"> Invalid Email</span></label>';
        } else {
            if ($this->Registrations->is_email_available($_POST["email"])) {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email Already registered</label>';
                 
            } else {
                echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Email Available</label>';
            }
        }
    }

    function check_username_availbility(){

        if($this->Registrations->is_username_available($_POST["Uname"])){
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Username Already registered</label>';

        }else{
              echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Username Available</label>';
        }
    }

    function check_cnic_availbility(){

        if($this->Registrations->is_cnic_available($_POST["cnic"])){
            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Cnic Already registered</label>';
        }else{
         echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Cnic Available</label>';
        }
    }

    function check_phone1_availbility(){
        if($this->Registrations->is_phone1_available($_POST["phone1"])){

            echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Mobile# Already registered</label>';
        }else{
         echo '<label class="text-success"><span class="glyphicon glyphicon-ok"></span> Mobile# Available</label>';
        }
    }

    // function load_options_sports(){
    //     $users = $this->Registrations->get_sport();
    //     console.log($users);
    //     $a="";
    //      if (count($x) > 0) { 
    //              foreach ($x as $user) { 
    //   $a=' <option class="bloodgrouplist"  selected value="">'.$user->sport_name.'</option>'.'<br>';
       
            // }                                      
              
    //     echo $a;
    //   }


    //...............Loading Options when pages loaded with WEB Controller ...............//

    
        
        
    

}
