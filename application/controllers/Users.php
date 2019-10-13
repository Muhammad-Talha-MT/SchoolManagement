<?php
    class Users extends CI_Controller
    {
        function index()
        {
            $this->load->model('User_model');
            $classes = $this->User_model->getUsers();
            $data['users'] = $classes;
            $this->load->view('users', $data);
        }
        function addUser()
        {
            $this->load->view('addUser');
        }
        public function addNewUser()
        {
            $this->load->model('User_model');
            $formArray = array();
            $formArray['userName'] = $this->input->post('userName');
            $formArray['password'] = $this->input->post('password');
            $formArray['createdDate'] = Date('Y-m-d');
            $l = $this->User_model->addUser($formArray);
            if ($l == true) {
                $this->session->set_flashdata('success', 'Record Successfully save');
            } else {
                $this->session->set_flashdata('success', 'Record Already Exist');
            }
            redirect(base_url() . 'Users');
        }
        function showEdit($userId)
        {
            $this->load->model('User_model');
            $formArray = array();
            $formArray['userName'] = $this->input->post('userName');
            $formArray['password'] = $this->input->post('password');
            $this->User_model->updateUser($userId, $formArray);
            $this->session->set_flashdata('success', 'Record Successfully save');
            redirect(base_url() . 'Users');
        }
        function edit($userId)
        {
            $this->load->model('User_model');
            $user = $this->User_model->editUser($userId);
            $data = array();
            $data['user'] = $user;
            $this->load->view('editUser', $data);
        }
        function delete($userId)
        {
            $this->load->model("User_model");
            $user = $this->User_model->editUser($userId);
            if (!empty($user)) {
                $this->User_model->delete($userId);
                redirect(base_url() . 'Users');
            }
        }
    }
?>