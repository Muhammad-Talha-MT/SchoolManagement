<?php
class Teacher_model extends CI_Model
{
    function addTeacher($formArray)
    {
        $this->db->insert('tbTeacher',$formArray);
    }
}
