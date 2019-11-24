<?php
class Class_model extends CI_model
{
    function addClass($formArray)
    {
        $this->db->where('className', $formArray['className']);
        $q = $this->db->get('tbclass');
        $count = $q->num_rows();
        if ($count != 0) {
            return false;
        } else {

            $this->db->insert('tbclass', $formArray);
            return true;
        }
    }
    function getClasses()
    {
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
