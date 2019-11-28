<?php
class Teacher_model extends CI_Model
{
	function addTeacher($formArray)
	{
		$this->db->insert('tbteacher', $formArray);
	}
	function getTeacher()
	{
		return $this->db->get('tbteacher')->result_array();
	}
	function getTeacherCount()
	{
		$teacherCount = $this->db->from("tbteacher")->count_all_results();
		return $teacherCount;
	}
	function editTeacher($teacherId)
	{
		$this->db->where('id', $teacherId);
		return $this->db->get('tbteacher')->row_array();
	}
	function updateTeacher($id, $teacher)
	{
		$this->db->where('id', $id);
		$this->db->update('tbteacher', $teacher);
	}
	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('tbteacher');
	}
}
