<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ground extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Grounds');
    }

    public function index() {
        $ground = $this->Grounds->all_ground_info();
        $city = $this->Grounds->city();
        $category = $this->Grounds->add_ground_info();
        $passData = [
            'city' => $city,
            'Ecity' => $city,
            'ground' => $ground,
            'Ecategory' => $category,
            'category' => $category
        ];
        $this->load->view('admin/ground/list', $passData);
    }

    public function add_ground() {
        $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $title = $this->input->post('title');
        $city = $this->input->post('teamcity');
        $capacity = $this->input->post('capacity');
        $area = $this->input->post('area');
        $pitch = $this->input->post('pitch');
        $price = $this->input->post('price');
        $location = $this->input->post('location');
        $category = $this->input->post('teamtype');
        $type = $this->input->post('MatchType');
        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'ground_title' => $title,
            'ground_city' => $city,
            
            'ground_capacity' => $capacity,
            'ground_area' => $area,
            'ground_pitch' => $pitch,
            'ground_price' => $price,
            'ground_location' => $location,
            'ground_category' => $category,
            'ground_type' => $type
        );
        $res = $this->Grounds->ground_detail($data);
        if ($res) {
            $this->session->set_flashdata('success', 'Ground add successfully');
        } else {
            $this->session->set_flashdata('error', 'Ground not add successfully');
        }
        //$this->load->view('admin/ground/list');
        redirect('admin/ground/index');
    }

    public function edit() {
        $id = $this->uri->segment(4);
        $data = $this->Grounds->edit_ground($id);
        echo json_encode($data);
    }
        function update_ground() {
        $id = $this->input->post('ground_id');
         $name = $this->input->post('name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $title = $this->input->post('title');
        $city = $this->input->post('teamcity');
        $capacity = $this->input->post('capacity');
        $area = $this->input->post('area');
        $pitch = $this->input->post('pitch');
        $price = $this->input->post('price');
        $location = $this->input->post('location');
        $category = $this->input->post('teamtype');
        $type = $this->input->post('MatchType');
        $data = array(
            'name' => $name,
            'phone' => $phone,
            'email' => $email,
            'ground_title' => $title,
            'ground_city' => $city,    
            'ground_capacity' => $capacity,
            'ground_area' => $area,
            'ground_pitch' => $pitch,
            'ground_price' => $price,
            'ground_location' => $location,
            'ground_category' => $category,
            'ground_type' => $type
        );
        $res = $this->Grounds->update_ground($id, $data);

        if ($res) {
            $this->session->set_flashdata('success', 'User update successfully');
        } else {
            $this->session->set_flashdata('error', 'User not update successfully');
        }
       
        redirect('admin/ground/index');
    }
    public function delete() {
        $id = $this->uri->segment(4);
        $res = $this->Grounds->delete_ground($id);
        redirect('admin/ground/index');
    }
    

}
