<?php

Class Webmodel extends CI_Model {

    public function get_users($user_login) {
        $this->db->select('player.*,team.status as team status');
        $this->db->join('player_team_table', 'player_team_table.player_id = player.player_id', 'left');
        //  $this->db->join('player_team_table', 'player_team_table.player_id = player_team_table.team_id', 'left');
        $this->db->join('team', 'team.team_id = player_team_table.team_id', 'left');
        $this->db->from('player');
        $this->db->where('player.name', $user_login['username']);
        $this->db->or_where('player.username', $user_login['username']);
        $this->db->where('player.password',$user_login['password']);
        $query = $this->db->get();
//        $this->db->where('username',$user_login['username']);
//        $this->db->or_where('name',$user_login['username']);
//        $this->db->where('password',$user_login['password']);
//        $query = $this->db->get('player');
        $result = $query->row();
        return $result;
    }

    public function addsocialaccounts($social) {
        $this->db->insert('player_socialaccounts', $social);
    }

    public function addscricketinfo($sportsinfo) {
        $this->db->insert('player_cricketinfo', $sportsinfo);
    }

    public function addplayer($data) {
        $this->db->insert('player', $data);
    }

    public function addteam($data) {
        $this->db->insert('team', $data);
    }

    public function check_registration($gmail) {
        $this->db->where('gmail', $gmail);
        return $this->db->get('player')->result();
    }

    function is_email_available($email) {
        $this->db->where('gmail', $email);
        $query = $this->db->get("player");
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}
