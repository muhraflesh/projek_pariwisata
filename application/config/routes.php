<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'login';

$route['(?i)Login/logedin'] = 'Login/logedin';
$route['(?i)Register/regis'] = 'Register/regis';
$route['(?i)Verification/verifikasi'] = 'Verification/verifikasi';

$route['(?i)Pengajuan/getAllData'] = 'Pengajuan/getAllData';
$route['(?i)Pengajuan/getProvinsi'] = 'Pengajuan/getProvinsi';
$route['(?i)Pengajuan/getKota'] = 'Pengajuan/getKota';
$route['(?i)Pengajuan/getKecamatan'] = 'Pengajuan/getKecamatan';
$route['(?i)Pengajuan/getKelurahan'] = 'Pengajuan/getKelurahan';
$route['(?i)Pengajuan/insertPengajuan'] = 'Pengajuan/insertPengajuan';
$route['(?i)Pengajuan/editPengajuan'] = 'Pengajuan/editPengajuan';
$route['(?i)Pengajuan/getDetail'] = 'Pengajuan/getDetail';
$route['(?i)Pengajuan/delete'] = 'Pengajuan/delete';

$route['(?i)Approved/getAllData'] = 'Approved/getAllData';
$route['(?i)Approved/editPengajuan'] = 'Approved/editPengajuan';
$route['(?i)Approved/getDetail'] = 'Approved/getDetail';

$route['(?i)Rejected/getAllData'] = 'Rejected/getAllData';
$route['(?i)Rejected/editPengajuan'] = 'Rejected/editPengajuan';
$route['(?i)Rejected/getDetail'] = 'Rejected/getDetail';

$route['(?i)Downloaddocument/getAllData'] = 'Downloaddocument/getAllData';
$route['(?i)Dashboard/getCharts'] = 'Dashboard/getCharts';

$route['(?i)Persetujuan/getAllData'] = 'Persetujuan/getAllData';
$route['(?i)Persetujuan/downloadDoc/(:any)'] = 'Persetujuan/downloadDoc/$1';
$route['(?i)Persetujuan/downloadDocSK/(:any)'] = 'Persetujuan/downloadDocSK/$1';
$route['(?i)Persetujuan/approveReject'] = 'Persetujuan/approveReject';
$route['(?i)Persetujuan/getDetail'] = 'Persetujuan/getDetail';

$route['(?i)Uploaddocument/getAllData'] = 'Uploaddocument/getAllData';
$route['(?i)Uploaddocument/downloadDoc/(:any)'] = 'Uploaddocument/downloadDoc/$1';
$route['(?i)Uploaddocument/insert'] = 'Uploaddocument/insert';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
