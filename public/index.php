<?php

use \CLS\Autoloader;

require '../app/Autoloader.php';
Autoloader::register();

if (isset($_GET['p'])) {
    $p = $_GET['p'];
} else {
    $p = 'home';
}


ob_start();
if ($p === 'home'){
    require '../pages/home.php';
}
$content = ob_get_clean();
require '../pages/templates/default.php';