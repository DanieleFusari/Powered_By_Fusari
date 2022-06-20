<?php
$method = new Method;
$auth = new Auth;
$DB = new DataBase;

$data = [];

$data['message'] = $_COOKIE['message'] ?? '';

if ($method->method == 'POST') {
    $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    $auth->login($post['userName'], $post['password']);
    header('Location: /add');
    exit;
} elseif ($method->method === 'GET') {
    // Logout out. Wipe Cookie
    if ($auth->loggedIn) {
        setcookie("auth", "", time() - 3600);
        header('Location: /');
        exit();
    } else {
        echo $twig->render('login.twig', $data);
    }
}
