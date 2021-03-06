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

$route['default_controller'] = "index";
$route['admin'] = "admin/login";
$route['404_override'] = '';

$route['center'] = "centerbrief";
$route['notices'] = "listview/view/3";
$route['academics'] = "listview/view/4";
$route['metric'] = 'listview/view/2';
$route['member'] = "member/home";

$route['list/page/(:num)/(:num)'] = "listview/page/$1/$2";
$route['a_detail/(:num)'] = "show/detail/$1";
$route['a_list/(:num)'] = "listview/view/$1";
$route['v_detail/(:num)'] = "member/votes/detail_page/$1";
$route['v_add'] = "member/votes/add_page";
$route['v_vote'] = "member/votes/vote_page";
$route['v_comment/(:num)'] = 'member/votes/comment_page/$1';
$route['v_comment_add'] = 'member/votes/comment';


/* End of file routes.php */
/* Location: ./application/config/routes.php */
