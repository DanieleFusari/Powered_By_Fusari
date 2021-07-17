<?php
// require_once __DIR__ . '/load.php';
/**************************************
Calls for DataBase creation
 https://www.w3schools.com/php/php_mysql_intro.asp
**************************************/
class DataBase
{
    private $servername;
    private $username;
    private $password;

    public function __construct($servername = null, $username = null, $password = null)
    {
        $this->servername = $servername ?? $_ENV['DATABASE_SERVERNAME'];
        $this->username = $username ?? $_ENV['DATABASE_USER'];
        $this->password = $password ?? $_ENV['DATABASE_PASSWORD'];
    }

    public function createDatabase($dbname)
    {
        try {
            $conn = new PDO("mysql:host=$this->servername", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "CREATE DATABASE $dbname";
            // use exec() because no results are returned
            $conn->exec($sql);
            echo "Database " . $dbname . " created successfully... \n <br>";
            return $conn;
        } catch (PDOException $e) {
            echo "Create DataBase failed: " . $e->getMessage();
            die();
        }
    }

    public function connectTo($dbname)
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully to " . $dbname . "...\n <br>";
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }

    /**************************************
     Update what coiloums you need. If not here look at
      https://www.mysqltutorial.org/mysql-data-types.aspx
    **************************************/
    public function createTable($sql, $DB)
    {
        try {
            $DB->exec($sql);
            echo "Created Table(s)... \n <br>";
        } catch (\Exception $e) {
            echo "Creating Table failed: " . $e->getMessage();
        }
    }
}
