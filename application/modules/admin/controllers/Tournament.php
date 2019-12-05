<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Tournament extends CI_Controller {

    public function __construct() {
        parent::__construct();
       $this->load->model('Tournaments');
    }

    public function index() {
        // echo "string";
       $sponser = $this->Tournaments->get_sponser();
       $sport = $this->Tournaments->get_sport();
       $matchestype = $this->Tournaments->get_matchtype();
       $teamtype = $this->Tournaments->get_teamtype();
       $cities=$this->Tournaments->get_cities();
      // $tour=$this->Tournaments->get_tourdata();
        $tour=$this->Tournaments->get_all_tourdata();

       $passData = [
           'sport' => $sport,
           'matchtype' => $matchestype,
           'teamtype'=> $teamtype,
           'cities'=>$cities,
           'tour'=>$tour,
           'editsport'=>$sport,
           'editmatchtype' => $matchestype,
           'editteamtype'=> $teamtype,
           'editcities'=>$cities,
           'sponsers' =>$sponser,
           'editsponsers'=>$sponser
           
       ];
       // echo '<pre>';
       // print_r($tour);
       // echo "</pre>";
       // die();

        $this->load->view('Tindex',$passData);
    }

     public function add_tournament() {
         
         $teamlimit = $this->input->post('teamlimit');
         
        if($teamlimit == 2 || $teamlimit == '' ){
                  $tournTid=2;
                 $teamlimit=2;

        }else{
               $tournTid=1;
        }
        
        $name = $this->input->post('name');
        $city = $this->input->post('city');
        $entryfee = $this->input->post('entry_fee');
        $dated= $this->input->post('dated');
        
        $sport_id = $this->input->post('sportid');
        $matchestype = $this->input->post('matchtype');

        $teamtype= implode(' , ', (array) $this->input->post('teamtype'));
        $prize = $this->input->post('prize');
        $sponsers = implode(' , ', (array) $this->input->post('sponsers'));
        $playerlimit=$this->input->post('player_limit');
        $status='Upcoming';

        // $category = $this->input->post('category');
        // $type = $this->input->post('type');
        $data = array(
            'tournTid'=>$tournTid,
            'title' => $name,
            'city_id' => $city,
            'entry_fee' => $entryfee,
            'dated' => $dated,
            'team_limit' => $teamlimit,
            'sport_id' => $sport_id,
            'matches_type_id' =>$matchestype, 
            'team_type_id' => $teamtype,
            'prize' =>$prize, 
            'sp_id' =>$sponsers,
            'player_limit'=>$playerlimit,
            'tournament_status'=>$status
            
        );

        $res = $this->Tournaments->insert_tourn($data);
        if($res) {
            $this->session->set_flashdata('success', 'Tournament added successfully');
        } else {
            $this->session->set_flashdata('error', 'Tournament not added!');
        }
           redirect(base_url('admin/tournament/index'), 'refresh');
        //$this->load->view('Tindex');
    }


    public function fetch_single_user(){
        $output =array();
       // $user_id=$_POST['userid'];
       $user_id = $this->uri->segment(4);
      //  $user_id=$_GET['userid'];
       $data= $this->Tournaments->fetch_single_user($user_id);
       foreach ($data as $row) {
           $output['tournid']=$row->tournid;
           $output['title']=$row->title;
           $output['entryfee']=$row->entry_fee;
           $output['dated']=$row->dated;
           //if($row->teamlimit != ''){
            $output['teamlimit']=$row->team_limit;
           // }else{
           //  $output['team_limit']='no limit';
           // }
            $output['cityname']=$row->name;
            $output['city_id']=$row->city_id;
            $output['sportname']=$row->sport_name;
            $output['sp_id']=$row->sp_id;
            $output['sport_id']=$row->sport_id;
           $output['prize']=$row->prize;
           $output['sponsers']=$row->name;
           $output['matchtype']=$row->match_name;
           $output['matchtypeid']=$row->matches_type_id;
           $output['teamtype']=$row->type_name;
           $output['teamtypeid']=$row->team_type_id;
           $output['player_limit']=$row->player_limit;


            $output['id'] = $row->tournid;



       }
       echo json_encode($output);



    }

    public function edit_tournament(){

         //$tournTid=1;

         
         $id=$this->input->post('hiden_userid');


        $tournTid=1;
        $name = $this->input->post('name');
        $city = $this->input->post('city');
        $entryfee = $this->input->post('entry_fee');
        $dated= $this->input->post('dated');
        $teamlimit = $this->input->post('teamlimit');
        $sport_id = $this->input->post('sportid');
        $matchestype = $this->input->post('matchtype');
        $teamtype=  implode(' , ', (array) $this->input->post('teamtype'));
        $prize = $this->input->post('prize');
        $sponsers = implode(' , ', (array) $this->input->post('sponsers'));
        $status='Upcoming';
        $playerlimit=$this->input->post('player_limit');
        //......//
                                                       
        $data = array(
            'title' => $name,
            'city_id' => $city,
            'entry_fee' => $entryfee,
            'dated' => $dated,
            'team_limit' => $teamlimit,
            'sport_id' => $sport_id,
            'matches_type_id' =>$matchestype, 
            'team_type_id' => $teamtype,
            'prize' =>$prize, 
            'sp_id' =>$sponsers,
            'tournTid'=>$tournTid,
            'player_limit'=>$playerlimit,
            'tournament_status'=>$status
            
        );
        // print_r($data);
        // exit();
       $res= $this->Tournaments->update_user($id,$data);
       if($res){
        echo 'Update successfully';
       }else{
         echo 'Error! in Update ';
       }
       // exit();
       redirect('admin/tournament/index');
    }


    public function delete() {
        $id = $this->uri->segment(4);
        $res = $this->Tournaments->delete_tournament($id);
        if($res) {
            $this->session->set_flashdata('success', 'User delete successfully');
        } else {
            $this->session->set_flashdata('error', 'User not delete successfully');
        }
        $this->index();
    }

//     public function players() {
//         $users = $this->Admins->all_player();
//         $passData = [
//             'users' => $users
//         ];
//         $this->load->view('operation/player_info', $passData);
//     }

//     public function view_players() {
//         $ids = $this->uri->segment(4);
//         $id = explode(',', $ids);

// //        foreach ($idd as $id){
// //            
// //        }
//         $detail = $this->Admins->player_detail($id);
//         $passData = [
//             'users' => $detail
//         ];
// //        echo "<pre>";
// //        print_r($detail);
// //        echo "</pre>";
// //        die;
// //
// //         $users = $this->Admins->active_player();
// //        $passData = [
// //            'users' => $users
// //        ];
//         $this->load->view('admin/operation/view_player_info', $passData);
//     }

//     public function view_teams() {
//         $ids = $this->uri->segment(4);
//         $id = explode(',', $ids);
//         $detail = $this->Admins->team_detail($id);
//         $passData = [
//             'users' => $detail
//         ];
    
// //
// //         $users = $this->Admins->active_player();
// //        $passData = [
// //            'users' => $users
// //        ];
//         $this->load->view('admin/operation/view_team_info', $passData);
//     }

//     public function teams() {
//         $users = $this->Admins->all_teams();
//         $passData = [
//             'users' => $users
//         ];
//         $this->load->view('operation/team_info', $passData);
//     }

//     public function player_req() {
//         $users = $this->Admins->player_request();
//         $passData = [
//             'users' => $users
//         ];
//         $this->load->view('admin/Operation/pending_req/player_req', $passData);
//     }

//     public function player_req_accept() {
//         $id = $this->uri->segment(4);
//         $status = 1;
//         $data = [
//             'status' => $status
//         ];
//         $res = $this->Admins->accept_player_req($id, $data);
//         if ($res) {
//             $this->session->set_flashdata('success', 'Accept Request successfully');
//         } else {
//             $this->session->set_flashdata('error', 'User not update successfully');
//         }
//         redirect('Admin/player_req');
//     }

//     public function player_req_reject() {
//         $id = $this->uri->segment(4);
//         $status = 0;
//         $data = [
//             'status' => $status
//         ];
//         $res = $this->Admins->reject_player_req($id, $data);
//         if ($res) {
//             $this->session->set_flashdata('success', 'Reject Request successfully');
//         } else {
//             $this->session->set_flashdata('error', 'User not update successfully');
//         }
//         redirect('Admin/player_req');
//     }

//     public function team_req() {
//         $users = $this->Admins->team_request();
//         $passData = [
//             'users' => $users
//         ];

//         $this->load->view('admin/operation/pending_req/team_req',$passData);
//     }

//     public function team_req_accept() {
//         $id = $this->uri->segment(4);
 
//         $status = 1;
//         $data = [
//             'status' => $status
//         ];
//         $res = $this->Admins->accept_team_req($id, $data);
// //        $gmail = $this->Admins->send_email($id);
// //        foreach ($gmail as $g) {
// //            $g = $g->gmail;
// //        }
// //        if ($res) {
// //            $config['protocol'] = 'sendmail';
// //            $config['mailpath'] = '/usr/sbin/sendmail';
// //            $config['charset'] = 'iso-8859-1';
// //            $config['wordwrap'] = TRUE;
// //            $this->email->initialize($config);
// //
// //            $this->load->library('email', $config);
// //
// //            $this->email->from('shahbaziqbal150@gmail.com', 'Shahbaz Iqbal');
// //            $this->email->to($g);
// //            $this->email->subject('From Sports bee');
// //            $this->email->message('Congretulation you are online.');
// //            $this->email->send();
// //            $d = $this->email->print_debugger();
// //            echo "<pre>";
// //            print_r($d);
// //            echo "</pre>";
// //            die;
// //        }
// //        die();
// //
// //

//         if ($res) {
//             $this->session->set_flashdata('success', 'Accept Request successfully');
//         } else {
//             $this->session->set_flashdata('error', 'User not update successfully');
//         }
//         redirect('admin/dashboard/team_req');
//     }

//     public function team_req_reject() {
//         $id = $this->uri->segment(4);

//         $status = 0;
//         $data = [
//             'status' => $status
//         ];
//         $res = $this->Admins->reject_team_req($id, $data);
//         if ($res) {
//             $this->session->set_flashdata('success', 'Reject Request successfully');
//         } else {
//             $this->session->set_flashdata('error', 'User not update successfully');
//         }
//         redirect('admin/dashboard/team_req');
//     }

//     public function active_player() {
//         $users = $this->Admins->active_player();
//         $passData = [
//             'users' => $users
//         ];
//         $this->load->view('admin/Operation/players/active_player', $passData);
//     }

//     public function block_player() {
//         $users = $this->Admins->deactive_player();
//         $passData = [
//             'users' => $users
//         ];
//         $this->load->view('admin/Operation/players/blocked_player', $passData);
//     }

//     public function active_team() {
//         $users = $this->Admins->active_team();
//         $passData = [
//             'users' => $users
//         ];
//         $this->load->view('admin/Operation/teams/active_team', $passData);
//     }

//     public function block_team() {
//         $users = $this->Admins->deactive_team();
//         $passData = [
//             'users' => $users
//         ];
//         $this->load->view('admin/Operation/teams/block_team', $passData);
//     }

//     public function update_active_player() {
//         $id = $this->uri->segment(4);
//         $status = 0;
//         $data = [
//             'status' => $status
//         ];
//         $res = $this->Admins->update_active_player($id, $data);
//         if ($res) {
//             $this->session->set_flashdata('success', 'Player Block successfully');
//         } else {
//             $this->session->set_flashdata('error', 'User not update successfully');
//         }
//         redirect('admin/dashboard/players');
//     }

//     public function update_block_player() {
//         $id = $this->uri->segment(4);
//         $status = 1;
//         $data = [
//             'status' => $status
//         ];
//         $res = $this->Admins->update_block_player($id, $data);
//         if ($res) {
//             $this->session->set_flashdata('success', 'Player UnBlock successfully');
//         } else {
//             $this->session->set_flashdata('error', 'User not update successfully');
//         }
//         redirect('admin/dashboard/players');
//     }

//     public function update_active_team() {
//         $id = $this->uri->segment(4);
//         $status = 0;
//         $data = [
//             'status' => $status
//         ];
//         $res = $this->Admins->update_active_team($id, $data);
//         if ($res) {
//             $this->session->set_flashdata('success', 'Team Block successfully');
//         } else {
//             $this->session->set_flashdata('error', 'User not update successfully');
//         }
//         redirect('admin/dashboard/teams');
//     }
//     public function update_block_team() {
//         $id = $this->uri->segment(4);
//         $status = 1;
//         $data = [
//             'status' => $status
//         ];
//         $res = $this->Admins->update_block_team($id, $data);
//         if ($res) {
//             $this->session->set_flashdata('success', 'Team UnBlock successfully');
//         } else {
//             $this->session->set_flashdata('error', 'User not update successfully');
//         }
//         redirect('admin/dashboard/teams');
//     }

}
