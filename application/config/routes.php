<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//Default routes
$route['default_controller'] = "welcome";
$route['404_override'] = '';

//Admin routes
$route['admin'] = "Admin/Admin";
$route['admin/options'] = "Admin/Admin/options";

//Moderation routes
$route['mod'] = "Moderation/Moderation";
$route['mod/players'] = "Moderation/Moderation/viewPlayers";
$route['mod/reports'] = "Moderation/Moderation/viewReports";
$route['mod/logs'] = "Moderation/Moderation/viewLogs";

//Player routes
$route['players'] = "Players/Players";
$route['players/(:any).(:num)'] = "Players/Players/viewPlayer/$2";
$route['player/(:any).(:num)'] = "Players/Players/viewPlayer/$2";

//Wiki routes
$route['wiki'] = "Wiki/Wiki/index";
$route['wiki/(:any)'] = "Wiki/Wiki/wiki/$1";

//Standard games Routes
$route['games'] = "Games/Games/index";
$route['games/(:any)'] = "Games/Game/index/$1";

//Direct games routes
$route['kingdoms'] = "Games/Game/index/kingdoms";
$route['cz'] = "Games/Game/index/cz";

/* End of file routes.php */
/* Location: ./application/config/routes.php */
