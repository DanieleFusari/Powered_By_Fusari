<?php
require_once __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

/**************************************
 Commands to cerate the database
 Update the server username and password in the .env first, then update the $tables below at the bottom.
Move right to the bottom to RUN the commannds.
**************************************/

$servername = $_ENV['DATABASE_SERVERNAME'];
$username = $_ENV['DATABASE_USER'];
$password = $_ENV['DATABASE_PASSWORD'];


function createDatabase($dbname)
{
    global $servername;
    global $username;
    global $password;
    $dbname = $dbname ?? $_ENV['DATABASE_NAME'];
    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE DATABASE $dbname";
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "Database " . $dbname . " created successfully... \n <br>";
    } catch (PDOException $e) {
        echo "Create DataBase failed: " . $e->getMessage();
        die();
    }
}

function connectTo($dbname)
{
    global $servername;
    global $username;
    global $password;
    $dbname = $dbname ?? $_ENV['DATABASE_NAME'];
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully to " . $dbname . "...\n <br>";
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die();
    }
}

function createTable($sql, $DB)
{
    try {
        $DB->exec($sql);
        echo "Created Table... \n <br>";
    } catch (\Exception $e) {
        echo "Creating Table(s) failed: " . $e->getMessage();
    }
}

/* **************************************************************************
Before Running go to $table and update what coloums you need first. You can add as many tables as you like to this array $tables below.
Update what coloums you need. If not here look at   https://www.mysqltutorial.org/mysql-data-types.aspx
************************************************************************** */

$tables = [ "CREATE TABLE students (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id VARCHAR(12) UNIQUE,
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
)",
"CREATE TABLE orders (
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


/* *************************************
Commands to  create the  database
Run the below with Atom console cmd+i
************************************* */

// createDatabase(null);

$DB = connectTo(null);

foreach ($tables as $table) {
    createTable($table, $DB);
}

// $DB->exec("DROP TABLE students");
// $DB->exec("DELETE FROM students");


/**************************************
 GO TO Faker to create the data.
**************************************/
