<?php

Class Admins extends CI_Model {

    function all_player() {
        $query = $this->db->get('player');
        $result = $query->result();
        return $result;
    }

    function all_teams() {
        $query = $this->db->get('team');
        $result = $query->result();
        return $result;
    }

    function player_request() {
        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 3);
        $query = $this->db->get('player');
        $result = $query->result();
        return $result;
    }

    function accept_player_req($id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update('player', $data);
        return $result;
    }

    function reject_player_req($id, $data) {
        $this->db->where('id', $id);
        $result = $this->db->update('player', $data);
        return $result;
    }

    function team_request() {
        $this->db->where('status', 3);
        $query = $this->db->get('team');
        $result = $query->result();
        return $result;
//        $result = $this->db->select('team.name as teamname,team.tokan,team.id,team.address,team.city,team.postalcode,team.teamcategory,team.matchtype,player.profile_image,player.name,player.fathername,player.cnic,player.dob,player.username,player.gender,player.bloodgroup,player.facebook,player.instagram,player.twitter,player.youtube,player.bio,player.phone1,player.phone2,player.postalcode,player.player_type,player.sports_style,player.match_type,player.team_type,player.gmail')
//                        ->from('team')
//                        ->join('player', 'player.id = team.captain_id')
//                        ->where('team.status', 3)
//                        ->get()->result();
//        return $result;
    }

    function accept_team_req($id, $data) {
        $this->db->where('team_id', $id);
        $result = $this->db->update('team', $data);
        return $result;
    }

    function reject_team_req($id, $data) {
        $this->db->where('team_id', $id);
        $result = $this->db->update('team', $data);
        return $result;
    }

    function active_player() {
        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 1);
        $query = $this->db->get('player');
        $result = $query->result();
        return $result;
    }

    function deactive_player() {
        $this->db->order_by('id', 'DESC');
        $this->db->where('status', 0);
        $query = $this->db->get('player');
        $result = $query->result();
        return $result;
    }

    function active_team() {

        $result = $this->db->select('team.name as teamname,team.tokan,team.id,team.address,team.city,team.postalcode,team.teamcategory,team.matchtype,player.profile_image,player.name,player.fathername,player.cnic,player.dob,player.username,player.gender,player.bloodgroup,player.facebook,player.instagram,player.twitter,player.youtube,player.bio,player.phone1,player.phone2,player.postalcode,player.player_type,player.sports_style,player.match_type,player.team_type,player.gmail')
                        ->from('team')
                        ->join('player', 'player.id = team.captain_id')
                        ->where('team.status', 0)
                        ->get()->result();
        return $result;
    }

    function deactive_team() {
        $this->db->order_by('id', 'DESC');
        $result = $this->db->select('team.name,team.tokan,team.id,team.address,team.city,team.postalcode,team.teamcategory,team.matchtype,player.profile_image,player.name,player.fathername,player.cnic,player.dob,player.username,player.gender,player.bloodgroup,player.facebook,player.instagram,player.twitter,player.youtube,player.bio,player.phone1,player.phone2,player.postalcode,player.player_type,player.sports_style,player.match_type,player.team_type,player.gmail')
                        ->from('team')
                        ->join('player', 'player.id = team.captain_id')
                        ->where('team.status', 1)
                        ->get()->result();
        return $result;
    }

    function update_active_player($id, $data) {
        $this->db->where('player_id', $id);
        $result = $this->db->update('player', $data);
        return $result;
    }

    function update_block_player($id, $data) {
        $this->db->where('player_id', $id);
        $result = $this->db->update('player', $data);
        return $result;
    }

    function update_active_team($id, $data) {
        $this->db->where('team_id', $id);
        $result = $this->db->update('team', $data);
        return $result;
    }

    function update_block_team($id, $data) {
        $this->db->where('team_id', $id);
        $result = $this->db->update('team', $data);
        return $result;
    }

    function send_email($id) {
        $result = $this->db->select('team.name,player.name,player.gmail')
                        ->from('team')
                        ->join('player', 'player.id = team.captain_id')
                        ->where('team.id', $id)
                        ->get()->result();
        return $result;
    }

    function player_detail($id) {
        // $array = array('player_id' => $id);
        $arr = array();
    
        foreach ($id as $i){
            $result = '';
            $result = $this->db->select('player_socialaccounts.facebook,player_socialaccounts.instagram,player_socialaccounts.twitter,player_socialaccounts.youtube,player_sports_detail.mathes_type,player_sports_detail.team_type,player.player_id,player.name,player.fathername,player.cnic,player.dob,player.gender,player.bloodgroup,player.bio,player.gmail,player.username,player.password,player.phone1,player.phone2,player.city,player.postalcode,player.address,player.profile_image,player.profile_image_tag,player.phone2,player.phone2')
                        ->from('player')
                        ->join('player_sports_detail', 'player_sports_detail.player_id = player.player_id','left')
                        ->join('player_socialaccounts', 'player_socialaccounts.player_id = player.player_id','left')
                        ->where('player.player_id', $i)
                        ->get()->row();
        array_push($arr, $result);

        }
        
        // return $result->result_array(); 
        return $arr;


//         $this->db->where_in('player_id', $id);
//        $query = $this->db->get('player');
//        $result = $query->result();
//        return $result;
    }

    function team_detail($id) {
        $this->db->where_in('team_id', $id);
        $query = $this->db->get('team');
        $result = $query->result();
        return $result;
    }

}
