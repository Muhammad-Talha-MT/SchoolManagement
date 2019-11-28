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
            $this->load->library('form_validation');
            $this->form_validation->set_rules('userName', 'User Name', 'required|alpha|min_length[5]|max_length[12]|is_unique[tbuser.userName]');
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('addUser');
            }
            else
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
        }
        function showEdit($userId)
        {
            $this->load->library('form_validation');
            $this->load->model('User_model');
            $user = $this->User_model->editUser($userId);
            $original_value = $user['userName'];
            if($this->input->post('userName') != $original_value)
            {
                $is_unique =  '|is_unique[tbuser.userName]';
            }
            else
            {
                $is_unique =  '';
            }
            $this->form_validation->set_rules('userName', 'User Name', 'required|alpha|min_length[5]|max_length[12]'.$is_unique);
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[20]');
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->model('User_model');
                $user = $this->User_model->editUser($userId);
                $data = array();
                $data['user'] = $user;
                $this->load->view('editUser', $data);
            }
            else
            {
                $this->load->model('User_model');
                $formArray = array();
                $formArray['userName'] = $this->input->post('userName');
                $formArray['password'] = $this->input->post('password');
                $this->User_model->updateUser($userId, $formArray);
                $this->session->set_flashdata('success', 'Record Successfully Updated');
                redirect(base_url() . 'Users');
            }
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
                $this->session->set_flashdata('success', 'Record Successfully Deleted');
                redirect(base_url() . 'Users');
            }
        }
    }
?>