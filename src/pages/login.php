<?php
session_start();
if (isset($_POST['login_request'])) {
    $valid = false; # Funzione per la verifica accesso utente

    if ($valid) $_SESSION['LOGGED_IN'] = true;
}

require __DIR__ . '/../configuration.php';

# Head della pagina
$title = 'Login';
include_once $HEAD_COMPONENT;

$links = $NAVBAR_LINKS;
include_once $NAVBAR_COMPONENT;

if (!isset($_SESSION['LOGGED_IN'])) {
    $heading = 'Accedi tuo account';
    $action = $LOGIN['href'];
    $method = 'POST';
    $submit = 'login_request';
    include_once $LOGIN_FORM_COMPONENT;
}

?>