<?php
    class User_model extends CI_model
    {
        function addUser($formArray)
        {
            $this->db->where('userName', $formArray['userName']);
            $q = $this->db->get('tbuser');
            if (!$q) {
                return false;
            } else {
                $this->db->insert('tbuser', $formArray);
                return true;
            }
        }
        function getUsers()
        {
            return $this->db->get('tbuser')->result_array();
        }
        function editUser($userId)
        {
            $this->db->where('id', $userId);
            return $this->db->get('tbuser')->row_array();
        }
        function updateUser($userId, $formArray)
        {
            $this->db->where('id', $userId);
            $this->db->update('tbuser', $formArray);
        }
        function delete($userId)
        {
            $this->db->where('id', $userId);
            $this->db->delete('tbuser');
        }
    }
?>