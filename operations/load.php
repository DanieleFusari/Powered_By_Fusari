<?php
/****************************************************************************
Add this to each page where you need the below files.
Change the path to load all the operations.
require_once __DIR__ . '/../operations/load.php';
****************************************************************************/
/****************************************************************************
// Vendor Composer installation of Packages.
**************************************/
require_once __DIR__ . '/../vendor/autoload.php';
// Pacagnges to load from vedor


// Vlucas Dotenv  https://packagist.org/packages/vlucas/phpdotenv
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// Twig template engine https://twig.symfony.com/
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../public');
$twig = new \Twig\Environment($loader, [
    'cache' => __DIR__ . '/../public/cache/compilation_cache',
]);

/****************************************************************************
 Load all Classes in the Operations folder.
***************************************************************************/
foreach (glob(__DIR__ . '/*') as $ops) {
    if (!str_ends_with($ops, 'load.php')) {
        require $ops;
    }
}
