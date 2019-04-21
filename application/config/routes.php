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



$route['default_controller'] = 'login/index';



$route['404_override'] = 'E404';



$route['translate_uri_dashes'] = FALSE;







/* -- login -- */



$route['login'] = "login/index";



$route['login/phone'] = "login/Login_Phone";







/* empty phone filed*/



$route['phone'] = "signup/Empty_phone";



$route['phone/post'] = "signup/Empty_phone_entry";







/* -- signup -- */



$route['signup'] = "signup";



$route['signup/post'] = "signup/signup";



$route['signup/facebook'] = "signup/login_signup_facebook";

/*facebook*/

$route['facebook'] = "signup/facebook";







/*Car Model*/



$route['carmodelget'] = "CarModel/get";



$route['carmodelget/(:any)'] = "CarModel/get/$1";







/*Car Make*/



$route['carmakeget'] = "CarMake/get";







/*checking routs*/



$route['ajax/email'] = "ajax/email";



$route['ajax/phone'] = "ajax/phone";



$route['ajax/loginphone'] = "ajax/login_check_phone";



$route['ajax/otp'] = "ajax/is_otp_available";



$route['otp/send/(:any)'] = "ajax/send_otp/$1";

/*get cuntry code*/

$route['getcuntrycode/(:any)'] = "ajax/getcuntrycode/$1";











/*dashboard*/



$route['dashboard'] = "dashboard";







/*logout*/



$route['logout'] = "dashboard/logout";



/*opencharg api*/

$route['getlatlong/(:any)'] = "ajax/GetLatLong/$1";

/*station view*/
$route['station/add'] = "station/station_add";
// $route['station/edit/(:num)'] = "station/station_edit/$1";
$route['station/(:num)'] = "station/index/$1";

/*station add in db*/
$route['station/AddStation'] = "station/add_station";
$route['station/ImagesUpload'] = "station/UploadImages";

// Get station details
// $route['station/edit/(:id)'] = "station/GetStationDetails";
$route['station/edit_station'] = "station/edit_station";