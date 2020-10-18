<?php
class SignUp extends CI_Controller{
    function index(){
        $this->load->view('register.php');
    }
    function signup_referral($refercode){
        $newData=array(
            'refercode'=>$refercode,
        );
        $this->session->set_userdata($newData);
        $this->load->view('register.php');
    }
    function UserSignUp()
    {
        $this->load->model("User_model");
        $data["user_name"]=$this->input->post("userName");
        $data["email"]=$this->input->post("userEmail");
        $data["password"]=$this->input->post("userPassword");
        $refercode=$this->input->post("refercode");
        $user=$this->User_model->addUser($data);
        if(isset($refercode))
        {
            unset($_SESSION['refercode']);
            $referrer=$this->User_model->getUserByEmail($refercode);
            if(isset($referrer))
            {
                $data=array(
                    'referrer_user_id'=>$referrer['id'],
                    'referred_user_id'=>$user,
                );
                $this->User_model->addReferHistory($data);
                // update ghs for referrer
                $amount=$this->User_model->getAmountById($referrer['id']);
                $amount['extra_ghs']=$amount['extra_ghs']+3;
                $this->User_model->updateAmount($amount);
            }
        }
        redirect(base_url()."login");
    }
}
?>