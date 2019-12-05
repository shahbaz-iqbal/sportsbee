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
        $player['status'] = 1;
        $player['user_type'] = 'player';
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
       
        $player['postalcode'] = $this->input->post('postalcode');
        $player['address'] = $this->input->post('address');
         $Social['facebook'] = $this->input->post('facebook');
         $Social['twitter'] = $this->input->post('twitter');
         $Social['instagram'] = $this->input->post('instagram');
         $Social['youtube'] = $this->input->post('youtube');
         
         $temp=$this->input->post('password');
         $pass=md5($temp);
         $player['enc_password']=$pass;
          $player['city_id'] = $this->input->post('city');
         
         $player_sport_detail['mathes_type'] = implode(' , ', (array) $this->input->post('matchtype'));
         $player_sport_detail['team_type'] = implode(' , ', (array) $this->input->post('teamtype'));
         $player_sport_detail['play_hand']=$this->input->post('switch');
         $player_sport_detail['play_as_id'] = $this->input->post('playertype');
         $player_sport_detail['sport_id'] = $this->input->post('playtype');
        

    
         $gmail = $player['gmail'];
          $res=$this->Registrations->addplayer($player);
          $res1 = $this->Registrations->check_registration($gmail);
          $playerid=$res1[0]->player_id;

          $player_sport_detail['player_id']=$playerid;
          $Social['player_id']=$playerid;
          $res2=$this->Registrations->addsocial($Social);
          $res3=$this->Registrations->addsportdetail($player_sport_detail);
         
         if($res3){
          $this->session->set_flashdata('add', 'Successfully Resistered, Now Your Can login with your Account');
         $this->session->set_flashdata('alert-class', 'alert-success');
         redirect('web/player_registration', 'refresh');
        }

    }

    public function insert_team() {
        $player = array();
        $player['status'] = 1;
        $player['user_type'] = 'captain';
         $team['status'] = 0;
        $team['name'] = $this->input->post('teamname');
        $team['city'] = $this->input->post('teamcity');
      
        $team['sport_id']=$this->input->post('playertype');
      
        $team['postalcode'] = $this->input->post('teampostalcode');
        $team['address'] = $this->input->post('teamaddress');
        if (!empty($this->input->post('teammatchtype'))) {
            $team['matchtype'] = implode(',', $this->input->post('teammatchtype'));
        }
        if (!empty($this->input->post('teamcategory'))) {
            $team['teamcategory'] = implode(',', $this->input->post('teamcategory'));
        }
        $team['description'] = $this->input->post('description');
      //  $team['tokan'] = "sportsbee_" . time() . rand(10, 10000);
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
        $player['postalcode'] = $this->input->post('postalcode');
        $player['address'] = $this->input->post('address');
         $Social['facebook'] = $this->input->post('facebook');
         $Social['twitter'] = $this->input->post('twitter');
         $Social['instagram'] = $this->input->post('instagram');
         $Social['youtube'] = $this->input->post('youtube');
       
          $temp=$this->input->post('password');
         $pass=md5($temp);
         $player['enc_password']=$pass;
        
          $player['city_id'] = $this->input->post('city');
       
        $gmail = $player['gmail'];
        $playerID = $this->Registrations->addplayer($player);
        $teamID = $this->Registrations->addteam($team);
      
        // $player_sport_detail['team_id']=$teamID;
        $player_sport_detail['player_id']=$playerID;
        $player_sport_detail['sport_id']= $this->input->post('playertype');
        // $player_sport_detail['team_type']=>
        // $player_sport_detail['play_as_id']=>
        // $player_sport_detail['play_hand']=>
        // $player_sport_detail['mathes_type']=>

          $Social['player_id']=$playerID;

          $dataTeamPlayer['player_id'] = $playerID;
           $dataTeamPlayer['team_id'] = $teamID;
            $dataTeamPlayer['player_as'] ="captain";
             $dataTeamPlayer['status'] = 0;
                 
                
            

          $res2=$this->Registrations->addsocial($Social);
          $res3=$this->Registrations->addsportdetail($player_sport_detail);
          $res3=$this->Registrations->add_player_team($dataTeamPlayer);
        
        $this->session->set_flashdata('add', 'Successfully Resistered, Now Your Can login with your Account');
        $this->session->set_flashdata('alert-class', 'alert-success');
        redirect('web/team_registration', 'refresh');
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
