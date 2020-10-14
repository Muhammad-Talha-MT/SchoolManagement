<?php
class Dashboard extends CI_Controller{
   public function index(){
    $this->load->model('Plan_model');
    $data['plans'] = $this->Plan_model->getPlans();
        $this->load->view('dashboard.php', $data);
    }
}