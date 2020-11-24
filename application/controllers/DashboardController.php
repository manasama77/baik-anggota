<?php

defined('BASEPATH') or exit('No direct script access allowed');

class DashboardController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }


    public function index()
    {
        $data['title']   = 'Dashboard';
        $data['content'] = 'dashboard/main';
        $data['vitamin'] = 'dashboard/main_vitamin';
        $data['footer']  = 1;
        $this->template->template($data);
    }

    public function edit_info()
    {
        $data['title']   = 'Edit Info';
        $data['content'] = 'edit_info/main';
        $data['vitamin'] = 'edit_info/main_vitamin';
        $data['footer']  = 1;
        $this->template->template($data);
    }
}
        
    /* End of file  DashboardController.php */
