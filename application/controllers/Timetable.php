<?php
class TimeTable extends CI_Controller
{
    function index()
    {
        $this->load->model('Class_model');
        $this->load->model('Subject_model');
        $dataToSend = array();
        $dataToSend['className'] = $this->Class_model->getClassesName();
        $dataToSend['subjectName'] = $this->Subject_model->getSubjectName();
        // print_r($dataToSend['subjectName']);
        // die();
        $this->load->view("addTimeTable", $dataToSend);
    }
    function TeacherNameFromSubject()
    {
        $this->load->model('Teacher_model');
        $subject = $_POST['data'];
        $data = array();
        $data['teachers'] = $this->Teacher_model->getTeacherName($subject);
        echo json_encode($data['teachers']);
    }
}
