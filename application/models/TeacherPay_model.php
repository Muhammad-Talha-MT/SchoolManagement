<?php
class TeacherPay_model extends CI_Model
{
    function addTeacherPay($formArray)
    {
        // print_r($formArray);
        // die();
        $this->db->insert('tbteacherspay', $formArray);
    }
    function getTeacherCalculatedPay($id)
    {
        if ($id != NULL) {
            $this->db->where('teacherId', $id);
            return $this->db->get('tbteacherspay')->row_array()['calculatedPay'];
        } else {
            return NULL;
        }
    }
    function getTeacherLeaves($id)
    {
        if ($id != NULL) {
            $this->db->where('teacherId', $id);

            return $this->db->get('tbteacherspay')->row_array()['leaves'];
        } else {
            return NULL;
        }
    }
    function getTeacherLate($id)
    {
        if ($id != NULL) {
            $this->db->where('teacherId', $id);
            return $this->db->get('tbteacherspay')->row_array()['late'];
        } else {
            return NULL;
        }
    }
    function getTeacherAdvance($id)
    {
        if ($id != NULL) {
            $this->db->where('teacherId', $id);
            $result = $this->db->get('tbteacherspay')->row_array();
            return $result['advance'];
        } else {
            return NULL;
        }
    }
}
