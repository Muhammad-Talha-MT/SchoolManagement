<?php
class Login_model extends CI_Model
{
    function check($formArray)
    {
        $count = $this->db->where(['userName' => $formArray['name'], 'password' => $formArray['password']])->from('tbuser')->count_all_results();
        if ($count != 0) {
            return true;
        } else {
            return false;
        }
    }
}
