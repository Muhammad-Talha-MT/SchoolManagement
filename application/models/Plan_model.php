<?php
class Plan_model extends CI_Model
{
    public function addPlan($data)
	{
		$this->db->insert('plans', $data);
		$lastId = $this->db->insert_id();
		return  $lastId;
    }
    public function getPlans()
	{
		$this->db->select('*');
		$this->db->from('plans');
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
    }
    function update($id, $updateData)
	{
		$this->db->where("id", $id);
		$this->db->update("plans", $updateData);
	}
    function delete($id)
	{
		$this->db->where("id", $id);
		$this->db->delete("plans");
    }
    function getPlanById($id)
	{
		$this->db->where("id", $id);
		return $this->db->get("plans")->row_array();
	}
	function selectedPlan($data)
	{
		$this->db->where("user_id", $data["user_id"]);
		$query=$this->db->get("selected_plans");	
		if ($query->num_rows() > 0) {
			$this->db->where("user_id", $data["user_id"]);
			$this->db->delete("selected_plans");
			
		}
		$this->db->insert('selected_plans', $data);
		$insertId = $this->db->insert_id();
		return $insertId;
	}
}
?>