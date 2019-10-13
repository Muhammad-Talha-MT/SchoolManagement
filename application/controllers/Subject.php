<?php
class Subject extends CI_Controller
{
    function index()
    {
        $this->load->model('Subject_model');
        $subjects = $this->Subject_model->getSubject();
        $data['subjects'] = $subjects;
        $this->load->view('subject', $data);
    }
    function addSubjectScreen()
    {
        $this->load->view('addSubject');
    }
    public function addNewSubject()
    {
        $this->load->model('Subject_model');
        $formArray = array();
        $formArray['subjectName'] = $this->input->post('subjectName');
        $formArray['totalMarks'] = $this->input->post('subjectMarks');
        $formArray['classId'] = $this->input->post('class');
        $formArray['teacherId'] = $this->input->post('teacher');
        $this->Subject_model->addUser($formArray);
        $this->session->set_flashdata('success', 'Record Successfully save');
        redirect(base_url() . 'Subject');
    }
    function showEdit($subjectId)
    {
        $this->load->model('Subject_model');
        $formArray = array();
        $formArray['subjectName'] = $this->input->post('subjectName');
        $formArray['totalMarks'] = $this->input->post('subjectMarks');

        $formArray['classId'] = $this->input->post('class');
        $formArray['teacherId'] = $this->input->post('teacher');;
        $this->Subject_model->updateSubject($subjectId, $formArray);
        $this->session->set_flashdata('success', 'Record Successfully save');
        redirect(base_url() . 'Subject');
    }
    function edit($subjectId)
    {
        $this->load->model('Subject_model');
        $subject = $this->Subject_model->editSubject($subjectId);
        $data = array();
        $data['subject'] = $subject;
        $this->load->view('editSubject', $data);
    }
    function delete($subjectId)
    {
        $this->load->model("Subject_model");
        $subject = $this->Subject_model->editSubject($subjectId);
        if (!empty($subject)) {
            $this->Subject_model->delete($subjectId);
            redirect(base_url() . 'Subject');
        }
    }
}
