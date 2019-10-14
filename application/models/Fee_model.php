<?php
class Fee_model extends CI_model
{
    function getStudents()
    {
        $this->db->select('*');
        $this->db->from('tbStudent');
        $query = $this->db->get();
        $result = $query->result_array();
        
        return $result;
    }
    function checkRecord($std)
    {
        $this->db->select('*');
        $this->db->from('tbfee');
        $this->db->where('studentId=',$std['id']);
        $query = $this->db->get();
        $a=$query->result_array();
        $std['month']=date('F');
        $std['amount']=0;
        $std['Date']="none";
        $std['classId']=-1;
        foreach ($a as $row) 
        {            
            if($row->month==date('F'))
            {
                $std['Date']=$row['recievedDate'];
            }
        }
        $this->db->select('*');
        $this->db->from('tbclass');
        $this->db->where('id=',$std['class']);
        $query=$this->db->get();
        $result=$query->row();
        if(isset($result))
        {
            $std['amount']=$result->fee;
            $std['classId']=$result->id;
        }
        return $std;
    }
    function pay()
    {
        $this->db->insert('tbfee',$data);
    }
    function getData($id)
    {
        $this->db->select('studentName,regNumber,class');
        $this->db->from('tbfee');
        $this->db->where('studentId=',$std['id']);
        $query = $this->db->get();
        $data=array();
        $result=$query()->row();
        $data['studentId']=$result->studentName;
        $data['regNumber']=$result->regNumber;
    }
}