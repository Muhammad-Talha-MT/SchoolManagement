<?php
class Fees extends CI_Controller
{
    function index()
    {
        $this->load->model('Student_model');
        $this->load->model('Fee_model');
        $this->load->model('Class_model');
        $students = $this->Student_model->getStudents_Class();
        $fee_record=array();
        foreach ($students as $std) {
            $fee=array();
            $fee['id']=$std['id'];
            $fee['regNumber']=$std['regNumber'];
            $fee['studentName']=$std['studentName'];
            $fee['classId']=$std['class'];
            $a=$this->Fee_model->checkPaid_CurrentMonth($std['id']);
            if(isset($a))
            {
                $fee['Date']=$a->recievedDate;
            }
            else
            {
                $fee['Date']="none";
            }
            $fee['amount']=$this->Class_model->getFee($fee['classId']);
            $fee['month']=date('F');
            array_push($fee_record, $fee);
        }
        $data['fee'] = $fee_record;
        $this->load->view('Fees', $data);
    }
    function pay_fee($data)
    {
        $this->load->model('Fee_model');
        $values=explode('_',urldecode($data));
        $fee=array();
        $fee['studentId']=$values[0];
        $fee['month']=date('F');
        $fee['recievedDate']=date('Y-m-d');
        $fee['classId']=$values[4];
        $this->Fee_model->pay($fee);
        redirect(base_url() . 'fees');
    }
    function print_fee($d)
    {
        $this->load->model('Class_model');
        $values=explode('_',urldecode($d));
        $fee=array();
        $fee['regNumber']=$values[0];
        $fee['studentName']=$values[1];
        $fee['amount']=$values[2];
        $fee['class']=$this->Class_model->getClassById($values[3])['className'];
        $fee['month']=date('F');
        $fee['recievedDate']=date('Y-m-d');
        $fee['back_url']=$values[4];
        $data['fee']=$fee;
        $this->load->view('print_fee',$data);
    }
}