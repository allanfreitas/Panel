<?php
 
class Login extends Controller
{

    function index()
    {
        $data['main_content'] = 'login_form';
        $data['page_title'] = 'Control Panel | Login';
        $this->load->view('template', $data);
    }
}
