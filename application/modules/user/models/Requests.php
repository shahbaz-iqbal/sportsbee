 <?php
Class Requests extends CI_Model {

  function __construct(){

        parent::__construct();
      $this->load->database();
       
    }
    public function get_captain_details($id){
        $this->db->select('team.*,player_team_table.player_id,player_team_table.team_id,player_team_table.status AS req_status');
        //$this->db->select('*');
    $this->db->from('player_team_table');
     $this->db->join('team', 'team.team_id = player_team_table.team_id', 'right outer'); 
         $this->db->where('player_id',$id);
         // $query = $this->db->get('team');
         $query = $this->db->get();
       return $query->result();
         // $result = $query->result();
         // return $result;
    }
    // public function get_users($user_login){
       
    //     $this->db->where('password',$user_login['password']);
    //     $query = $this->db->get('player');
    //     $result = $query->row();
    //     return $result;
    // }

    public function accept_Request($playerid,$teamid,$data){

        // $where = "player_id =".$player_id."AND team_id =".$team_id;
        // $this->db->where($where);
         // $this->db->from('player_team_table');
        $this->db->where('player_id', $playerid);
        $this->db->where('team_id', $teamid);
        $result = $this->db->update('player_team_table', $data);
        return $result;
    }


}
?>