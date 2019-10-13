<?php
class Student extends CI_Controller
{
    //Constructor
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Student_model');
        $this->load->model('Class_model');
    }

    //Index to Show Students
    function index()
    {
        $data['studentList'] = $this->Student_model->getStudents();
        $this->load->view('student', $data);
    }

    function studentDetail($id)
    {
        $student = $this->Student_model->getStudentById($id);
        $class = $this->Class_model->getClassById($student['class']);
        $student['class'] = $class['className'];
        $this->load->view('studentDetail', $student);
    }

    //Admission Page
    function admission()
    {
        $data['classList'] = $this->Class_model->getClasses();
        $this->load->view('admission', $data);
    }

    //Add Student from Admission Page
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
        $dataToSend['picture'] = $this->pic_upload();



        // ClassId
        $classid = $this->input->post('class');
        $dataToSend['regNumber'] = $this->createRegNumber($classid);

        $studentId = $this->Student_model->addStudent($dataToSend);
        $this->session->set_flashdata('success', 'Student with id ' . $studentId . ' successfully inserted');
        redirect(base_url() . 'Student');
    }

    //Registeration Number Generation
    function createRegNumber($classId)
    {
        $classCount = $this->Student_model->getClassCount($classId) + 1;
        $year = Date('Y');
        $class = $this->Class_model->getClassById($classId);
        $regNumber = $year . "-" . $class['className'] . "-" . $classCount;
        return $regNumber;
    }

    //Go To Edit Page
    function goToEditStudent($id)
    {
        $data['student'] = $this->Student_model->getStudentById($id);
        $data['class'] = $this->Class_model->getClasses();
        $this->load->view('editStudent', $data);
    }

    //Edit Student
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


    function pic_upload()
    {
        $config['upload_path'] = './upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['min_width']  = '200';
        $config['min_height']  = '300';


        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('uploadPicture')) {
            $error = array('error' => $this->upload->display_errors());

            return $error;
        } else {
            $data = $this->upload->data();
            $config['image_library'] = 'gd2';
            $config['source_image'] = $data['full_path']; //get original image
            $config['maintain_ratio'] = TRUE;
            $config['width'] = 200;
            $config['height'] = 300;
            $this->load->library('image_lib', $config);
            if (!$this->image_lib->resize()) {
                $this->handle_error($this->image_lib->display_errors());
            }
            return $data['file_name'];
        }
    }
    //Delete Student
    function deleteStudent($id)
    {
        $this->Student_model->deleteStudent($id);
        redirect(base_url() . 'Student');
    }
}
