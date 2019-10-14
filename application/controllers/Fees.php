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
        // $data['studentId']=$_SESSION['id'];
        // $data['classId']=$_SESSION['classId'];
        // $data['month']=date('F');
        // $data['recievedDate']=date('F j, y');

        $this->index();
    }
}