<?php
$crud = new CRUD;
$auth = new Auth;

$data = [];

if ($crud->method === 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $auth->login($post['userName'], $post['password']);
    header('Location: /' . $_ENV['DEFAULT_HOME_PAGE']);
} elseif ($crud->method === 'GET') {
    if ($auth->loggedIn) {
        if ($crud->get['logout']) {
            setcookie("auth", "", time() - 3600);
        }
        header('Location: /' . $_ENV['DEFAULT_HOME_PAGE']);
    } else {
        echo $twig->render('login.twig', $data);
    }
}
