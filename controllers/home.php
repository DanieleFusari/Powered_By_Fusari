<?php
$auth = new auth;


echo $twig->render('/home.twig', (array) $auth->JWT);
