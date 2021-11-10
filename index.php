<?php

/* TODO - !! It is cool to lop, I have the flow
 *
 * The application must have an entry point.
 *
 * Must have : a CMS to handle article products, with data and variations
 * for the products from all plateforms, facilitateur de vente
 *
 */

# ROUTES

if (!@$_REQUEST['prd'] || !is_dir('base/'.@$_REQUEST['prd'] )) die;

@$prd_page = $_REQUEST['prd'];

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