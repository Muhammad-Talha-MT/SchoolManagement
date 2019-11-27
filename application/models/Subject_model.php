<?php
class Subject_Model extends CI_Model
{
    function addUser($formArray)
    {
        $this->db->insert('tbSubject', $formArray);
    }
    function getSubject()
    {
        return $this->db->get('tbSubject')->result_array();
    }
    function check($subjectName, $class)
    {
        $this->db->select('*');
        $this->db->where('subjectName', $subjectName);
        $this->db->where('classId', $class);
        $this->db->from('tbsubject');
        $query = $this->db->get();
        $count = $query->num_rows();
        return $count;
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
