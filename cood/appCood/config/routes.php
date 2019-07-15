<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//auth
$route['login'] = 'frontend/authentication/login';
$route['valid-login'] = 'frontend/authentication/valid_login';
$route['valid-login-admin'] = 'frontend/authentication/valid_login_admin';

//==================backend===================================
$route['cood-admin'] = 'frontend/authentication/cood_admin';
$route['cood-admin/dashboard'] = 'backend/dashboard/dashboard';


//--logout
$route['cood-admin/logout'] = 'backend/dashboard/logout';

