<?php
$ops = new operations();

$DB = $ops->dataBase();

$results   = $DB->query('select * From students');
$results = $results->fetchAll(PDO::FETCH_ASSOC);

$vals = [
  'db' => $results,
  'query' => $ops->queryString
];

echo $twig->render('test.twig', $vals);
