<?php
Class user_model extends CI_Model {
    public function get_user_profile($id){
      $this->db->where('player_id',$id);
      $query = $this->db->get('player');
        $result = $query->row();
        return $result;

    } 
}