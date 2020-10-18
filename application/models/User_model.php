<?php
class User_model extends CI_Model
{
    public function addUser($data)
    {
        $this->db->insert("users",$data);
        $userId=$this->db->insert_id();
        $newData=array('user_id'=>$userId, 'coins'=>0.0, 'extra_ghs'=>35);
        $this->db->insert("useramount",$newData);
        return $userId;
    }
    public function addReferHistory($data)
    {
        $this->db->insert("referral_history",$data);
        $referid=$this->db->insert_id();
        return $referid;
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
    public function getAmountById($userid)
    {
        $this->db->where("user_id",$userid);
        $this->db->from("useramount");
        $this->db->select("*");
        return $this->db->get()->row_array();
    }
    public function getUser($data)
    {
        $this->db->where("email",$data["email"]);
        $this->db->where("password",$data["password"]);
        $this->db->from("users");
        return $this->db->get()->row_array();
    }
    public function getUserById($id)
    {
        $this->db->where("id",$id);
        $this->db->from("users");
        $this->db->select("*");
        return $this->db->get()->row_array();
    }
    public function getUserByEmail($email)
    {
        $this->db->where("email",$email);
        $this->db->from("users");
        $this->db->select("*");
        return $this->db->get()->row_array();
    }
    public function updateUser($user)
    {
        $this->db->where("id",$user['id']);
        $this->db->update("users", $user);
        return $this->db->get()->row_array();
    }
    public function updateAmount($amount)
    {
        $this->db->where("user_id",$amount['user_id']);
        $this->db->update("useramount", $amount);
    }
    function getReferralsById($id)
	{
		$this->db->where("referrer_user_id", $id);
		return $this->db->get("referral_history")->result_array();
	}
    
}