<?php
$crud = new CRUD;
$auth = new Auth;


$auth->lockPage();



// $DB = $ops->dataBase();
//
// $results   = $DB->query('select * From students');
// $results = $results->fetchAll(PDO::FETCH_ASSOC);
//
// $vals = [
//   'db' => $results,
//   'query' => $ops->queryString
// ];
//
// echo $twig->render('test.twig', $crud->get);
//
// echo $crud->method;

// echo "<a href='/'> HOME</a>";
// echo "</br>";
// echo "</br>";
// echo "</br>";
// var_dump($auth->loggedIn);
// echo "</br>";
// echo "</br>";
// echo $auth->userName;
// echo "</br>";
// echo "</br>";
// echo $auth->level;
// echo "</br>";
// echo "</br>";
// var_dump($crud->get);
// var_dump($crud->get['logout']);

//
// $crud->setMessage('hello', 20);
// echo $crud->getMessage();
// $crud->delcookie();
// var_dump($_SERVER['REMOTE_ADDR']);
// die();

// $allowedIps = ['198.x.x.x', '::12'];
// $userIp = $_SERVER['REMOTE_ADDR'];
//
// if (!in_array($userIp, $allowedIps)) {
//     exit('Unauthorized');
// } else {
//     echo "hi ya";
// }

// $lastUri = $_SERVER['REQUEST_URI'];
// var_dump($_SERVER['REQUEST_URI']);
// // exit();
// $pathUri = '/Users/danielefusari/Desktop/Projects/Powered_By_Fusari/controllers' . $lastUri . '.php';
//
// foreach (glob(__DIR__ . '/*') as $con) {
//     if ($con === $pathUri) {
//         echo "working";
//     } else {
//         echo "not working ";
//     }
// }

// echo $twig->render('/test.twig', []);
