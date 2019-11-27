<?php

Class Sponsers extends CI_Model {

    public function ground_add($data) {
         $result = $this->db->insert('sponser', $data);
       
        return $result;
    }
//    public function city() {
//        $query = $this->db->get('city_table');
//        $result = $query->result();
//        return $result;
//    }
    public function all_sponser_info() {
        $query = $this->db->get('sponser');
        $result = $query->result();
        return $result;
    }
//     function ground_detail($data) {
//        $result = $this->db->insert('ground', $data);
//         return $this->db->insert_id();
//    }
     function edit_sponser($id) {
         $this->db->where('sp_id',$id);
        $query = $this->db->get('sponser');
        $result = $query->row();
        return $result;
    }
     function update_sponser($id,$data) {
        $this->db->where('sp_id', $id);
        $result = $this->db->update('sponser', $data);
        return $result;
    }
     function delete_ground($id) {
         $this->db->where('sp_id', $id);
        $result = $this->db->delete('sponser');
        return $result;
    }

}
