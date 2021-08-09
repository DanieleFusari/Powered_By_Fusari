<?php
/* *********************************************************************
YouTube: https://www.youtube.com/watch?v=7Q17ubqLfaM
Test:    https://jwt.io/
Libary:  https://packagist.org/packages/firebase/php-jwt
GIT:     https://github.com/firebase/php-jwt
JWT payload codes: https://datatracker.ietf.org/doc/html/rfc7519#section-4.1
******************************************************************** */
use Firebase\JWT\JWT;

class Auth extends CRUD
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
        $dataBasePassword = '$2y$10$tp9zzruvUEFBwL/VoiJSaerYoWUDVisCBK45uQu/1pzZU8AzUHCtq';

        if (password_verify($password, $dataBasePassword)) {
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
            setcookie('auth', $jwt, time() + 3600, '/');
        } else {
            header('Location: /login');
        }
    }


    public function decode()
    {
        JWT::$leeway = 10;
        return JWT::decode($_COOKIE['auth'], $_ENV['Security_Key'], ['HS256']);
    }


    public function ipcheck()
    {
        $allowedIps = ['82.9.190.178', '::1'];
        $userIp = $_SERVER['REMOTE_ADDR'];

        if (!in_array($userIp, $allowedIps)) {
            exit('Unauthorized');
        }
    }

    public function lockPage()
    {
        if (!$this->loggedIn) {
            $this->setMessage('not logged in ', 360);
            header('Location: /login');
            exit();
        }
    }
}
