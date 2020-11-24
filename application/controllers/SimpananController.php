<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SimpananController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }


    public function page1()
    {
        $data['title']       = 'Simpanan';
        $data['content']     = 'simpanan/page1';
        $data['vitamin']     = 'simpanan/page1_vitamin';
        $data['footer']      = 1;
        $data['footer_link'] = NULL;
        $this->template->template($data);
    }

    public function page2($nama_simpanan = NULL)
    {
        if (!in_array($nama_simpanan, [1, 2, 3])) {
            show_404();
            exit;
        }

        $data['title']         = 'Simpanan';
        $data['content']       = 'simpanan/page2';
        $data['vitamin']       = 'simpanan/page2_vitamin';
        $data['footer']        = 2;
        $data['footer_link']   = 'simpanan1';
        $data['nama_simpanan'] = $nama_simpanan;
        $this->template->template($data);
    }

    public function page3()
    {
        $from          = $this->input->get('from');
        $to            = $this->input->get('to');
        $nama_simpanan = $this->input->get('nama_simpanan');

        if ($from == NULL && $to == NULL && $nama_simpanan == NULL) {
            show_404();
            exit;
        }

        $from_obj = new DateTime($this->input->get('from'));
        $to_obj   = new DateTime($this->input->get('to'));
        $cur_obj  = new DateTime();

        $from_obj->format('d-m-Y');
        $to_obj->format('d-m-Y');
        $interval = $to_obj->diff($from_obj);

        $data['title']         = 'Simpanan';
        $data['content']       = 'simpanan/page3';
        $data['vitamin']       = 'simpanan/page3_vitamin';
        $data['footer']        = 2;
        $data['footer_link']   = 'simpanan2';
        $data['nama_simpanan'] = $nama_simpanan;

        $data['from']     = $from_obj;
        $data['to']       = $to_obj;
        $data['cur_date'] = $cur_obj;
        $data['interval'] = $interval->format('%a');

        $this->template->template($data);
    }
}
        
    /* End of file  SimpananController.php */
