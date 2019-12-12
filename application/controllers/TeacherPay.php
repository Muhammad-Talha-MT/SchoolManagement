<?php
class TeacherPay extends CI_Controller
{
    function __constructor()
    {
        $this->load->model('TeacherPay_model');
    }

    function Calculate()
    {
        $data = array(
            'teacherId' => $_POST['id'],
            'advance' => $_POST['avdance'],
            'leaves' => $_POST['leaves'],
            'late' => $_POST['late'],
            'month' => Date('M'),
            'receivedDate' => date("Y/m/d"),
            'payedBy' => 1
        );
        $this->load->model('TeacherPay_model');
        $data['calculatedPay'] = $_POST['pay'] - ($data['advance'] + (($_POST['pay'] / 30) * $data['leaves']) + ($data['late'] * ($_POST['pay'] / 30)) / 2);
        $this->TeacherPay_model->addTeacherPay($data);
        echo json_encode($data['calculatedPay']);
    }
    function ShowTeacher()
    {
        $this->load->model('Teacher_model');
        $this->load->model('TeacherPay_model');
        $data['payData'] = $this->Teacher_model->getTeacher();
        $size = sizeof($data['payData']);
        for ($i = 0; $i < $size; $i++) {
            $data['payData'][$i]['month'] = Date('M');
            $data['payData'][$i]['leave'] = $this->TeacherPay_model->getTeacherLeaves($data['payData'][$i]['id']);
            $data['payData'][$i]['late'] = $this->TeacherPay_model->getTeacherLate($data['payData'][$i]['id']);
            $data['payData'][$i]['advance'] = $this->TeacherPay_model->getTeacherAdvance($data['payData'][$i]['id']);
            $data['payData'][$i]['calculatedPay'] = $this->TeacherPay_model->getTeacherCalculatedPay($data['payData'][$i]['id']);
        }
        $this->load->view("teachersPay", $data);
    }
    function teacherDetail($id)
    {
        $this->load->model('Teacher_model');
        $this->load->model('TeacherPay_model');
        $teacher = $this->Teacher_model->editTeacher($id);
        $teacher['leaves'] = $this->TeacherPay_model->getTeacherLeaves($id);
        $teacher['late'] = $this->TeacherPay_model->getTeacherLate($id);
        $teacher['advance'] = $this->TeacherPay_model->getTeacherAdvance($id);
        $teacher['month'] = Date('M');
        $teacher['calculatedPay'] = $this->TeacherPay_model->getTeacherCalculatedPay($id);
        $this->load->view('printTeacherPay', $teacher);
    }
}
