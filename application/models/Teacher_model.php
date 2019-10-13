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
    function editTeacher($teacherId)
    {
        $this->db->where('id', $teacherId);
        return $this->db->get('tbteacher')->row();
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
