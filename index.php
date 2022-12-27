<?php

/* NOTE : This index is written dynamicaly by the ECOMERZ MANAGER APPLICATION
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

// todo adapter la profondeur de route !!
// Parcourez les routes et vérifiez si l'URL courante correspond à l'une d'entre elles
/**foreach ($routes as $pattern => $view) {
  if (preg_match("#^" . $pattern . "$#", $currentUrl, $matches)) {
    // Si oui, incluez le fichier de vue associé à la route
    include __DIR__ . "/views/" . $view;
    // Arrêtez la boucle foreach
    break;
  }
} // Todo completion -> Ask chatGPT*/

if (isset($routes[$currentUrl['path']])) {
  require_once ($routes[$currentUrl['path']]);  die();
} else {
  if ( ! array_key_exists($currentUrl['path'], $prd_routes)) {
    http_response_code(404);
    echo "Page non trouvée"; die();
  }
}

// todo change entry prd field
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