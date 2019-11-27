<?php
class Dues extends CI_Controller
{
	function duesType()
	{
		$this->load->model('Class_model');
		$this->load->model('Dues_model');
		$dues['duesType'] = $this->Dues_model->getDuesType();
		// echo "<pre>";
		// print_r($dues['duesType']);
		// die();
		$size = sizeof($dues['duesType']);
		for ($i = 0; $i < $size; $i++) {
			$dues['duesType'][$i]['className'] = $this->Class_model->getClassNameById($dues['duesType'][$i]['classId']);
			if ($dues['duesType'][$i]['dueType'] == 1) {
				$dues['duesType'][$i]['dueType'] = "Admission Fee";
			} elseif ($dues['duesType'][$i]['dueType'] == 2) {
				$dues['duesType'][$i]['dueType'] = "Monthly Fee";
			} elseif ($dues['duesType'][$i]['dueType'] == 3) {
				$dues['duesType'][$i]['dueType'] = "Paper Fund";
			} else {
				$dues['duesType'][$i]['dueType'] = "Course Fee (Books)";
			}

			if ($dues['duesType'][$i]['fineType'] == 1) {
				$dues['duesType'][$i]['fineType'] = "Daily";
			} elseif ($dues['duesType'][$i]['fineType'] == 2) {
				$dues['duesType'][$i]['fineType'] = "Monthly";
			} else {
				$dues['duesType'][$i]['fineType'] = "No Fine";
			}
		}

		$this->load->view('duesType', $dues);
	}

	function addDuesType()
	{
		$this->load->model('Class_model');
		$data['class'] = $this->Class_model->getClasses();
		$this->load->view('addDuesType', $data);
	}

	function addDues($dueId)
	{
		$this->load->model('Dues_model');
		$this->load->model('Student_model');
		$this->load->model('Class_model');
		$duesType = $this->Dues_model->getDueTypeById($dueId);
		$classId = $duesType['classId'];
		$class = $this->Class_model->getClassById($classId);
		$student = $this->Student_model->getActiveStudentsByClassId($classId);
		if ($class['isActive'] == true) {
			foreach ($student as $std) {
				$data['dueTypeId'] = $dueId;
				$data['studentId'] = $std['id'];
				$data['isPaid'] = false;
				$this->Dues_model->addStudentDues($data);
			}
			$updateDate['active'] = true;
			$this->Dues_model->update($updateDate, $dueId);
			$this->session->set_flashdata('success', 'Your Due is Activated');
			redirect(base_url() . 'Dues/duesType');
		} else {
			$this->session->set_flashdata('fail', 'Your Due is Activated');
			redirect(base_url() . 'Dues/duesType');
		}
	}

	function addNewDuesType()
	{
		$this->load->model('Dues_model');
		$formArray = array();
		$formArray['dueType'] = $this->input->post('dueName');
		$formArray['classId'] = $this->input->post('class');
		$formArray['deadline'] = $this->input->post('deadline');
		$formArray['fine'] = $this->input->post('fine');
		$formArray['fineType'] = $this->input->post('fineType');
		$formArray['active'] = False;
		$formArray['status'] = True;
		$this->Dues_model->addDuesType($formArray);
		$this->session->set_flashdata('success', 'Record Successfully save');
		redirect(base_url() . 'Dues/duesType');
	}

	function delete($id)
	{
		$this->load->model('Dues_model');
		$data['status'] = False;
		$this->Dues_model->update($data, $id);
		redirect(base_url() . 'Dues/duesType');
	}

	function dueAmount($classId, $dueTypeId)
	{
		$this->load->model('Class_model');
		$class = $this->Class_model->getClassById($classId);
		if ($dueTypeId == 1) {
			return $class['admissionFee'];
		} elseif ($dueTypeId == 2) {
			return $class['monthlyFee'];
		} else if ($dueTypeId == 3) {
			return $class['paperFund'];
		} else {
			return $class['courseFee'];
		}
	}

	function studentDues()
	{
		$this->load->model('Dues_model');
		$this->load->model('Student_model');
		$dues['studentDues'] = $this->Dues_model->getStudentDues();

		$size = sizeof($dues['studentDues']);
		for ($i = 0; $i < $size; $i++) {
			$duesType = $this->Dues_model->getDuesTypeId($dues['studentDues'][$i]['dueTypeId']);
			$dues['studentDues'][$i]['studentName'] = $this->Student_model->getStudentNameById($dues['studentDues'][$i]['studentId']);
			$dues['studentDues'][$i]['RegisterationNo'] = $this->Student_model->getStudentRegById($dues['studentDues'][$i]['studentId']);
			$dues['studentDues'][$i]['deadline'] = $this->Dues_model->getDueDeadline($dues['studentDues'][$i]['dueTypeId']);
			$dues['studentDues'][$i]['fine'] = $this->Dues_model->getDueFine($dues['studentDues'][$i]['dueTypeId']);
			$dues['studentDues'][$i]['fineType'] = $this->Dues_model->getDueFineType($dues['studentDues'][$i]['dueTypeId']);
			$dues['studentDues'][$i]['amount'] = $this->dueAmount($this->Student_model->getStudentClassById($dues['studentDues'][$i]['studentId']), $dues['studentDues'][$i]['dueTypeId']);
			if ($duesType == 1) {
				$dues['studentDues'][$i]['dueType'] = "Admission Fee";
			} elseif ($duesType == 2) {
				$dues['studentDues'][$i]['dueType'] = "Monthly Fee";
			} elseif ($duesType == 3) {
				$dues['studentDues'][$i]['dueType'] = "Paper Fund";
			} else {
				$dues['studentDues'][$i]['dueType'] = "Course Fee (Books)";
			}
		}
		$this->load->view('studentDues', $dues);
	}

	function submitStudentDues($studentDuesId, $amount, $fine, $fineType)
	{
		$this->load->model('Dues_model');
		$studentDue = $this->Dues_model->getStudentDueById($studentDuesId);
		$deadline = $this->Dues_model->getDueDeadline($studentDue['dueTypeId']);
		$deadline = $this->Dues_model->getDueDeadline($studentDue['dueTypeId']);
		$currentDate = Date('Y-m-d');
		$days = 0;
		$month = 0;
		if ($currentDate > $deadline) {
			$days = date_diff(date_create($deadline), date_create($currentDate))->days;
			$month = date_diff(date_create($deadline), date_create($currentDate))->m;
		}
		if ($fineType == 1) {
			$total = $this->calculateDueAmount($amount, $days, $fine);
		} else {
			$total = $this->calculateDueAmount($amount, $month, $fine);
		}
		$submit['isPaid'] = TRUE;
		$submit['fineAmount'] = $total['fine'];
		$submit['totalAmount'] = $total['fee'];
		$submit['paidDate'] = $currentDate;
		$submit['recivedBy'] = 1;

		$this->Dues_model->submitFee($submit, $studentDuesId);
		redirect(base_url() . 'Dues/studentdues');
	}

	function calculateDueAmount($amount, $x, $fine)
	{
		$totalFine = $x * $fine;
		$total['fee'] = $totalFine + $amount;
		$total['fine'] = $totalFine;
		return $total;
	}

	function studentDue($studentId)
	{
		$this->load->model('Dues_model');
		$this->load->model('Student_model');
		$dues['studentDues'] = $this->Dues_model->getStudentDueByStudent($studentId);

		$size = sizeof($dues['studentDues']);
		for ($i = 0; $i < $size; $i++) {
			$duesType = $this->Dues_model->getDuesTypeId($dues['studentDues'][$i]['dueTypeId']);
			$dues['studentDues'][$i]['studentName'] = $this->Student_model->getStudentNameById($dues['studentDues'][$i]['studentId']);
			$dues['studentDues'][$i]['RegisterationNo'] = $this->Student_model->getStudentRegById($dues['studentDues'][$i]['studentId']);
			$dues['studentDues'][$i]['deadline'] = $this->Dues_model->getDueDeadline($dues['studentDues'][$i]['dueTypeId']);
			$dues['studentDues'][$i]['fine'] = $this->Dues_model->getDueFine($dues['studentDues'][$i]['dueTypeId']);
			$dues['studentDues'][$i]['fineType'] = $this->Dues_model->getDueFineType($dues['studentDues'][$i]['dueTypeId']);
			$dues['studentDues'][$i]['amount'] = $this->dueAmount($this->Student_model->getStudentClassById($dues['studentDues'][$i]['studentId']), $dues['studentDues'][$i]['dueTypeId']);
			if ($duesType == 1) {
				$dues['studentDues'][$i]['dueType'] = "Admission Fee";
			} elseif ($duesType == 2) {
				$dues['studentDues'][$i]['dueType'] = "Monthly Fee";
			} elseif ($duesType == 3) {
				$dues['studentDues'][$i]['dueType'] = "Paper Fund";
			} else {
				$dues['studentDues'][$i]['dueType'] = "Course Fee (Books)";
			}
		}
		$this->load->view('studentDues', $dues);
	}
}
