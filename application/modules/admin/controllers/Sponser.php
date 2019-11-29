<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sponser extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Sponsers');
        $this->load->model('Grounds');
        $this->load->helper(array('form', 'url'));
    }

    public function index() {
        $sponsers = $this->Sponsers->all_sponser_info();
        $city = $this->Grounds->city();
        $passData = [
            'sponser' => $sponsers,
            'city' => $city
        ];
        $this->load->view('admin/sponser/list', $passData);
    }

    public function add_sponser() {
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $title = $this->input->post('title');
        $city = $this->input->post('teamcity');
       // $logo = $this->input->post('logo');
        $sport = $this->input->post('sport');
        if (!empty($_FILES['logo']['name'])) {
            $fileInfo = pathinfo($_FILES['logo']['name']);
            $newName = time() . '.' . $fileInfo['extension'];
            move_uploaded_file($_FILES['logo']['tmp_name'], "assets/uploads/" . $newName);
        }
        if (!empty($_FILES['logo']['name'])) {
            $logo = $newName;
        }
        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'company_title' => $title,
            'city' => $city,
            'logo_img' => $logo,
            'intrested_sport' => $sport
        );
        $res = $this->Sponsers->ground_add($data);
        if ($res) {
            $this->session->set_flashdata('success', 'Ground add successfully');
        } else {
            $this->session->set_flashdata('error', 'Ground not add successfully');
        }
        //$this->load->view('admin/ground/list');
        redirect('admin/sponser/index');
    }

    public function edit() {
        $id = $this->uri->segment(4);
        $data = $this->Sponsers->edit_sponser($id);
        echo json_encode($data);
    }

    function upadte_sponser() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $title = $this->input->post('title');
        $city = $this->input->post('city');
        $logo = $this->input->post('logo');
        $sport = $this->input->post('sport');
        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'company_title' => $title,
            'city' => $city,
            'logo_img' => $logo,
            'intrested_sport' => $sport
        );
        $res = $this->Sponsers->update_sponser($id, $data);
        if ($res) {
            $this->session->set_flashdata('success', 'User update successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
        redirect('admin/sponser/index');
    }

    public function delete() {
        $id = $this->uri->segment(4);
        $res = $this->Sponsers->delete_ground($id);
        redirect('admin/sponser/index');
    }

}
