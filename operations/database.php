<?php
/**************************************
Calls for DataBase creation
 https://www.w3schools.com/php/php_mysql_intro.asp
**************************************/
class DataBase
{
    private $servername;
    public $dbname;
    private $username;
    private $password;

    public function __construct($servername = null, $dbname = null, $username = null, $password = null)
    {
        $this->servername = $servername ?? $_ENV['DATABASE_SERVERNAME'];
        $this->username = $username ?? $_ENV['DATABASE_USER'];
        $this->dbname = $dbname ?? $_ENV['DATABASE_NAME'];
        $this->password = $password ?? $_ENV['DATABASE_PASSWORD'];
    }

    public function connectTo()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->$dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully to " . $dbname . "...\n <br>";
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}
