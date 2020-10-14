<?php
class Login extends CI_Controller{
   public function index(){
        $this->load->view('login.php');
    }
    public function userLogin(){
        $this->load->model("User_model");
        $data["email"]=$this->input->post("email");
        $data["password"]=$this->input->post("password");
        $exist=$this->User_model->checkUser($data);
        if($exist)
        {
            $user=$this->User_model->getUser($data);
            $newData=array(
                'id'=>$user['id'],
                'email'=>$user['email'],
                'logged_in'=>TRUE
            );
            $this->session->set_userdata($newData);
            redirect(base_url()."dashboard");
        }
        else
        {
            redirect(base_url()."login");
        }
        
    }
}
