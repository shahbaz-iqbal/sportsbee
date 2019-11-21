<?php
Class Registrations extends CI_Model {

  function __construct(){

        parent::__construct();
      $this->load->database();
       
    }
    public function get_users($user_login){
        $this->db->where('username',$user_login['username']);
        $this->db->where('password',$user_login['password']);
        $query = $this->db->get('player');
        $result = $query->row();
        return $result;
    }
      public function addsocialaccounts($social){
    	$this->db->insert('player_socialaccounts',$social);
    }
    public function addscricketinfo($sportsinfo){
    	$this->db->insert('player_cricketinfo',$sportsinfo);
    }
    public function addplayer($data){
        if($this->db->insert('player',$data)){
          return 'true';
        }
        else{
          return 'false';
        }
    }
    public function addteam($data){
        $this->db->insert('team',$data);
    }
     public function check_registration($gmail){
        $this->db->where('gmail',$gmail);
         return $this->db->get('player')->result();  
    }
     function is_email_available($email)  
      {  
           $this->db->where('gmail', $email);  
           $query = $this->db->get("player");  
           if($query->num_rows() > 0)  
           {  
                return true;  
           }  
           else  
           {  
                return false;  
           }  
      } 
     

      function is_username_available($Uname){

          $this->db->where('username',$Uname);
          $query=$this->db->get("player");
          if($query->num_rows() > 0){
            return true;
          }else{
            return false;
          }
      }

      function is_cnic_available($cnic){
        $this->db->where('cnic',$cnic);
        $query=$this->db->get('player');
        if($query->num_rows()  >0){
          return true;
        }else{
          return false;
        }
      }

      function is_phone1_available($phone1){
         $this->db->where('phone1',$phone1);
        $query=$this->db->get('player');
        if($query->num_rows()  >0){
          return true;
        }else{
          return false;
        }
      }

      // function sport_list_is(){
          
      //   $query = $this->db->query('SELECT sport_name FROM sports_table');
          
      //      // $sport_options=array();
      //        $result = $query->result();
      //       return $result;
      //       // foreach ($query->result() as $row)
      //       // {
      //       //         $sport_options[]=$row->sport_name;
                    
      //       // }

         // echo 'Total Results: ' . $query->num_rows();
         //  $x=$query->num_rows();
        // return $sport_options;
        // $this->db->where('sport_id','1');
        // $query=$this->db->get('sports_table');
        // if($query->num_rows()  >0){
        //   return true;
        // }else{
        //   return false;
        // }

           // }
     //       function get_sport(){
     //      $this->db->where('player_type',0);
     //  $query = $this->db->get('player_cricketinfo');
     //  $result = $query->result();
     //  return $result;
     // }

      function get_sport(){

      $this->db->select('*');
      $query = $this->db->get('sports_table');
      $result = $query->result();
      return $result;
     }

     function get_playas(){

      $this->db->select('*');
      $query = $this->db->get('play_as');
      $result = $query->result();
      return $result;
     }
}