<?php
class User_model extends CI_Model
{
    public function addUser($data)
    {
        $this->db->insert("users",$data);
        $userId=$this->db->insert_id();
        return $userId;
    }
    public function checkUser($data)
    {
        $this->db->where("email",$data["email"]);
        $this->db->where("password",$data["password"]);
        $this->db->from("users");
        $query=$this->db->get();
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function getUser($data)
    {
        $this->db->where("email",$data["email"]);
        $this->db->where("password",$data["password"]);
        $this->db->from("users");
        return $this->db->get()->row_array();
    }
}