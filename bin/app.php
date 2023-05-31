<?php

require_once '../vendor/autoload.php';

use GeoIp2\Database\Reader;

session_start();

if (isset($_POST['csrf_token'])) {
    $submittedToken = $_POST['csrf_token'];
    if ($submittedToken === $_SESSION['csrf_token']) {
        $ip = '186.90.45.155';

        $database = 'GeoLite2-Country.mmdb';

        $reader = new Reader($database);

        try {

            $record = $reader->country($ip);
            $countryName = $record->country->name;
            header("Location: https://api.whatsapp.com/send?phone=+34611158813&text=Saludos!,%20escribo%20desde%20 $countryName,%20%20me%20interesan%20sus%20servicios!.");
            echo "La IP $ip se encuentra en el país: $countryName";
        } catch (Exception $e) {
            header('Location: https://api.whatsapp.com/send?phone=+34611158813&text=Saludos!,%20me%20interesan%20sus%20servicios!."');
        }
    } else {
     header('Location: ../404');
 }
} else {
    header('Location: ../404');
}


function getRealIP() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    $ip = filter_var($ip, FILTER_VALIDATE_IP);
    $ip = ($ip === false) ? '0.0.0.0' : $ip;
    return $ip;
}