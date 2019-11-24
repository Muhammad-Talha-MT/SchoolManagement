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
        $this->load->model('Subject_model');
        $data['class'] = $this->Subject_model->showClasses();
        $data['teacher'] = $this->Subject_model->showTeacher();
        $this->load->view('addSubject', $data);
    }
    public function addNewSubject()
    {
        $this->load->model('Subject_model');
        $this->load->library('form_validation');
        $this->form_validation->set_rules('subjectName', 'Subject Name', 'required|alpha');
        $this->form_validation->set_rules('subjectMarks', 'Subject Marks', 'required|numeric|less_than[101]|greater_than[0]');
        $check = $this->Subject_model->check($this->input->post('subjectName'), $this->input->post('class'));
        if ($this->form_validation->run() == True) {
            if ($check == 0 && $this->input->post('class') > 0 && $this->input->post('teacher') > 0) {
                $formArray = array();
                $formArray['subjectName'] = $this->input->post('subjectName');
                $formArray['classId'] = $this->input->post('class');
                $formArray['teacherId'] = $this->input->post('teacher');
                $this->Subject_model->addUser($formArray);
                $this->session->set_flashdata('success', 'Record Successfully save');
                redirect(base_url() . 'Subject');
            } else {
                $this->session->set_flashdata('Fail', 'Subject is Invalid');
            }
        } else {
            $data['class'] = $this->Subject_model->showClasses();
            $data['teacher'] = $this->Subject_model->showTeacher();
            $this->load->view('addSubject', $data);
        }
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
