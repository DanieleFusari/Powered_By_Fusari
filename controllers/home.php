<?php
$auth = new auth;


$data = [
  'loggedIn' => $auth->loggedIn,
  'JWT' => (array) $auth->JWT
];
echo $twig->render('/home.twig', $data);
