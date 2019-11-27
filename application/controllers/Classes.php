<?php
class Classes extends CI_Controller
{
	function index()
	{
		$this->load->model('Class_model');
		$classes = $this->Class_model->getClasses();
		$data['classes'] = $classes;
		$this->load->view('classes', $data);
	}
	function oldRecord()
	{
		$this->load->model('Class_model');
		$classes = $this->Class_model->getOldClasses();
		$data['classes'] = $classes;
		$this->load->view('oldClasses', $data);
	}
	function addClass()
	{
		$this->load->view('addClass');
	}
	public function addNewClass()
	{
		$this->load->model('Class_model');
		$formArray = array();
		$formArray['className'] = $this->input->post('className');
		$formArray['session'] = $this->input->post('session');
		$formArray['monthlyFee'] = $this->input->post('monthly');
		$formArray['admissionFee'] = $this->input->post('admission');
		$formArray['paperFund'] = $this->input->post('paper');
		$formArray['courseFee'] = $this->input->post('course');
		$formArray['isActive'] = True;

		$l = $this->Class_model->addClass($formArray);
		if ($l == true) {
			$this->session->set_flashdata('success', 'Record Successfully save');
		} else {
			$this->session->set_flashdata('success', 'Record Already Exist');
		}
		redirect(base_url() . 'Classes');
	}
	function showEdit($classId)
	{
		$this->load->model('Class_model');
		$formArray = array();
		$formArray['className'] = $this->input->post('className');
		$formArray['monthlyFee'] = $this->input->post('monthly');
		$formArray['admissionFee'] = $this->input->post('admission');
		$formArray['paperFund'] = $this->input->post('paper');
		$formArray['courseFee'] = $this->input->post('course');
		$this->Class_model->updateClass($classId, $formArray);
		$this->session->set_flashdata('success', 'Record Successfully save');
		redirect(base_url() . 'Classes');
	}
	function edit($classId)
	{
		$this->load->model('Class_model');
		$class = $this->Class_model->editClass($classId);
		$data = array();
		$data['class'] = $class;
		$this->load->view('editClass', $data);
	}
	function delete($classId)
	{
		$this->load->model("Class_model");
		$formArray['isActive'] = False;
		$this->Class_model->updateClass($classId, $formArray);
		redirect(base_url() . 'Classes');
	}
}
