<?php
 
class Login extends Controller
{
    public function __construct()
    {
        parent::Controller();
    }

    public function index()
    {
        $data['main_content'] = 'login_form';
        $data['page_title'] = 'Control Panel | Login';
        $this->load->view('template', $data);
    }

    public function validate()
    {
        if($this->_validate() === FALSE) {
            $this->index();
            return;
        }
        redirect("site/home");
    }

    private function _validate()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required|callback_authenticate');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_message('authenticate', 'Invalid Login, Please try again');
        return $this->form_validation->run();
    }

    public function authenticate()
    {
        $this->load->model('auth_model');
        $query = $this->auth_model->validate($this->input->post('username'),
            $this->input->post('password'));        

        if($query)
        {
            $data = array(
                'username' => $this->input->post('username'),
                'is_logged_in' => true
            );            
            $this->session->set_userdata($data);
            return true;
        }
        else
        {
            return false;
        }

    }

}
