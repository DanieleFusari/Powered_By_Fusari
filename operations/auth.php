<?php
/* *********************************************************************
YouTube: https://www.youtube.com/watch?v=7Q17ubqLfaM
Test:    https://jwt.io/
Libary:  https://packagist.org/packages/firebase/php-jwt
GIT:     https://github.com/firebase/php-jwt
JWT payload codes: https://datatracker.ietf.org/doc/html/rfc7519#section-4.1
******************************************************************** */
use Firebase\JWT\JWT;

class Auth
{
    public $JWT;
    public $loggedIn;
    public $userName;
    public $level;

    public function __construct()
    {
        if (isset($_COOKIE['auth'])) {
            $this->JWT = $this->decode();
            $this->loggedIn = $this->JWT->auth;
            $this->userName = $this->JWT->userName;
            $this->level = $this->JWT->level;
        } else {
            $this->JWT = [];
            $this->loggedIn = false;
            $this->userName = 'Guest';
            $this->level = 0;
        }
    }

    public function login($userName, $password)
    {
        // Need a database here to get the oassword using the user name
        // $dataBasePassword = password_hash($_ENV['DEFAULT_LOGIN_PASSWORD'], PASSWORD_DEFAULT);
        // deafult password is SET IN THE .ENV FILE.

        if ($userName == $_ENV['DEFAULT_LOGIN_USERNAME'] && password_verify($password, $_ENV['DEFAULT_LOGIN_PASSWORD'])) {
            $payload = [
            "iss" => $_SERVER['SERVER_NAME'], // "iss" (Issuer) Claim
            "sub" => 'Logged in',             // "sub" (Subject) Claim
            "userName" => $userName,
            "exp" => time() + 3600,           // "exp" (Expiration Time) Claim
            "iat" => time(),                  // "iat" (Issued At) Claim
            "nbf" => time(),                  // "nbf" (Not Before) Claim
            "auth" => true,
            "level" => 1,
          ];

            $jwt = JWT::encode($payload, $_ENV['Security_Key'], 'HS256');
            $web = $_ENV['WEB_SITE_ADDRESS'];
            setcookie('auth', $jwt, time() + 3600, '/');
        } else {
            setcookie('message', 'login failed', time() + 15, '/');
            header('Location: /login');
            exit();
        }
    }


    public function decode()
    {
        JWT::$leeway = 10;
        return JWT::decode($_COOKIE['auth'], $_ENV['Security_Key'], ['HS256']);
    }


    public function ipcheck()
    {
        $allowedIps = explode(", ", $_ENV['IP_ADDRESS']);
        $userIp = $_SERVER['REMOTE_ADDR'];

        if (!in_array($userIp, $allowedIps)) {
            header('Status: 403 You Do Not Have Access To This Page');
            echo "<h1>Status: 403 You Do Not Have Access To This Page</h1>";
            exit();
        }
    }

    public function lockPage()
    {
        if (!$this->loggedIn) {
            setcookie('message', 'Please log in..', time() + 15, '/');
            header('Location: /login');
            exit();
        }
    }
}
