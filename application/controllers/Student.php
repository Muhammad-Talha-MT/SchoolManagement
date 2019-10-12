<?php
class Student extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Student_model');
    }
    function index()
    {
        $this->load->view('student');
    }
    function admission()
    {
        $this->load->view('admission');
    }
    function addStudent()
    {
        $dataToSend = array();
        $dataToSend['studentName'] = $this->input->post('studentName');
        $dataToSend['fatherName'] = $this->input->post('fatherName');
        $dataToSend['address'] = $this->input->post('address');
        $dataToSend['studentCnic'] = $this->input->post('studentcnic');
        $dataToSend['fatherCnic'] = $this->input->post('fathercnic');
        $dataToSend['cellNumber'] = $this->input->post('cellNumber');
        $dataToSend['dob'] = $this->input->post('dob');
        $dataToSend['gender'] = $this->input->post('gender');
        $dataToSend['class'] = $this->input->post('class');
        $dataToSend['admissionBy'] = 1;
        $dataToSend['admissionDate'] = Date('Y-m-d');

        $studentId = $this->Student_model->addStudent($dataToSend);
        $this->session->set_flashdata('success', 'Student with id ' . $studentId . ' successfully inserted');
        redirect(base_url() . 'Student');
    }
}
