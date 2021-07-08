<?php
namespace App\controller;

class display
{
    public string $queryString;
    public string $method;

    public function __construct()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->queryString = $_SERVER['QUERY_STRING'];
    }

    public function view($view)
    {
        if ($this->queryString) {
            $array1 = explode("&", $this->queryString);
            foreach ($array1 as $value) {
                $var = substr($value, strpos($value, "=") + 1);
                $key = strtok($value, '=');
                $$key = $var;
            }
        }
        require_once __DIR__ . '/../public/' . $view . '.php';
    }

    public function SQL($value)
    {
        try {
        } catch (\Exception $e) {
        }
    }

    public function auth()
    {
        echo 'Password';
        var_dump($this->method);
    }
}
