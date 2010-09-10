<?php
 
class Signup extends Controller
{
    public function __construct()
    {
        parent::Controller();
    }

    public function index()
    {
        $data['main_content'] = 'signup_form';
        $data['page_title'] = 'Panel | Signup';
        $this->load->view('template', $data);
    }

    public function submit()
    {
        if($this->_submit() === FALSE) {
            $this->index();
            return;
        }
        else {
            $this->load->model('auth_model');
            $query = $this->auth_model->create_member();
            if($query) {
                $data['main_content'] = 'signup_successful';
                $data['page_title'] = 'Panel | Signup Successful';
                $this->load->view('template', $data);
            }
        }

    }

    private function _submit()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'trim|required|valid_email|unique[users.email]');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|unique[users.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        return $this->form_validation->run();
    }

    
}
