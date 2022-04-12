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


$route['(?i)login/logedin'] = 'login/logedin';
$route['(?i)register/regis'] = 'register/regis';
$route['(?i)verification/verifikasi'] = 'verification/verifikasi';

$route['(?i)pengajuan/getAllData'] = 'pengajuan/getAllData';
$route['(?i)pengajuan/getProvinsi'] = 'pengajuan/getProvinsi';
$route['(?i)pengajuan/getKota'] = 'pengajuan/getKota';
$route['(?i)pengajuan/getKecamatan'] = 'pengajuan/getKecamatan';
$route['(?i)pengajuan/getKelurahan'] = 'pengajuan/getKelurahan';
$route['(?i)pengajuan/insertPengajuan'] = 'pengajuan/insertPengajuan';
$route['(?i)pengajuan/editPengajuan'] = 'pengajuan/editPengajuan';
$route['(?i)pengajuan/getDetail'] = 'pengajuan/getDetail';
$route['(?i)pengajuan/delete'] = 'pengajuan/delete';

$route['(?i)approved/getAllData'] = 'approved/getAllData';
$route['(?i)approved/editPengajuan'] = 'approved/editPengajuan';
$route['(?i)approved/getDetail'] = 'approved/getDetail';

$route['(?i)rejected/getAllData'] = 'rejected/getAllData';
$route['(?i)rejected/editPengajuan'] = 'rejected/editPengajuan';
$route['(?i)rejected/getDetail'] = 'rejected/getDetail';

$route['(?i)downloaddocument/getAllData'] = 'downloaddocument/getAllData';
$route['(?i)dashboard/getCharts'] = 'dashboard/getCharts';

$route['(?i)persetujuan/getAllData'] = 'persetujuan/getAllData';
$route['(?i)persetujuan/downloadDoc/(:any)'] = 'persetujuan/downloadDoc/$1';
$route['(?i)persetujuan/downloadDocSK/(:any)'] = 'persetujuan/downloadDocSK/$1';
$route['(?i)persetujuan/approveReject'] = 'persetujuan/approveReject';
$route['(?i)persetujuan/getDetail'] = 'persetujuan/getDetail';

$route['(?i)uploaddocument/getAllData'] = 'uploaddocument/getAllData';
$route['(?i)uploaddocument/downloadDoc/(:any)'] = 'uploaddocument/downloadDoc/$1';
$route['(?i)uploaddocument/insert'] = 'uploaddocument/insert';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
