<?php
class Teacher extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Teacher_model');
    }
    function addTeacher()
    {
        $this->load->view('addTeacher');
    }
}
