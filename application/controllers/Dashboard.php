<?php

class Dashboard extends CI_Controller{
    public function index()
    {
        $this->load->model('Plan_model');
        $this->load->model('User_model');
        $data['plans'] = $this->Plan_model->getPlans();
        $p=$this->Plan_model->getSelectedPlan($_SESSION["id"]);
        $ghs=0;
        if (isset($p))
        {
            $plan=$this->Plan_model->getPlanById($p['plan_id']);
            $ghs=$plan['ghs'];
        }
        else 
        {
            $plan=array('name'=>'None', 'ghs'=>0, 'daily_profit'=>0.000002);
        }
        $useramount=$this->User_model->getAmountById($_SESSION["id"]);
        $userdata=$this->User_model->getUserById($_SESSION["id"]);
        $ghs=$ghs+$useramount['extra_ghs'];
        $data['selected_plan']=$plan;
        $data['ghs']=$ghs;
        $data['coins']=$useramount['coins'];
        $data["username"]=$userdata['user_name'];
            $this->load->view('dashboard.php', $data);
    }

    public function referral()
    {    
        $this->load->model('User_model');
        $userdata=$this->User_model->getUserById($_SESSION["id"]);
        $referrals=$this->User_model->getReferralsById($_SESSION["id"]);
        $data['user']=$userdata;
        $ref=array();
        foreach ($referrals as $r) {
            $u=$this->User_model->getUserById($r['referred_user_id']);
            $row['email']=$u['email'];
            $row['name']=$u['user_name'];
            array_push($ref,$row);
        }
        $data['referrals']=$ref;
        $this->load->view('referral.php', $data);
    }

  
        

}