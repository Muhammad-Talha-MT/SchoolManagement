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
    function getResultIndex($studentid,$subjectid)
    {
        $this->db->select('id');
        $this->db->where("studentid", $studentid);
        $this->db->where("subjectid", $subjectid);
        $this->db->from('tbresults');
        $result=$this->db->get()->row();
        if(isset($result))
        {
            return $result->id;
        }
        else
        {
            return null;
        }
    }
    function update($marks, $id)
    {
        $this->db->set('obtainedmarks', $marks);
        $this->db->where("id",$id);
        $this->db->update('tbresults');
    }
    function add($data)
    {
        $this->db->insert('tbresults', $data);
    }
}