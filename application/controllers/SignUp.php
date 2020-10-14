<?php
class SignUp extends CI_Controller{
    function index(){
        $this->load->view('register.php');
    }
    function UserSignUp()
    {
        $this->load->model("User_model");
        $data["user_name"]=$this->input->post("userName");
        $data["email"]=$this->input->post("userEmail");
        $data["password"]=$this->input->post("userPassword");
        $this->User_model->addUser($data);
        redirect(base_url()."login");
    
    }
}
?>