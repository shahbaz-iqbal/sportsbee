<?php

Class Roletypes extends CI_Model {

    // function insert_tourn($data){
    //     $this->db->insert('tournament',$data);
    // }
       
       function get_roles(){
        $this->db->select('*');
        $query=$this->db->get('role_type');
        $result=$query->result();
        return $result;
       }
       function insert_role($data){
        $this->db->insert('role_type',$data);
       }

        function delete_Role($id) {
         $this->db->where('role_id', $id);
        $result = $this->db->delete('role_type');
        return $result;
      }
    // function get_tourdata(){
    //     $this->db->select('*');
    //   $query = $this->db->get('tournament');
    //   $result = $query->result();
    //   return $result;

    // }

    // function get_sponser(){
    //     return $this->db->get('sponser')->result();
    // }
    // function get_all_tourdata(){

    //     $this->db->select('tournament.*,sports_table.*,city_table.*,matches_type.*,types_of_team.*,tournament_type.*,sponser.name AS sp_name');
    // $this->db->from('tournament');
    // $this->db->join('sports_table', 'sports_table.sport_id = tournament.sport_id', 'right outer'); 
    // $this->db->join('city_table', 'city_table.city_id = tournament.city_id', 'inner'); 
    // $this->db->join('matches_type', 'matches_type.matches_type_id = tournament.matches_type_id', 'inner'); 
    // $this->db->join('types_of_team', 'types_of_team.team_type_id = tournament.team_type_id', 'inner'); 
    // $this->db->join('tournament_type', 'tournament_type.tournTid = tournament.tournTid', 'inner');
    // $this->db->join('sponser', 'sponser.sp_id = tournament.sp_id', 'inner');
    // $query = $this->db->get();
    //    return $query->result();

       
    //     // print_r($query->result());
    //     // die();

    //     // $this->db->where('', 3);
    //     // $query = $this->db->get('player');
    //     // $result = $query->result();
    //     // return $result;

    // }
    function fetch_single_user($user_id){

    $this->db->select('*');
    $this->db->from('role_type');
    $this->db->where("role_id",$user_id);
    
    $query = $this->db->get();

        
        return $query->result();

    }
    function edit_role($data,$id){
      $this->db->where('role_id',$id);
      $result=$this->db->update('role_type',$data);
      return $result;
    }
    //  function update_user($id,$data) {
    //     $this->db->where('tournid', $id);
    //     $result = $this->db->update('tournament', $data);
    //     return $result;
    // }
  

    //  function get_sport(){

    //   $this->db->select('*');
    //   $query = $this->db->get('sports_table');
    //   $result = $query->result();
    //   return $result;
    //  }
    //  function get_matchtype(){
    //     $this->db->select('*');
    //   $query = $this->db->get('matches_type');
    //   $result = $query->result();
    //   return $result;
    //  }
    //  function get_teamtype(){
        
    //   $this->db->select('*');
    //   $query = $this->db->get('types_of_team');
    //   $result = $query->result();
    //   return $result;
    //  }

     
    //  function get_cities(){
    //    $this->db->select('*');
    //   $query = $this->db->get('city_table');
    //   $result = $query->result();
    //   return $result;
    //  }



}
