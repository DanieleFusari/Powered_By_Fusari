<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();
require_once __DIR__ . '/../operations/database.php';


$dataBaseName = $_ENV['DATABASE_NAME'];

/**************************************
Before Running go to $table and update what coloums you need first. You can add as many tables as you like to this array $tables below.
**************************************/

$tables = [ "CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  uni_id VARCHAR(12) UNIQUE,
  firstname TEXT NOT NULL,
  lastname TEXT NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE,
  mobile VARCHAR(20),
  password VARCHAR(225) NOT NULL,
  -- due_date DATE,
  -- items INT,
  -- paid DECIMAL(5,2) NOT NULL,
  reg_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  reg_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)"
];

/**************************************
 Commands to run, to cerate the database
 Update the server username and password in the .env file first
**************************************/
$DBClass = new DataBase();
/**************************************
Run the below with Atom console cmd+i
**************************************/
$DB = $DBClass->createDatabase($dataBaseName);

foreach ($tables as $table) {
    $DBClass->createTable($table, $DB);
}

/**************************************
 Extra Commands to Edit  database
**************************************/
// $DB->exec("DROP TABLE students");
// $DB->exec("DELETE FROM students");


/**************************************
 GO TO Faker to create the data.
**************************************/
