<?php

Class Events extends CI_Model {

    public function all_event_info() {
        $query = $this->db->get('event');
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
     function event_detail($data) {
        $result = $this->db->insert('event', $data);
         return $result;
    }
     function edit_event($id) {
         $this->db->where('event_id',$id);
        $query = $this->db->get('event');
        $result = $query->row();
        return $result;
    }
     function update_event($id,$data) {
        $this->db->where('event_id', $id);
        $result = $this->db->update('event', $data);
        return $result;
    }
     function delete_ground($id) {
         $this->db->where('event_id', $id);
        $result = $this->db->delete('event');
        return $result;
    }

}
