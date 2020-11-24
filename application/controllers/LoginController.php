<?php

defined('BASEPATH') or exit('No direct script access allowed');

class LoginController extends CI_Controller
{

    public function index()
    {
        $this->load->view('login');
        $this->load->view('login_vitamin');
    }

    public function set_session($cif_no = NULL, $nama = NULL, $panggilan = NULL, $majelis = NULL)
    {
        if ($cif_no == NULL || $cif_no == "") {
            show_error("Proses Sesi Login Gagal", 503, "An Error Was Encountered");
            exit;
        }

        if ($nama == NULL || $nama == "") {
            show_error("Proses Sesi Login Gagal", 503, "An Error Was Encountered");
            exit;
        }

        if ($majelis == NULL || $majelis == "") {
            show_error("Proses Sesi Login Gagal", 503, "An Error Was Encountered");
            exit;
        }

        $array = array(
            'cif_no'    => $cif_no,
            'nama'      => urldecode($nama),
            'panggilan' => urldecode($panggilan),
            'majelis'   => urldecode($majelis),
        );

        $this->session->set_userdata($array);
        $this->session->set_flashdata('first_login', true);

        redirect('dashboard');
    }

    public function logout()
    {
        $unset = [
            'cif_no',
            'nama',
            'panggilan',
            'majelis',
        ];
        $this->session->unset_userdata($unset);
        redirect('/', 'refresh');
    }

    public function get_data_anggota()
    {
        $url = 'http://app.baytulikhtiar.com/index.php/webservices/get_data_anggota';

        $cif_no = trim($this->input->get('cif_no', TRUE));

        //url-ify the data for the POST
        $field_string = http_build_query(['cif_no' => $cif_no]);

        //open connection
        $ch = curl_init();

        //set the url, number of POST vars, POST data
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($field_string));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $field_string);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        //execute post
        $content = curl_exec($ch);
        //close connection
        curl_close($ch);
        $ret = json_decode($content);

        $data['code']      = 200;
        $data['nama']      = $ret->get_data_anggota[0]->nama;
        $data['panggilan'] = $ret->get_data_anggota[0]->panggilan;
        $data['cif_no']    = $cif_no;
        $data['majelis']   = $ret->get_data_anggota[0]->majlis;
        echo json_encode($data);
        exit;
    }
}
        
    /* End of file  LoginController.php */
