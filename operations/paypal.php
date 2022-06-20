<?php

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Core\ProductionEnvironment;

$clientId = $_ENV['PAYPAL_CLIENT_ID'];
$clientSecret = $_ENV['PAYPAL_CLIENT_SECRET'];

if ($_ENV['PAYPAL_ENV'] == 'Live') {
    $environment = new ProductionEnvironment($clientId, $clientSecret);
} else {
    $environment = new SandboxEnvironment($clientId, $clientSecret);
}
$client = new PayPalHttpClient($environment);
