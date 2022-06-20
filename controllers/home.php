<?php

$auth = new Auth;
$DB = new DataBase;

// $auth->ipcheck();
// $auth->lockPage();

$data = [
  'loggedIn' => $auth->loggedIn,
  'userName' => $auth->userName,
  'JWT' => (array) $auth->JWT
];

echo $twig->render('home.twig', $data);
