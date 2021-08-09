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


/*  ************************************************************
Twig template engine https://twig.symfony.com/
************************************************************* */
$loader = new \Twig\Loader\FilesystemLoader([__DIR__ . '/../public', __DIR__ . '/../public/templates']);

/*  ***********************************************************
  To see what the loaders do visit
  https://twig.symfony.com/doc/3.x/api.html
************************************************************ */
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/../public/compilation_cache',
    'dedug' => false,
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => 'name',
    'optimizations' => -1,

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
************************************************************** */

$controllerName = ltrim($_SERVER['REDIRECT_URL'] . '.php', '/');
$controllers = scandir(__DIR__ .  '/../controllers');
if ($controllerName === '.php') {
    $controllerName = $_ENV['DEFAULT_HOME_PAGE'] . '.php';
}

if (in_array($controllerName, $controllers)) {
    require __DIR__ . '/../controllers/' . $controllerName;
    $p404 = true;
} else {
    require __DIR__ . '/../controllers/404.php';
}
