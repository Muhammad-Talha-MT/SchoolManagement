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
            redirect(base_url());
        } else {
            $this->session->set_flashdata('Fail', 'User is Invalid');
            $this->load->view('login');
        }
    }
}
