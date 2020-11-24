<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TransferController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }


    public function page1()
    {
        $data['title']       = 'Transfer';
        $data['content']     = 'transfer/page1';
        $data['vitamin']     = 'transfer/page1_vitamin';
        $data['footer']      = 1;
        $data['footer_link'] = NULL;
        $this->template->template($data);
    }

    public function page2()
    {

        $data['title']         = 'Transfer';
        $data['content']       = 'transfer/page2';
        $data['vitamin']       = 'transfer/page2_vitamin';
        $data['footer']        = 2;
        $data['footer_link']   = 'transfer1';
        $this->template->template($data);
    }

    public function page3()
    {

        $data['title']         = 'Transfer';
        $data['content']       = 'transfer/page3';
        $data['vitamin']       = 'transfer/page3_vitamin';
        $data['footer']        = 1;
        $data['footer_link']   = NULL;

        $this->template->template($data);
    }
}
        
    /* End of file  TransferController.php */
