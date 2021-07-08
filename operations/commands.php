<?php
namespace App\commands;

$fullUri = parse_url($_SERVER['REQUEST_URI']);
$pathUri = $fullUri['path'];
$trimPath = strstr($pathUri, '.', true);

function controller($controller)
{
    require_once __DIR__ . '/../controllers/'. $controller . '.php';
    exit();
}

function select($url)
{
    $fullUri = parse_url($_SERVER['REQUEST_URI']);
    $pathUri = $fullUri['path'];
    if ($url == $pathUri) {
        echo 'active';
    }
}
