<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//==================backend===================================
$route['cood-admin'] = 'frontend/authentication/cood_admin';
$route['cood-admin/dashboard'] = 'backend/dashboard/dashboard';

