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
}
