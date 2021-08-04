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
    public function __construct()
    {
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
            header('Location: /');
        } else {
            header('Location: /');
        }
    }


    public function decode()
    {
        JWT::$leeway = 10;
        return JWT::decode($_COOKIE['auth'], $_ENV['Security_Key'], ['HS256']);
    }

    public function auth()
    {
        $user = decode();
        if ($user->auth) {
            echo true;
        } else {
            echo fales;
        }
    }
}
