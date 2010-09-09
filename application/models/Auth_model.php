<?php
class Auth_model extends Model
{
    public function validate($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('users');

        if($query->num_rows() == 1) {
            return true;
        }
    }
}
