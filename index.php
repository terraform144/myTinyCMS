<?php

/* NOTE : This index is written dynamicaly by the ECOMERZ MANAGER APPLICATION
 * 
 * author : zululad - github.com/terraform144
 */

require "vendor/autoload.php";

# ROUTES
$routes = [
  "/" => "index.php",
  "/about" => "about.php",
  "/contact" => "contact.php",
  "/myTinyCMS/" => "Smoothie_maker_portable"
];

$currentUrl = $_SERVER["REQUEST_URI"];

if (!isset($routes[$currentUrl])) {
  http_response_code(404);
  echo "Page non trouvée";
}

// todo change entry prd field
##region ENTRY OF PRODUCT
@$prd_page = $routes[$currentUrl]; //'Smoothie_maker_portable'; //$_REQUEST['prd'];
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