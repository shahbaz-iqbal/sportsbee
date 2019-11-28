<?php

Class Grounds extends CI_Model {

    public function all_ground_info() {
        $query = $this->db->get('ground');
        $result = $query->result();
        return $result;
    }
    public function city() {
        $query = $this->db->get('city_table');
        $result = $query->result();
        return $result;
    }
    public function matches_type() {
        $query = $this->db->get('matches_type');
        $result = $query->result();
        return $result;
    }
    public function types_of_team() {
        $query = $this->db->get('types_of_team');
        $result = $query->result();
        return $result;
    }
    public function add_ground_info() {
        $query = $this->db->get('player_sports_detail');
        $result = $query->result();
        return $result;
    }
     function ground_detail($data) {
        $result = $this->db->insert('ground', $data);
         return $this->db->insert_id();
    }
     function edit_ground($id) {
         $this->db->where('ground_id',$id);
        $query = $this->db->get('ground');
        $result = $query->row();
        return $result;
    }
     function update_ground($id,$data) {
        $this->db->where('ground_id', $id);
        $result = $this->db->update('ground', $data);
        return $result;
    }
     function delete_ground($id) {
         $this->db->where('ground_id', $id);
        $result = $this->db->delete('ground');
        return $result;
    }

}
