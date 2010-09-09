<?php

class Site extends Controller
{

    public function __construct()
    {
        parent::Controller();
        $this->is_logged_in();
    }
    
    public function home()
    {
        $data['main_content'] = 'home';
        $data['page_title'] = 'Panel | Home';
        $this->load->view('template', $data);
    }

    public function is_logged_in()
    {
        $is_logged_in = $this->session->userdata('is_logged_in');

        if(!isset($is_logged_in) || $is_logged_in != true)
        {
            echo "You don't have access to this page";
            die();
        }
    }
}
