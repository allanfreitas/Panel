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

    public function create_member()
    {
        $new_memeber_data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email_address'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password'))
        );

        $insert = $this->db->insert('users', $new_memeber_data);
        return $insert;
    }
}
