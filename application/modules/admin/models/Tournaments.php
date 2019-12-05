<?php

Class Tournaments extends CI_Model {

    function insert_tourn($data){
        $this->db->insert('tournament',$data);
    }
    
    function get_tourdata(){
        $this->db->select('*');
      $query = $this->db->get('tournament');
      $result = $query->result();
      return $result;

    }

    function get_sponser(){
        return $this->db->get('sponser')->result();
    }
    function get_all_tourdata(){

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

        // echo '<pre>';
        // print_r($query->result());
        // die();

        // $this->db->where('', 3);
        // $query = $this->db->get('player');
        // $result = $query->result();
        // return $result;

    }
    function fetch_single_user($user_id){

    $this->db->select('*');
    $this->db->from('tournament');
    $this->db->where("tournid",$user_id);
    $this->db->join('sports_table', 'sports_table.sport_id = tournament.sport_id', 'right outer'); 
    $this->db->join('city_table', 'city_table.city_id = tournament.city_id', 'inner'); 
    $this->db->join('matches_type', 'matches_type.matches_type_id = tournament.matches_type_id', 'inner'); 
    $this->db->join('types_of_team', 'types_of_team.team_type_id = tournament.team_type_id', 'inner'); 
    $query = $this->db->get();

        // $this->db->where("tournid",$user_id);
        // $query=$this->db->get('tournament');
        return $query->result();

    }
     function update_user($id,$data) {
        $this->db->where('tournid', $id);
        $result = $this->db->update('tournament', $data);
        return $result;
    }
    function delete_tournament($id) {
         $this->db->where('tournid', $id);
        $result = $this->db->delete('tournament');
        return $result;
    }

     function get_sport(){

      $this->db->select('*');
      $query = $this->db->get('sports_table');
      $result = $query->result();
      return $result;
     }
     function get_matchtype(){
        $this->db->select('*');
      $query = $this->db->get('matches_type');
      $result = $query->result();
      return $result;
     }
     function get_teamtype(){
        
      $this->db->select('*');
      $query = $this->db->get('types_of_team');
      $result = $query->result();
      return $result;
     }

     
     function get_cities(){
       $this->db->select('*');
      $query = $this->db->get('city_table');
      $result = $query->result();
      return $result;
     }

//     function all_player() {
//         $query = $this->db->get('player');
//         $result = $query->result();
//         return $result;
//     }

//     function all_teams() {
//         $query = $this->db->get('team');
//         $result = $query->result();
//         return $result;
//     }

//     function player_request() {
//         $this->db->order_by('id', 'DESC');
//         $this->db->where('status', 3);
//         $query = $this->db->get('player');
//         $result = $query->result();
//         return $result;
//     }

//     function accept_player_req($id, $data) {
//         $this->db->where('id', $id);
//         $result = $this->db->update('player', $data);
//         return $result;
//     }

//     function reject_player_req($id, $data) {
//         $this->db->where('id', $id);
//         $result = $this->db->update('player', $data);
//         return $result;
//     }

//     function team_request() {
//         $this->db->where('status', 3);
//         $query = $this->db->get('team');
//         $result = $query->result();
//         return $result;
// //        $result = $this->db->select('team.name as teamname,team.tokan,team.id,team.address,team.city,team.postalcode,team.teamcategory,team.matchtype,player.profile_image,player.name,player.fathername,player.cnic,player.dob,player.username,player.gender,player.bloodgroup,player.facebook,player.instagram,player.twitter,player.youtube,player.bio,player.phone1,player.phone2,player.postalcode,player.player_type,player.sports_style,player.match_type,player.team_type,player.gmail')
// //                        ->from('team')
// //                        ->join('player', 'player.id = team.captain_id')
// //                        ->where('team.status', 3)
// //                        ->get()->result();
// //        return $result;
//     }

//     function accept_team_req($id, $data) {
//         $this->db->where('team_id', $id);
//         $result = $this->db->update('team', $data);
//         return $result;
//     }

//     function reject_team_req($id, $data) {
//         $this->db->where('team_id', $id);
//         $result = $this->db->update('team', $data);
//         return $result;
//     }

//     function active_player() {
//         $this->db->order_by('id', 'DESC');
//         $this->db->where('status', 1);
//         $query = $this->db->get('player');
//         $result = $query->result();
//         return $result;
//     }

//     function deactive_player() {
//         $this->db->order_by('id', 'DESC');
//         $this->db->where('status', 0);
//         $query = $this->db->get('player');
//         $result = $query->result();
//         return $result;
//     }

//     function active_team() {

//         $result = $this->db->select('team.name as teamname,team.tokan,team.id,team.address,team.city,team.postalcode,team.teamcategory,team.matchtype,player.profile_image,player.name,player.fathername,player.cnic,player.dob,player.username,player.gender,player.bloodgroup,player.facebook,player.instagram,player.twitter,player.youtube,player.bio,player.phone1,player.phone2,player.postalcode,player.player_type,player.sports_style,player.match_type,player.team_type,player.gmail')
//                         ->from('team')
//                         ->join('player', 'player.id = team.captain_id')
//                         ->where('team.status', 0)
//                         ->get()->result();
//         return $result;
//     }

//     function deactive_team() {
//         $this->db->order_by('id', 'DESC');
//         $result = $this->db->select('team.name,team.tokan,team.id,team.address,team.city,team.postalcode,team.teamcategory,team.matchtype,player.profile_image,player.name,player.fathername,player.cnic,player.dob,player.username,player.gender,player.bloodgroup,player.facebook,player.instagram,player.twitter,player.youtube,player.bio,player.phone1,player.phone2,player.postalcode,player.player_type,player.sports_style,player.match_type,player.team_type,player.gmail')
//                         ->from('team')
//                         ->join('player', 'player.id = team.captain_id')
//                         ->where('team.status', 1)
//                         ->get()->result();
//         return $result;
//     }

//     function update_active_player($id, $data) {
//         $this->db->where('player_id', $id);
//         $result = $this->db->update('player', $data);
//         return $result;
//     }

//     function update_block_player($id, $data) {
//         $this->db->where('player_id', $id);
//         $result = $this->db->update('player', $data);
//         return $result;
//     }

//     function update_active_team($id, $data) {
//         $this->db->where('team_id', $id);
//         $result = $this->db->update('team', $data);
//         return $result;
//     }

//     function update_block_team($id, $data) {
//         $this->db->where('team_id', $id);
//         $result = $this->db->update('team', $data);
//         return $result;
//     }

//     function send_email($id) {
//         $result = $this->db->select('team.name,player.name,player.gmail')
//                         ->from('team')
//                         ->join('player', 'player.id = team.captain_id')
//                         ->where('team.id', $id)
//                         ->get()->result();
//         return $result;
//     }

//     function player_detail($id) {
//         // $array = array('player_id' => $id);
//         $arr = array();
    
//         foreach ($id as $i){
//             $result = '';
//             $result = $this->db->select('player_socialaccounts.facebook,player_socialaccounts.instagram,player_socialaccounts.twitter,player_socialaccounts.youtube,player_sports_detail.mathes_type,player_sports_detail.team_type,player.player_id,player.name,player.fathername,player.cnic,player.dob,player.gender,player.bloodgroup,player.bio,player.gmail,player.username,player.password,player.phone1,player.phone2,player.city,player.postalcode,player.address,player.profile_image,player.profile_image_tag,player.phone2,player.phone2')
//                         ->from('player')
//                         ->join('player_sports_detail', 'player_sports_detail.player_id = player.player_id','left')
//                         ->join('player_socialaccounts', 'player_socialaccounts.player_id = player.player_id','left')
//                         ->where('player.player_id', $i)
//                         ->get()->row();
//         array_push($arr, $result);

//         }
        
//         // return $result->result_array(); 
//         return $arr;


// //         $this->db->where_in('player_id', $id);
// //        $query = $this->db->get('player');
// //        $result = $query->result();
// //        return $result;
//     }

//     function team_detail($id) {
//         $this->db->where_in('team_id', $id);
//         $query = $this->db->get('team');
//         $result = $query->result();
//         return $result;
//     }

}
