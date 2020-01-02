<?php
require_once('/path/to/stripe-php/init.php');
//https://github.com/stripe/stripe-php/releases

//https://github.com/stripe/stripe-php

function sendDataToStripe($num){


    \Stripe\Stripe::setApiKey('sk_test_uvGNc443XzEre4vn6Yk7FMHq00sHEQaXuZ');
    $charge = \Stripe\Charge::create(['amount' => $num, 'currency' => 'usd', 'destination' => 'sk_test_uvGNc443XzEre4vn6Yk7FMHq00sHEQaXuZ']);
    echo $charge;

}


?>