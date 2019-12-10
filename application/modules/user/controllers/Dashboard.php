<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();

        $this->load->model('User_model');
    }

    public function index() {
        $r = $this->session->get_userdata();
        $id = $r['id'];
        $res = $this->User_model->get_user_profile($id);
        $this->load->view('profile', $res);
    }

    public function tournaments() {
        $tour = $this->User_model->get_touradata();

        $passData = [

            'tour' => $tour
        ];
        $this->load->view('user/tournament', $passData);
    }

    public function players() {

        $sess = $this->session->all_userdata();
        $id = $sess['id'];

        // $id = 78;
        $team_id = $this->User_model->get_team_id($id);
        $playerdata = $this->User_model->get_playersdata($team_id);

        $player_team_table = $this->User_model->get_playerteamtbl();

        // print_r($id);
        // die();

        $passData = [
            'playerdata' => $playerdata,
            'id' => $id,
            'player_team_table' => $player_team_table,
            'team_id' => $team_id
        ];
        // echo '<pre>';
        // print_r($playerdata);
        // die();
        $this->load->view('user/players', $passData);
    }

    public function check_req_limit() {
        $output = array();
        // $user_id=$_POST['userid'];
        $user_id = $this->uri->segment(4);

        $data = $this->User_model->check_req_limit($user_id);
        // foreach ($data as $row) {
        //    $output['role_id']=$row->role_id;
        //     $output['rolename']=$row->role_name;
        // }
        // echo json_encode($output);
        echo $data;
    }

    public function add_Request() {

        $playerid = $this->uri->segment(4);
        $teamid = $this->uri->segment(5);

        $data = array();
        $data['player_id'] = $playerid;
        $data['team_id'] = $teamid;
        $data['player_as'] = 'player';
        $data['status'] = 0;

        $res = $this->User_model->add_Request($data);
        // $res=$this->User_model->add_Request($playerid,$teamid);
        // echo $res;
        // print_r($playerid);
        // die();
    }

    public function cancle_request() {
        $playerid = $this->uri->segment(4);
        $res = $this->User_model->cancle_Request($playerid);
    }

    function test() {
        $d1 = 'Dec 11, 2019';
        $d2 = '2019-12-12';

        $dn = date('Y-m-d', strtotime($d1));

        if (date('Y-m-d', strtotime($d1)) > date('Y-m-d', strtotime($d2)))
            echo "greater";
        else
            echo "not greater";
    }

}
