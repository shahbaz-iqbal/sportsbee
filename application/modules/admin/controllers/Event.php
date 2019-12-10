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
            $image = $this->input->post('old_image');
            $newimage = $_FILES['img']['name'];
            $dataa = array(
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'title' => $title,
                'sponser_list' => $sponser,
                'youtube_link' => $link,
                    //  'image' => $image
            );
            //  $res = $this->Events->update_event($id, $dataa);
            if ($_FILES['img']['name']) {
                $event_id = $this->input->post('idevent');
                $files = $_FILES;
                if (!empty($files['img']['name'])) {
                    $count = count($_FILES['img']['name']);
                    for ($i = 0; $i < $count; $i++) {
                        $_FILES['img']['name'] = $files['img']['name'][$i];
                        //  $ext = end((explode(".", $files['img']['name'][$i])));
                        $tmp = explode('.', $files['img']['name'][$i]);
                        $file_extension = end($tmp);
                        $file_name = time() . $i . "_" . ($i + 1) . "." . $file_extension;
                        $_FILES['img']['name'] = $file_name;
                        $_FILES['img']['tmp_name'] = $files['img']['tmp_name'][$i];
                        $_FILES['img']['size'] = $files['img']['size'][$i];
                        $config['upload_path'] = 'assets/uploads/';
                        $config['allowed_types'] = 'jpg|png|jpeg';
                        $this->load->library('upload', $config);
                        $this->upload->initialize($config);
                        $this->upload->do_upload('img');
                        $fileName = $this->upload->data('file_name');
                        $id = $event_id;
                        $image = $file_name;
                        $data = array(
                            'image' => $image
                        );
                        $result = $this->Events->update_event_detail_img($id, $data);
                    }
                }
            }
            if ($result) {
                $this->session->set_flashdata('success', 'User update successfully');
            } else {
                $this->session->set_flashdata('error', 'User not update successfully');
            }
            redirect('admin/event/index');
        } else {
            $name = $this->input->post('name');
            $phone = $this->input->post('phone');
            $email = $this->input->post('email');
            $title = $this->input->post('title');
            $sponser = implode(' , ', (array) $this->input->post('eventsponser'));
            $link = $this->input->post('link');
            $dataa = array(
                'name' => $name,
                'phone' => $phone,
                'email' => $email,
                'title' => $title,
                'sponser_list' => $sponser,
                'youtube_link' => $link
            );
            $insert_id = $this->Events->event_detail($dataa);
//            $imgData = array();
//            foreach ($_FILES['img']['name'] as $key => $filename) {
//                //$res = 5;
//                if (!empty($_FILES['img']['name'])) {
//                    $fileInfo = pathinfo($_FILES['img']['name'][$key]);
//                    $newName = time() . '.' . $fileInfo['extension'];
//
//                    $sourcePath = $_FILES['img']['tmp_name'][$key]; // Storing source path of the file in a variable
//                    $targetPath = "assets/uploads/" . $newName; // Target path where file is to be stored
//                    move_uploaded_file($sourcePath, $targetPath); // Moving Uploaded file
//                }
//                if (!empty($_FILES['img']['name'])) {
//                    $logo = $newName;
//                }
//                $data['event_id'] = $insert_id;
//                $data['image'] = $logo;
//                array_push($imgData, $data);
//            }
            $files = $_FILES;
            if (!empty($files['img']['name'])) {
                $count = count($_FILES['img']['name']);
                for ($i = 0; $i < $count; $i++) {
                    $event_id = $insert_id;
                    $_FILES['img']['name'] = $files['img']['name'][$i];
                    //  $ext = end((explode(".", $files['img']['name'][$i])));
                    $tmp = explode('.', $files['img']['name'][$i]);
                    $file_extension = end($tmp);
                    $file_name = time() . $i . "_" . ($i + 1) . "." . $file_extension;
                    $_FILES['img']['name'] = $file_name;
                   
               
                    $_FILES['img']['tmp_name'] = $files['img']['tmp_name'][$i];
                    $_FILES['img']['size'] = $files['img']['size'][$i];
                    $config['upload_path'] = 'assets/uploads/';
                    $config['allowed_types'] = 'jpg|png|jpeg';
                    $this->load->library('upload', $config);
                    $this->upload->initialize($config);            
                    $this->upload->do_upload('img');
                    $fileName = $this->upload->data('file_name');
                    $id = $event_id;
                    $image = $file_name;
                    

                    $imgData = array(
                        'event_id' => $id,
                        'image' => $image
                    );
                    $result = $this->Events->event_detail_img($imgData);
                   
                }
              
                 if ($result) {
                        $this->session->set_flashdata('success', 'Event add successfully');
                    } else {
                        $this->session->set_flashdata('error', 'Event not add successfully');
                    }
                    redirect('admin/event/index');
            }
        }
    }


            function edit_event() {
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
        