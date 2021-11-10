<?php

/* NOTE : This index is written dynamiccaly by the ECOMERZ MANAGER APPLICATION
 * 
 */

# ROUTES

// todo change entry prd field
//if (!@$_REQUEST['prd'] || !is_dir('base/'.@$_REQUEST['prd'] )) die;
@$prd_page = 'Smoothie_maker_portable'; //$_REQUEST['prd'];

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