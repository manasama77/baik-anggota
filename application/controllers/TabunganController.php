<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TabunganController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }


    public function page1()
    {
        $data['title']       = 'Tabungan';
        $data['content']     = 'tabungan/page1';
        $data['vitamin']     = 'tabungan/page1_vitamin';
        $data['footer']      = 1;
        $data['footer_link'] = NULL;
        $this->template->template($data);
    }

    public function page2($nama_tabungan = NULL)
    {
        if (!in_array($nama_tabungan, [1, 2, 3, 4, 5])) {
            show_404();
            exit;
        }

        $data['title']         = 'Tabungan';
        $data['content']       = 'tabungan/page2';
        $data['vitamin']       = 'tabungan/page2_vitamin';
        $data['footer']        = 2;
        $data['footer_link']   = 'tabungan1';
        $data['nama_tabungan'] = $nama_tabungan;
        $this->template->template($data);
    }

    public function page3($nama_tabungan = NULL)
    {
        if (!in_array($nama_tabungan, [1, 2, 3, 4, 5])) {
            show_404();
            exit;
        }

        $data['title']         = 'Tabungan';
        $data['content']       = 'tabungan/page3';
        $data['vitamin']       = 'tabungan/page3_vitamin';
        $data['footer']        = 2;
        $data['footer_link']   = 'tabungan2/' . $nama_tabungan;
        $data['nama_tabungan'] = $nama_tabungan;

        $this->template->template($data);
    }

    public function page4()
    {
        $from          = $this->input->get('from');
        $to            = $this->input->get('to');
        $nama_tabungan = $this->input->get('nama_tabungan');

        if ($from == NULL && $to == NULL && $nama_tabungan == NULL) {
            show_404();
            exit;
        }

        $from_obj = new DateTime($this->input->get('from'));
        $to_obj   = new DateTime($this->input->get('to'));
        $cur_obj  = new DateTime();

        $from_obj->format('d-m-Y');
        $to_obj->format('d-m-Y');
        $interval = $to_obj->diff($from_obj);

        $data['title']         = 'Tabungan';
        $data['content']       = 'tabungan/page4';
        $data['vitamin']       = 'tabungan/page4_vitamin';
        $data['footer']        = 2;
        $data['footer_link']   = 'tabungan3/' . $nama_tabungan;
        $data['nama_tabungan'] = $nama_tabungan;

        $data['from']     = $from_obj;
        $data['to']       = $to_obj;
        $data['cur_date'] = $cur_obj;
        $data['interval'] = $interval->format('%a');

        $this->template->template($data);
    }
}
        
    /* End of file  TabunganController.php */
