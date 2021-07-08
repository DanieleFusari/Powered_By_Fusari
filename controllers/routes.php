<?php
namespace App\commands;

require_once __DIR__ . '/../operations/load.php';

match($pathUri){
  // '/' => controller(),
  default => controller('404')
};
