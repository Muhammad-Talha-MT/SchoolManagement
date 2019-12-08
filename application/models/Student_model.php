<?php
class Student_model extends CI_Model
{
<<<<<<< Updated upstream
	function addStudent($data)
	{
		$this->db->insert('tbStudent', $data);
		$lastId = $this->db->insert_id();


		return  $lastId;
	}

	function getClassCount($classId)
	{
		$classCount = $this->db->where(['class' => $classId, 'yearOfAdmission' => Date('Y')])->from("tbStudent")->count_all_results();
		return $classCount;
	}

	function getStudentCount()
	{
		$studentCount = $this->db->where('status', TRUE)->from("tbStudent")->count_all_results();
		return $studentCount;
	}

	function getOldStudentCount()
	{
		$studentCount = $this->db->where('status', FALSE)->from("tbStudent")->count_all_results();
		return $studentCount;
	}

	function getStudents_Class()
	{
		$this->db->select('id,regNumber,studentName,class');
		$this->db->from('tbStudent');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	function getStudents()
	{
		$this->db->select('*');
		$this->db->where('status', true);
		$this->db->from('tbStudent');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function getStudentById($id)
	{
		$this->db->where("id", $id);
		return $this->db->get("tbStudent")->row_array();
	}

	function getActiveStudentsByClassId($classId)
	{
		$this->db->where(['class' => $classId, 'status' => True]);
		return $this->db->get("tbStudent")->result_array();
	}

	function updateStudent($id, $updateData)
	{
		$this->db->where("id", $id);
		$this->db->update("tbStudent", $updateData);
	}

	function getStudentNameById($id)
	{
		$this->db->select('studentName');
		$this->db->where('id', $id);
		return $this->db->get('tbstudent')->row()->studentName;
	}

	function getStudentRegById($id)
	{
		$this->db->select('regNumber');
		$this->db->where('id', $id);
		return $this->db->get('tbstudent')->row()->regNumber;
	}

	function getStudentClassById($id)
	{
		$this->db->select('class');
		$this->db->where('id', $id);
		return $this->db->get('tbstudent')->row()->class;
	}

	function deleteStudent($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("tbStudent");
	}

	function getOldStudents()
	{
		$this->db->select('*');
		$this->db->where('status', false);
		$this->db->from('tbStudent');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
=======
    function addStudent($data)
    {
        // echo "<pre>";
        // print_r($data);
        // die();
        $this->db->insert('tbStudent', $data);
        $lastId = $this->db->insert_id();


        return  $lastId;
    }

    function getClassCount($classId)
    {
        $classCount = $this->db->where(['class' => $classId, 'yearOfAdmission' => Date('Y')])->from("tbStudent")->count_all_results();
        return $classCount;
    }
    function getStudents_Class()
    {
        $this->db->select('id,regNumber,studentName,class');
        $this->db->where(['status' => true]);
        $this->db->from('tbStudent');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    function getDeletedStudents()
    {
        $this->db->select('*');
        $this->db->where(['status' => false]);
        $this->db->from('tbStudent');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    function getStudents()
    {
        $this->db->select('*');
        $this->db->where(['status' => true]);
        $this->db->from('tbStudent');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
    }

    function getStudentById($id)
    {
        $this->db->where("id", $id);
        return $this->db->get("tbStudent")->row_array();
    }

    function updateStudent($id, $updateData)
    {
        $this->db->where("id", $id);
        $this->db->update("tbStudent", $updateData);
    }

    function deleteStudent($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("tbStudent");
    }
>>>>>>> Stashed changes
}
