<?php
class Fees extends CI_Controller
{
    function index()
    {
        $this->load->model('Fee_model');
        $students = $this->Fee_model->getStudents();
        $fee=array();
        foreach ($students as $std) {
            $a=$this->Fee_model->checkRecord($std);
            array_push($fee, $a);
        }
        $data['fee'] = $fee;
        $this->load->view('Fees', $data);
    }
    function s()
    {
        print_r("a,sdhas");
        die();
    }
    function pay_fee($id)
    {
        $this->load->model('Fee_model');
        $data=$this->Fee_model->getdata($id);
        $fee=array();
        $fee['classId']=$data['classId'];
        $fee['studentId']=$id;
        $fee['month']=date('F');
        $fee['recievedDate']=date('F j, y');
        $this->Fee_model->pay($fee);
        $this->index();
    }
}