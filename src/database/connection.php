<?php
include __DIR__ . '/../configuration.php';
include_once $UTILITY;

$connection = mysqli_connect($SERVER_NAME, $HOST_NAME, $PASSWORD, null);
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

