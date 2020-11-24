<?php

defined('BASEPATH') or exit('No direct script access allowed');

class PembiayaanController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('template');
    }


    public function page1()
    {
        $data['title']       = 'Pembiayaan';
        $data['content']     = 'pembiayaan/page1';
        $data['vitamin']     = 'pembiayaan/page1_vitamin';
        $data['footer']      = 1;
        $data['footer_link'] = NULL;
        $this->template->template($data);
    }

    public function page2($nama_pembiayaan = NULL)
    {
        if (!in_array($nama_pembiayaan, [1, 2, 3, 4, 5])) {
            show_404();
            exit;
        }

        $data['title']           = 'Pembiayaan';
        $data['content']         = 'pembiayaan/page2';
        $data['vitamin']         = 'pembiayaan/page2_vitamin';
        $data['footer']          = 2;
        $data['footer_link']     = 'pembiayaan1';
        $data['nama_pembiayaan'] = $nama_pembiayaan;
        $this->template->template($data);
    }

    public function page3($nama_pembiayaan = NULL)
    {
        if (!in_array($nama_pembiayaan, [1, 2, 3, 4, 5])) {
            show_404();
            exit;
        }

        $data['title']           = 'Pembiayaan';
        $data['content']         = 'pembiayaan/page3';
        $data['vitamin']         = 'pembiayaan/page3_vitamin';
        $data['footer']          = 2;
        $data['footer_link']     = 'pembiayaan2/' . $nama_pembiayaan;
        $data['nama_pembiayaan'] = $nama_pembiayaan;

        $this->template->template($data);
    }
}
        
    /* End of file  PembiayaanController.php */
