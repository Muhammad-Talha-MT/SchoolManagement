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
        $data['studentList'] = $this->Student_model->getStudents();
        $this->load->view('student', $data);
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
        $dataToSend['yearOfAdmission'] = Date('Y');

        // ClassId
        $classid = $this->input->post('class');
        $dataToSend['regNumber'] = $this->createRegNumber($classid);

        $studentId = $this->Student_model->addStudent($dataToSend);
        $this->session->set_flashdata('success', 'Student with id ' . $studentId . ' successfully inserted');
        redirect(base_url() . 'Student');
    }

    function createRegNumber($classId)
    {
        $className = array('PG', 'Nursery');
        $classCount = $this->Student_model->getClassCount($classId) + 1;
        print_r($classCount);
        //die();
        $year = Date('Y');
        $class = $className[$classId];
        $regNumber = $year . "-" . $class . "-" . $classCount;
        return $regNumber;
    }

    function goToEditStudent($id)
    {
        $student = $this->Student_model->getStudentById($id);
        $this->load->view('editStudent', $student);
    }

    function editStudent($id)
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
        $dataToSend['yearOfAdmission'] = Date('Y');

        $this->Student_model->updateStudent($id, $dataToSend);
        $this->session->set_flashdata('success', 'Student is successfully updated');
        redirect(base_url() . 'Student');
    }

    function deleteStudent($id)
    {
        $this->Student_model->deleteStudent($id);
        redirect(base_url() . 'Student');
    }
}
