<?php
class Dues_model extends CI_Model
{
	function getDuesType()
	{
		$this->db->select('*');
		$this->db->where('status', TRUE);
		$this->db->from('tbduetype');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function getDueTypeById($id)
	{
		$this->db->where("id", $id);
		return $this->db->get("tbduetype")->row_array();
	}

	function addStudentDues($data)
	{
		$this->db->insert('tbdues', $data);
		$lastId = $this->db->insert_id();


		return  $lastId;
	}

	function getDuesTypeByClass($classId)
	{
		$this->db->where(['classId' => $classId, 'status' => true, 'active' => true]);
		return $this->db->get("tbduetype")->result_array();
	}

	function addDuesType($data)
	{
		$this->db->insert('tbduetype', $data);
		$lastId = $this->db->insert_id();


		return  $lastId;
	}

	function update($updateData, $id)
	{
		$this->db->where("id", $id);
		$this->db->update("tbduetype", $updateData);
	}

	function getDueDeadline($id)
	{
		$this->db->select('deadline');
		$this->db->where('id', $id);
		return $this->db->get('tbduetype')->row()->deadline;
	}

	function getDueFine($id)
	{
		$this->db->select('fine');
		$this->db->where('id', $id);
		return $this->db->get('tbduetype')->row()->fine;
	}

	function getDueFineType($id)
	{
		$this->db->select('fineType');
		$this->db->where('id', $id);
		return $this->db->get('tbduetype')->row()->fineType;
	}

	function getDuesTypeId($dueTypeId)
	{
		$this->db->select('dueType');
		$this->db->where('id', $dueTypeId);
		return $this->db->get('tbduetype')->row()->dueType;
	}

	function getStudentDues()
	{
		$this->db->select('*');
		$this->db->from('tbdues');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function getStudentDueById($id)
	{
		$this->db->where("id", $id);
		return $this->db->get("tbdues")->row_array();
	}

	function getStudentDueByStudent($id)
	{
		$this->db->where("studentId", $id);
		return $this->db->get("tbdues")->result_array();
	}

	function submitFee($data, $id)
	{
		$this->db->where("id", $id);
		$this->db->update("tbdues", $data);
	}
	function getTotalEarning()
	{
		$this->db->select('totalAmount');
		$totalAmount = $this->db->get("tbdues")->result();

		$total = 0;
		foreach ($totalAmount as $dues) {
			if (isset($dues->totalAmount)) {
				$total = $total + $dues->totalAmount;
			}
		}
		return $total;
	}
}
