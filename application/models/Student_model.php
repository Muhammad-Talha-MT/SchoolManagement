<?php
class Student_model extends CI_Model
{
    function addStudent($data)
    {
        $this->db->insert('tbStudent', $data);
        $lastId = $this->db->insert_id();


        return  $lastId;
    }
}
