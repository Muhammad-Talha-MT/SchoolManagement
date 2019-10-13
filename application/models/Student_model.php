<?php
class Student_model extends CI_Model
{
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

    function getStudents()
    {
        $this->db->select('*');
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
}
