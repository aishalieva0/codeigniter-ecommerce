<?php
defined('BASEPATH') or exit('No direct script access allowed');

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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['backend'] = 'backend/Dashboard/index';


$route['backend/admins'] = 'backend/Admins/index';
$route['backend/admins/create'] = 'backend/Admins/create';
$route['backend/admins/edit/(:num)'] = 'backend/Admins/edit/$1';

$route['backend/products'] = 'backend/Products/index';
$route['backend/products/create'] = 'backend/Products/create';
$route['backend/products/edit/(:num)'] = 'backend/Products/edit/$1';

$route['backend/brands'] = 'backend/Brands/index';
$route['backend/brands/create'] = 'backend/Brands/create';
$route['backend/brands/edit/(num:)'] = 'backend/Brands/edit/$1';

$route['backend/categories'] = 'backend/Categories/index';
$route['backend/categories/create'] = 'backend/Categories/create';
$route['backend/categories/edit/(num:)'] = 'backend/Categories/edit/$1';

$route['backend/images'] = 'backend/Images/index';
$route['backend/images/create'] = 'backend/Images/create';
$route['backend/images/edit/(num:)'] = 'backend/Images/edit/$1';

$route['backend/product_images'] = 'backend/Product_images/index';
$route['backend/product_images/create'] = 'backend/Product_images/create';
$route['backend/product_images/edit/(num:)'] = 'backend/Product_images/edit/$1';//-

$route['backend/product_categories'] = 'backend/Product_categories/index';
$route['backend/product_categories/create'] = 'backend/Product_categories/create';
$route['backend/product_categories/edit/(num:)'] = 'backend/Product_categories/edit/$1';//-

$route['backend/payment'] = 'backend/Payment/index';
$route['backend/payment/create'] = 'backend/Payment/create';
$route['backend/payment/edit/(num:)'] = 'backend/Payment/edit/$1';

$route['backend/delivery_methods'] = 'backend/Delivery_methods/index';
$route['backend/delivery_methods/create'] = 'backend/Delivery_methods/create';
$route['backend/delivery_methods/edit/(num:)'] = 'backend/Delivery_methods/edit/$1';

$route['backend/orders'] = 'backend/Orders/index';
$route['backend/orders/create'] = 'backend/Orders/create';
$route['backend/orders/edit/(num:)'] = 'backend/Orders/edit/$1';//

$route['backend/order_status'] = 'backend/Order_status/index';
$route['backend/order_status/create'] = 'backend/Order_status/create';
$route['backend/order_status/edit/(num:)'] = 'backend/Order_status/edit/$1';

$route['backend/order_products'] = 'backend/Order_products/index';
$route['backend/order_products/create'] = 'backend/Order_products/create';
$route['backend/order_products/edit/(num:)'] = 'backend/Order_products/edit/$1';

$route['backend/settings'] = 'backend/Settings/index';
$route['backend/settings/create'] = 'backend/Settings/create';
$route['backend/settings/edit/(num:)'] = 'backend/Settings/edit/$1';

$route['backend/blogs'] = 'backend/Blogs/index';
$route['backend/blogs/create'] = 'backend/Blogs/create';
$route['backend/blogs/edit/(num:)'] = 'backend/Blogs/edit/$1';

$route['backend/pages'] = 'backend/Pages/index';
$route['backend/pages/create'] = 'backend/Pages/create';
$route['backend/pages/edit/(num:)'] = 'backend/Pages/edit/$1';
