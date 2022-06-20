<?php
/* ****************************************************************
// Vendor Composer installation of Packages.
**************************************************************/
require_once __DIR__ . '/../vendor/autoload.php';

/* *************************************************************
Vlucas Dotenv  https://packagist.org/packages/vlucas/phpdotenv
************************************************************* */
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


/* ****************************************************************
Turn off all error reporting error_reporting(0). Pull from env 
**************************************************************/
error_reporting($_ENV['error_reporting']);
ini_set('display_errors', $_ENV['ini_set']);
ini_set('html_errors', $_ENV['ini_set']);


/* ****************************************************************
// HTTP Headers Security
**************************************************************/
//  The use of X-Frame-Options or a frame-breaking script is a more fail-safe method of clickjacking protection
header('X-Frame-Options: DENY');
// X-XSS-Protection - Preventing Cross-Site Scripting Attacks
header("X-XSS-Protection: 1; mode=block");


/*  ************************************************************
Twig template engine https://twig.symfony.com/
To see what the loaders do visit  https://twig.symfony.com/doc/3.x/api.html
************************************************************* */
$loader = new \Twig\Loader\FilesystemLoader([__DIR__ . '/../public', __DIR__ . '/../public/templates']);

$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/../public/compilation_cache',
    'dedug' => $_ENV['twig'],
    'auto_reload' => $_ENV['twig'],
    'strict_variables' => FALSE,
    'autoescape' => 'name',
    'optimizations' => $_ENV['optimizations']
]);


/*  ***********************************************************
 Load all Classes in the Operations folder.
***************************************************************/
foreach (glob(__DIR__ . '/*') as $ops) {
    if (!str_ends_with($ops, 'load.php')) {
        require $ops;
    }
}

/*  ***********************************************************
 Load the corerct controller to the to match the webpage.
If the web page is / home page then this will correct to default
home page e.g home.php $_ENV['DEFAULT_HOME_PAGE']
************************************************************** */


if (isset($_SERVER['REDIRECT_URL'])) {
    $url =  $_SERVER['REDIRECT_URL'];
} else {
    $url = null;
}

$pageName = ltrim($url . '.php', '/');
$controllers = scandir(__DIR__ .  '/../controllers');

if ($pageName === '.php') {
    $pageName = $_ENV['DEFAULT_HOME_PAGE'] . '.php';
}

$public = scandir(__DIR__ .  '/../public');
$twigpage = ltrim($url, '/') . '.twig';

if ($twigpage == '.twig') {
    $twigpage = $_ENV['DEFAULT_HOME_PAGE'] . '.twig';
}

if (in_array($pageName, $controllers)) {
    require __DIR__ . '/../controllers/' . $pageName;
} elseif (in_array($twigpage, $public)) {
    echo $twig->render($twigpage, []);
} else {
    header("Location: /");
    exit();
}
