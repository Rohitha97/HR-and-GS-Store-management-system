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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'EmployeeController/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Employee routes
$route['employee'] = 'EmployeeController/index';
$route['employee/store'] = 'EmployeeController/store';
$route['employee/delete/(:num)'] = 'EmployeeController/delete/$1';

// Safteyshoes routes
$route['safetyshoes'] = 'SafteyshoesController/safetyshoes';
$route['safetyshoes/add'] = 'SafteyshoesController/add';
$route['safetyshoes/store'] = 'SafteyshoesController/store';
$route['safetyshoes/edit/(:num)'] = 'SafteyshoesController/edit/$1';
$route['safetyshoes/update/(:num)'] = 'SafteyshoesController/update/$1';
$route['safetyshoes/tableupdate/(:num)'] = 'SafteyshoesController/tableUpdate/$1';
$route['safetyshoes/delete/(:num)'] = 'SafteyshoesController/delete/$1';
$route['safetyshoes/email'] = 'SafteyshoesController/email';

// T-shirts routes
$route['tshirt'] = 'TshirtController/tshirt';
$route['tshirt/add'] = 'TshirtController/add';
$route['tshirt/store'] = 'TshirtController/store';
$route['tshirt/edit/(:num)'] = 'TshirtController/edit/$1';
$route['tshirt/update/(:num)'] = 'TshirtController/update/$1';
$route['tshirt/tableupdate/(:num)'] = 'TshirtController/tableUpdate/$1';
$route['tshirt/delete/(:num)'] = 'TshirtController/delete/$1';
$route['tshirt/email'] = 'TshirtController/email';

// trouser routes
$route['trouser'] = 'TrouserController/trouser';
$route['trouser/add'] = 'TrouserController/add';
$route['trouser/store'] = 'TrouserController/store';
$route['trouser/edit/(:num)'] = 'TrouserController/edit/$1';
$route['trouser/update/(:num)'] = 'TrouserController/update/$1';
$route['trouser/tableupdate/(:num)'] = 'TrouserController/tableUpdate/$1';
$route['trouser/delete/(:num)'] = 'TrouserController/delete/$1';
$route['trouser/email'] = 'TrouserController/email';

// overall routes
$route['overall'] = 'OverallController/overall';
$route['overall/add'] = 'OverallController/add';
$route['overall/store'] = 'OverallController/store';
$route['overall/edit/(:num)'] = 'OverallController/edit/$1';
$route['overall/update/(:num)'] = 'OverallController/update/$1';
$route['overall/tableupdate/(:num)'] = 'OverallController/tableUpdate/$1';
$route['overall/delete/(:num)'] = 'OverallController/delete/$1';
$route['overall/email'] = 'OverallController/email';
$route['overall/email'] = 'OverallController/email';


