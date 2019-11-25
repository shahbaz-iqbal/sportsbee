<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Admins');
    }
    public function index() {
        // echo "string";

        $this->load->view('index');
    }

    public function players() {
        $users = $this->Admins->all_player();
        $passData = [
            'users' => $users
        ];
        $this->load->view('operation/player_info', $passData);
    }

    public function view_players() {
        $ids = $this->uri->segment(4);
        $id = explode(',', $ids);
        $detail = $this->Admins->player_detail($id);
        $passData = [
            'users' => $detail
        ];

//
//         $users = $this->Admins->active_player();
//        $passData = [
//            'users' => $users
//        ];
        $this->load->view('admin/operation/view_player_info', $passData);
    }

    public function view_teams() {
        $ids = $this->uri->segment(4);
        $id = explode(',', $ids);
        $detail = $this->Admins->team_detail($id);
        $passData = [
            'users' => $detail
        ];

//
//         $users = $this->Admins->active_player();
//        $passData = [
//            'users' => $users
//        ];
        $this->load->view('admin/operation/view_team_info', $passData);
    }

    public function teams() {
        $users = $this->Admins->all_teams();
        $passData = [
            'users' => $users
        ];
        $this->load->view('operation/team_info', $passData);
    }

    public function player_req() {
        $users = $this->Admins->player_request();
        $passData = [
            'users' => $users
        ];
        $this->load->view('admin/Operation/pending_req/player_req', $passData);
    }

    public function player_req_accept() {
        $id = $this->uri->segment(4);
        $status = 1;
        $data = [
            'status' => $status
        ];
        $res = $this->Admins->accept_player_req($id, $data);
        if ($res) {
            $this->session->set_flashdata('success', 'Accept Request successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
        redirect('Admin/player_req');
    }

    public function player_req_reject() {
        $id = $this->uri->segment(4);
        $status = 0;
        $data = [
            'status' => $status
        ];
        $res = $this->Admins->reject_player_req($id, $data);
        if ($res) {
            $this->session->set_flashdata('success', 'Reject Request successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
        redirect('Admin/player_req');
    }

    public function team_req() {
        $users = $this->Admins->team_request();
        $passData = [
            'users' => $users
        ];

        $this->load->view('admin/operation/pending_req/team_req', $passData);
    }

    public function team_req_accept() {
        $id = $this->uri->segment(4);
        $status = 1;
        $data = [
            'status' => $status
        ];
        $res = $this->Admins->accept_team_req($id, $data);
//        $gmail = $this->Admins->send_email($id);
//        foreach ($gmail as $g) {
//            $g = $g->gmail;
//        }
//        if ($res) {
//            $config['protocol'] = 'sendmail';
//            $config['mailpath'] = '/usr/sbin/sendmail';
//            $config['charset'] = 'iso-8859-1';
//            $config['wordwrap'] = TRUE;
//            $this->email->initialize($config);
//
//            $this->load->library('email', $config);
//
//            $this->email->from('shahbaziqbal150@gmail.com', 'Shahbaz Iqbal');
//            $this->email->to($g);
//            $this->email->subject('From Sports bee');
//            $this->email->message('Congretulation you are online.');
//            $this->email->send();
//            $d = $this->email->print_debugger();
//            echo "<pre>";
//            print_r($d);
//            echo "</pre>";
//            die;
//        }
//        die();
//
//

        if ($res) {
            $this->session->set_flashdata('success', 'Accept Request successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
        redirect('admin/dashboard/team_req');
    }

    public function team_req_reject() {
        $id = $this->uri->segment(4);
        $status = 0;
        $data = [
            'status' => $status
        ];
        $res = $this->Admins->reject_team_req($id, $data);
        if ($res) {
            $this->session->set_flashdata('success', 'Reject Request successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
        redirect('admin/dashboard/team_req');
    }

    public function active_player() {
        $users = $this->Admins->active_player();
        $passData = [
            'users' => $users
        ];
        $this->load->view('admin/Operation/players/active_player', $passData);
    }

    public function block_player() {
        $users = $this->Admins->deactive_player();
        $passData = [
            'users' => $users
        ];
        $this->load->view('admin/Operation/players/blocked_player', $passData);
    }

    public function active_team() {
        $users = $this->Admins->active_team();
        $passData = [
            'users' => $users
        ];
        $this->load->view('admin/Operation/teams/active_team', $passData);
    }

    public function block_team() {
        $users = $this->Admins->deactive_team();
        $passData = [
            'users' => $users
        ];
        $this->load->view('admin/Operation/teams/block_team', $passData);
    }

    public function update_active_player() {
        $id = $this->uri->segment(4);
        $status = 0;
        $data = [
            'status' => $status
        ];
        $res = $this->Admins->update_active_player($id, $data);
        if ($res) {
            $this->session->set_flashdata('success', 'Player Block successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
        redirect('admin/dashboard/players');
    }

    public function update_block_player() {
        $id = $this->uri->segment(4);
        $status = 1;
        $data = [
            'status' => $status
        ];
        $res = $this->Admins->update_block_player($id, $data);
        if ($res) {
            $this->session->set_flashdata('success', 'Player UnBlock successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
        redirect('admin/dashboard/players');
    }

    public function update_active_team() {
        $id = $this->uri->segment(4);
        $status = 0;
        $data = [
            'status' => $status
        ];
        $res = $this->Admins->update_active_team($id, $data);
        if ($res) {
            $this->session->set_flashdata('success', 'Team Block successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
        redirect('admin/dashboard/teams');
    }

    public function update_block_team() {
        $id = $this->uri->segment(4);
        $status = 1;
        $data = [
            'status' => $status
        ];
        $res = $this->Admins->update_block_team($id, $data);
        if ($res) {
            $this->session->set_flashdata('success', 'Team UnBlock successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
        redirect('admin/dashboard/teams');
    }

}
