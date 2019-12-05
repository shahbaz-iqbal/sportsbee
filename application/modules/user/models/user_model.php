<?php
Class User_model extends CI_Model {
    public function get_user_profile($id){
      $this->db->where('player_id',$id);
      $query = $this->db->get('player');
        $result = $query->row();
        return $result;

    } 

     public function get_touradata(){
        $this->db->select('tournament.*,sports_table.*,city_table.*,matches_type.*,types_of_team.*,tournament_type.*,sponser.name AS sp_name');
        //$this->db->select('*');
    $this->db->from('tournament');
     $this->db->join('sports_table', 'sports_table.sport_id = tournament.sport_id', 'right outer'); 
     $this->db->join('city_table', 'city_table.city_id = tournament.city_id', 'right outer'); 
    $this->db->join('matches_type', 'matches_type.matches_type_id = tournament.matches_type_id', 'right outer'); 
    $this->db->join('types_of_team', 'types_of_team.team_type_id = tournament.team_type_id', 'right outer'); 
    $this->db->join('tournament_type', 'tournament_type.tournTid = tournament.tournTid', 'right outer');
    $this->db->join('sponser', 'sponser.sp_id = tournament.sp_id', 'left outer');
    $query = $this->db->get();
       return $query->result();

    }
    public function get_team_id($id){

    	$this->db->select('player_team_table.team_id');
    	$this->db->from('player_team_table');

    	$this->db->where('player_id',$id);
    	$q = $this->db->get();
         $id=$q->result();
         $idd=$id[0]->team_id;
         return $idd;

    }
 public function get_playerteamtbl(){
 	$this->db->select('*');
 	$this->db->from('player_team_table');
 	$query=$this->db->get();
 	return $query->result();
 }

    public function get_playersdata($team_id){

    	 // $this->db->select('sports_table.*,city_table.*,matches_type.*,types_of_team.*,player_sports_detail.*,play_as.*,player_team_table.*, player.*');
    	$this->db->select('player.name,player.player_id,player.dob,player.phone1,player.city_id,player_sports_detail.mathes_type,player_sports_detail.team_type,player_sports_detail.team_type,
    		player_sports_detail.sport_id,player_sports_detail.play_as_id,city_table.name AS city_name,sports_table.sport_name,play_as.name AS playtype,types_of_team.type_name AS playLevel,matches_type.match_name,player_team_table.player_team_id,player_team_table.player_as,player_team_table.team_id,player_team_table.status');
    	  $this->db->from('player');
     $this->db->join('player_team_table', 'player_team_table.player_id = player.player_id', 'left'); 
      $this->db->join('player_sports_detail', 'player.player_id = player_sports_detail.player_id', 'left'); 
        $this->db->join('city_table', 'player.city_id = city_table.city_id', 'left'); 
          $this->db->join('sports_table', 'player_sports_detail.sport_id = sports_table.sport_id', 'left'); 
            $this->db->join('play_as', 'player_sports_detail.play_as_id = play_as.play_as_id', 'left'); 
             $this->db->join('types_of_team', 'player_sports_detail.team_type = types_of_team.team_type_id', 'left'); 
     $this->db->join('matches_type', 'player_sports_detail.mathes_type = matches_type.matches_type_id ', 'left');
     $this->db->where('player.user_type','');
             // $this->db->join('player_team_table','player_team_table.player_id = player.player_id','left');
     // $this->db->where('player_team_table.team_id !=',$team_id);
     // $this->db->where('player_team_table.status !=',1);

     $query = $this->db->get();
     $results = $query->result();
     foreach ($results as $key => $result) {
     	if($result->team_id == $team_id AND $result->status == 1){
     		unset($results[$key]);
     	}

     }
     return $results;
     
     // echo '<pre>';
     //    print_r($query->result());
     //    die();



    }


    public function check_req_limit($user_id){

    	$this->db->select('player_team_table.team_id');
    	$this->db->from('player_team_table');

    	$this->db->where('player_id',$user_id);
    	$q = $this->db->get();
         $id=$q->result();
         $idd=$id[0]->team_id;
        
         $this->db->where('team_id',$idd);
         $res1 =$this->db->count_all_results('player_team_table'); 
         // print_r("COUNT:".$res1);
         $result=$res1.','.$idd;
         return $result;
    	
    }

    public function add_Request($data){

    	

         $d=$data;
        // $t=$teamid;
    	$msg=$d;

    	$this->db->insert('player_team_table',$d);
    	// print_r($msg);
    	// die();

    	 // return $msg;



    	 // $this->db->insert('player',$data);
    }

    public function cancle_Request($playerid){
    	 $this->db->where('player_id', $playerid);
        $result = $this->db->delete('player_team_table');
        return $result;
    }
}

?>