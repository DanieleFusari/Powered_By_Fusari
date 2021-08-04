<?php
$crud = new CRUD;
$auth = new Auth;

if ($crud->method === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $auth->login($post['userName'], $post['password']);
} else {
    if (isset($_COOKIE['auth'])) {
        header('Location: /');
    } else {
        echo $twig->render('login.twig', []);
    }
}
