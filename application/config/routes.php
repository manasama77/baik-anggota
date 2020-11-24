<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller']   = 'LoginController';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;

$route['set_session/(:num)/(:any)/(:any)/(:any)'] = 'LoginController/set_session/$1/$2/$3/$4';
$route['get_data_anggota'] = 'LoginController/get_data_anggota';
$route['logout'] = 'LoginController/logout';

$route['dashboard'] = 'DashboardController';
$route['edit_info'] = 'DashboardController/edit_info';

$route['simpanan1']        = 'SimpananController/page1';
$route['simpanan2/(:any)'] = 'SimpananController/page2/$1';
$route['simpanan3']        = 'SimpananController/page3';

$route['pembiayaan1']        = 'PembiayaanController/page1';
$route['pembiayaan2/(:any)'] = 'PembiayaanController/page2/$1';
$route['pembiayaan3/(:num)'] = 'PembiayaanController/page3/$1';

$route['tabungan1']        = 'TabunganController/page1';
$route['tabungan2/(:any)'] = 'TabunganController/page2/$1';
$route['tabungan3/(:num)'] = 'TabunganController/page3/$1';
$route['tabungan4']        = 'TabunganController/page4';

$route['transfer1'] = 'TransferController/page1';
$route['transfer2'] = 'TransferController/page2';
$route['transfer3'] = 'TransferController/page3';
