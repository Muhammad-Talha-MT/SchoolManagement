<?php
class Class_model extends CI_model
{
	function addClass($formArray)
	{
		$this->db->where('className', $formArray['className']);
		$q = $this->db->get('tbclass');
		if (!$q) {
			return false;
		} else {
			$this->db->insert('tbclass', $formArray);
			return true;
		}
	}
	function getClasses_Name()
	{
		$this->db->select('id,className');
		return $this->db->get('tbclass')->result_array();
	}
	function getFee($id)
	{
		$this->db->select('fee');
		$this->db->where('id', $id);
		$result = $this->db->get('tbclass')->row();
		$result->fee;
	}
	function getClasses()
	{
		$this->db->where('isActive', 1);
		return $this->db->get('tbclass')->result_array();
	}
	function getClassNameById($id)
	{
		$this->db->select('className');
		$this->db->where('id', $id);
		return $this->db->get('tbclass')->row()->className;
	}
	function getOldClasses()
	{
		$this->db->where('isActive', 0);
		return $this->db->get('tbclass')->result_array();
	}
	function editClass($classId)
	{
		$this->db->where('id', $classId);
		return $this->db->get('tbclass')->row_array();
	}
	function getClassById($classId)
	{
		$this->db->where('id', $classId);
		return $this->db->get('tbclass')->row_array();
	}
	function updateClass($classId, $formArray)
	{
		$this->db->where('Id', $classId);
		$this->db->update('tbclass', $formArray);
	}
	function delete($classId)
	{
		$this->db->where('id', $classId);
		$this->db->delete('tbclass');
	}
}
