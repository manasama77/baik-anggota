<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		// $this->ci->load->model('M_core', 'mcore');
	}

	public function template($data)
	{
		$cek_session = $this->_cek_session();

		if ($cek_session === FALSE) {
			redirect('logout');
		}

		if (file_exists(APPPATH . 'views/' . $data['content'] . EXT)) {
			$this->ci->load->view('template', $data);
		} else {
			show_404();
		}
	}

	public function _cek_session()
	{
		if (!$this->ci->session->userdata('cif_no') && !$this->ci->session->userdata('nama')) {
			return FALSE;
		} else {
			return TRUE;
		}
	}
}

/* End of file Template.php */
/* Location: ./application/libraries/Template.php */
