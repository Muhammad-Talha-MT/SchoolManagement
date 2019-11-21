<?php
class Results_model extends CI_Model
{
    function getResult($studentid,$subjectid)
    {
        $this->db->select('obtainedmarks');
        $this->db->where("studentid", $studentid);
        $this->db->where("subjectid", $subjectid);
        $this->db->from('tbresults');
        $result=$this->db->get()->row();
        if(isset($result))
        {
            return $result->obtainedmarks;
        }
        else
        {
            return null;
        }
    }
    function add($data)
    {
        $this->db->insert('tbresults', $data);
    }
}