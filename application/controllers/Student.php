<?php
class Student extends CI_Controller{
    function index(){
        $this->load->view('student');
    }
    function admission(){
        $this->load->view('admission');
    }
}
