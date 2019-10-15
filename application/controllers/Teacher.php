<?php
class Teacher extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Teacher_model');
    }
    function createTeacher()
    {
        $this->load->view('addTeacher');
    }
    function addTeacher()
    {
        $data = array();
        $data['teacherName'] = $this->input->post('teacherName');
        $data['pay'] = $this->input->post("teacherPay");
        $data['specialSubject'] = $this->input->post('specialSubject');
        $data['appointedDate'] = $this->input->post('appointedDate');
        $data['gender'] = $this->input->post('gender');
        $data['checkInTime'] = $this->input->post('checkInTime');
        $data['checkOutTime'] = $this->input->post('checkOutTime');
        $data['picture'] = $this->pic_upload();
        $this->Teacher_model->addTeacher($data);
        redirect(base_url() . "Teacher/showTeacher");
    }
    function showTeacher()
    {
        $data['teacherList'] = $this->Teacher_model->getTeacher();
        $this->load->view('ViewTeacher', $data);
    }
    function showEdit($Id)
    {
        $teacher = $this->Teacher_model->editTeacher($Id);
        $this->load->view('editTeacher', $teacher);
    }
    function editTeacher($id)
    {
        $data = array();
        $data['teacherName'] = $this->input->post('teacherName');
        $data['pay'] = $this->input->post("teacherPay");
        $data['specialSubject'] = $this->input->post('specialSubject');
        $data['appointedDate'] = $this->input->post('appointedDate');
        $data['gender'] = $this->input->post('gender');
        $data['checkInTime'] = $this->input->post('checkInTime');
        $data['checkOutTime'] = $this->input->post('checkOutTime');
        $this->Teacher_model->updateTeacher($id, $data);
        redirect(base_url() . "Teacher/showTeacher");
    }
    function delete($id)
    {
        $this->Teacher_model->delete($id);
        redirect(base_url() . 'Teacher/showTeacher');
    }
    function getTeacherDetail($id)
    {
        $data = $this->Teacher_model->editTeacher($id);
        $this->load->view('DetailTeacher', $data);
    }
    function printTeacher($id)
    {
        $data = $this->Teacher_model->editTeacher($id);
        $this->load->view('PrintTeacherDetail', $data);
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
}
