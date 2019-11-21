<?php
class Subject_Model extends CI_Model
{
    function addUser($formArray)
    {
        $this->db->insert('tbSubject', $formArray);
    }
    function getSubjectByClass($id)
    {
        $this->db->select('id,subjectName,totalMarks');
        $this->db->where("classId", $id);
        $this->db->from('tbSubject');
        return $subject=$this->db->get()->result_array();

        // print_r($subject=$this->db->get()->row());
        // die();
    }
    function getSubject()
    {
        return $this->db->get('tbSubject')->result_array();
    }
    function editSubject($subjectId)
    {
        $this->db->where('id', $subjectId);
        return $this->db->get('tbSubject')->row_array();
    }
    function updateSubject($subjectId, $formArray)
    {
        $this->db->where('Id', $subjectId);
        $this->db->update('tbSubject', $formArray);
    }
    function delete($subjectId)
    {
        $this->db->where('id', $subjectId);
        $this->db->delete('tbSubject');
    }
    function showClasses()
    {
        return $this->db->get('tbclass')->result_array();
    }
    function showTeacher()
    {
        $this->db->select('teacherName');
        $this->db->from('tbteacher');
        $query = $this->db->get()->result_array();
        return $query;
    }
}