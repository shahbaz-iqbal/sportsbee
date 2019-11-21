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

$route['api/auth/login']['post']        = '/api/auth/login';
$route['api/auth/logout']['post']       = '/auth/logout';
$route['api/get_manufecturer']['get']   = '/api/orderApi/getManufecturer';
$route['api/get_model']['post']   		= '/api/orderApi/getModel';
$route['api/order']['post']   			= '/api/orderApi/addOrder';
$route['api/update_order']['post']   	= '/api/orderApi/updateOrder';
$route['api/order_history']['get']   	= '/api/orderApi/orderHistory';
$route['api/home_screen']['get']   		= '/api/orderApi/homeScreen';
$route['api/agent_statistics']['get']   = 'api/orderApi/agentStatistics';
// $route['api/dropdowns']['get']   		= 'api/orderApi/getDropdowns';



$route['default_controller'] = 'web/web';

$route['login'] 	= 'admin/dashboard/login';
$route['do_login'] 	= 'admin/dashboard/doLogin';
$route['logout'] 	= 'admin/dashboard/logout';


$route['emailcheck'] 	= 'admin/dashboard/emailCheck';
$route['add_tax'] 		= 'admin/service/addTax';

$route['agent/add'] 	= 'admin/dashboard/addNewAgent';
$route['agent/list'] 	= 'admin/dashboard/agentList';
$route['agent/track'] 	= 'admin/dashboard/agentTrack';

$route['driver/add'] 	= 'admin/dashboard/addNewDriver';
$route['driver/list'] 	= 'admin/dashboard/driverList';
$route['driver/track'] 	= 'admin/dashboard/driverTrack';


$route['repaircenter/add'] 	= 'admin/dashboard/addNewRepairCenter';
$route['repaircenter/list'] = 'admin/dashboard/repairCenterList';

$route['do_add'] 		= 'admin/dashboard/doAdd';
$route['delete/(:any)'] = 'admin/dashboard/doDelete';


$route['orderlist'] 			= 'admin/service/orderList';


$route['assignedorder'] 	= 'admin/service/assignedOrder';

$route['assignorder'] 	= 'admin/service/assignOrder';
$route['select-driver'] 	= 'admin/service/selectDriver';
$route['select-driver-task/(:any)'] 	= 'admin/service/selectDriver';
$route['get_task_detail/(:any)'] 	= 'admin/service/getTaskDetail';
$route['delete_selected_order/(:any)'] 	= 'admin/service/deleteSelectedOrder';

$route['get_selected_order'] 	= 'admin/service/getSelectedOrder';
$route['assign_order_confirm'] 	= 'admin/service/assignOrderConfirm';

$route['genral_setting'] 	= 'admin/service/genralSetting';
$route['add_pricing'] 		= 'admin/service/addPricing';
$route['get_model'] 		= 'admin/service/getModel';
$route['pricing_list'] 		= 'admin/service/pricingList';
$route['get_issues'] 		= 'admin/service/getIssues';

$route['get_users'] 			= 'admin/service/getUsers';
$route['get_user/(:any)'] 		= 'admin/service/getUser';

$route['do_add_pricing'] 		= 'admin/service/doAddPricing';


$route['manufacturer/add'] 		= 'admin/service/addManufacturer';
$route['manufacturer/get/(:any)'] = 'admin/service/getManufecturer';
$route['model/add'] 			= 'admin/service/addModel';
$route['primary_test/add'] 		= 'admin/service/addPrimaryTest';
$route['sugestion'] 			= 'admin/service/sugestion';

// Repaircenter Routs


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

?>