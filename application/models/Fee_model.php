<?php
class Fee_model extends CI_model
{
    function checkPaid_CurrentMonth($id)
    {
        $this->db->select('recievedDate');
        $this->db->from('tbfee');
        $this->db->where('studentId=',$id , 'month=',date('F'));
        $query = $this->db->get();
        $result=$query->row();
        return $result;
    }
    function pay($data)
    {
        $this->db->insert('tbfee',$data);
    }
}