<?php

/* NOTE : This index should be written dynamicaly by the ECOMERZ MANAGER APPLICATION
 * 
 * author : zululad - github.com/terraform144
 */

require "vendor/autoload.php";

# ROUTES
$routes = [
  "/" => "home.php",
  "/about" => "about.php",
  "/contact" => "contact.php"
];
$prd_routes = [
  "/smoothie-maker" => "Smoothie_maker_portable"
];

$currentUrl = parse_url($_SERVER["REQUEST_URI"]);

if (isset($routes[$currentUrl['path']])) {
  require_once ($routes[$currentUrl['path']]);  die();
} else {
  if ( ! array_key_exists($currentUrl['path'], $prd_routes)) {
//http_response_code(404);
    header('Location:http://terraform144.eu');
  }
}

##region ENTRY OF PRODUCT
@$prd_page = $prd_routes[$currentUrl['path']]; //'Smoothie_maker_portable'; //$_REQUEST['prd'];
##endregion ENTRY OF PRODUCT

# INC /** Here comes all the inclusions */
require_once 'mts/core/MyTinyShop.php';
require_once 'mts/templates/Debut.php';

use mts\core\MyTinyShop as mts;

# CORE
$themeName = "base\\{$prd_page}\\th{$prd_page}";
require_once "base/{$prd_page}/th{$prd_page}.php";

$_theme = new $themeName();
$_mts = new mts($_theme);

# RENDER
$_mts->render();