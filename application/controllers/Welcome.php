<?php
class Welcome extends CI_Controller
{
	function index()
	{
		// $this->load->model('Student_model');
		// $this->load->model('Teacher_model');
		// $this->load->model('Dues_model');
		// $data['studentCount'] = $this->Student_model->getStudentCount();
		// $data['oldStudentCount'] = $this->Student_model->getOldStudentCount();
		// $data['teacherCount'] = $this->Teacher_model->getTeacherCount();
		// $data['totalEarning'] = $this->Dues_model->getTotalEarning();
		$this->load->view('index');
	}
}
