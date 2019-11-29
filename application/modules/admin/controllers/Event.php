<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Events');
    }

    public function index() {
        $Event = $this->Events->all_event_info();
//        $matches_type = $this->Grounds->matches_type();
//        $types_of_team = $this->Grounds->types_of_team();
//        $city = $this->Grounds->city();
//        $category = $this->Grounds->add_ground_info();
        $passData = [
            'event' => $Event
        ];
        $this->load->view('admin/event/list', $passData);
    }

    public function add_event() {
        if ($this->input->post('idevent')) {
            $id = $this->input->post('idevent');
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $title = $this->input->post('title');
   
            $sponser = implode(' , ', (array) $this->input->post('sponser'));
            $link = $this->input->post('link');
          //  $image = $this->input->post('img');
//            if (!empty($_FILES['img']['name'])) {
//                $fileInfo = pathinfo($_FILES['img']['name']);
//                $newName = time() . '.' . $fileInfo['extension'];
//                move_uploaded_file($_FILES['img']['tmp_name'], "assets/uploads/" . $newName);
//            }
//            if (!empty($_FILES['img']['name'])) {
//                $image = $newName;
//            }
                $data = array(
                    'name' => $name,
                    'phone' => $phone,
                    'email' => $email,
                    'title' => $title,
                    'sponser_list' => $sponser,
                    'youtube_link' => $link,
                    'image' => $image
                );
                $res = $this->Events->update_event($id, $data);

                if ($res) {
                    $this->session->set_flashdata('success', 'User update successfully');
                } else {
                    $this->session->set_flashdata('error', 'User not update successfully');
                }

                redirect('admin/event/index');
            }
         else {
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $title = $this->input->post('title');
            $sponser = implode(' , ', (array) $this->input->post('eventsponser'));
            $link = $this->input->post('link');
            $img = $this->input->post('img');

//            if (!empty($_FILES['img']['name'])) {
//                $fileInfo = pathinfo($_FILES['img']['name']);
//                $newName = time() . '.' . $fileInfo['extension'];
//                move_uploaded_file($_FILES['img']['tmp_name'], "assets/uploads/" . $newName);
//            }
//            if (!empty($_FILES['img']['name'])) {
//                $img = $newName;
//            }
            $data = array(
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'title' => $title,
                'sponser_list' => $sponser,
                'image' => $img,
                'youtube_link' => $link
            );
            $res = $this->Events->event_detail($data);
            if ($res) {
                $this->session->set_flashdata('success', 'Event add successfully');
            } else {
                $this->session->set_flashdata('error', 'Event not add successfully');
            }
//$this->load->view('admin/ground/list');
            redirect('admin/event/index');
        }
    }
    

     public function edit_event() {
        $id = $this->uri->segment(4);
        $data = $this->Events->edit_event($id);
        echo json_encode($data);
    }

    function delete() {
        $id = $this->uri->segment(4);
        $res = $this->Events->delete_ground($id);
        redirect('admin/event/index');
    }

}
