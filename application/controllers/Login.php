<?php
class Login extends CI_Controller
{
    function showLogin()
    {
        $this->load->view("login");
    }
    function checkLogin()
    {
        $formArray = array();
        $formArray['name'] = $this->input->post('userName');
        $formArray['password'] = $this->input->post('password');
        $this->load->model('Login_model');
        $flag = $this->Login_model->check($formArray);
        if ($flag == true) {
            $user = $this->Login_model->getUserByName($formArray['name']);
            $newdata = array(
                'id' => $user['id'],
                'username'  => $user['userName'],
                'logged_in' => TRUE
            );

            $this->session->set_userdata($newdata);
            redirect(base_url());
        } else {
            $this->session->set_flashdata('Fail', 'User is Invalid');
            $newdata = NULL;

            $this->session->set_userdata($newdata);
            redirect(base_url() . 'Login/showLogin');
        }
    }

    function logout()
    {
        $newdata = array(
            'id' => NULL,
            'username'  => NULL,
            'logged_in' => FALSE
        );
        $this->session->set_userdata($newdata);
        redirect(base_url() . 'Login/showLogin');
    }
}
