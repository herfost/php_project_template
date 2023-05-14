<?php
$PROJECTFOLDER_NAME = ''; # Imposta project name

# Direcoties
$BASE_URL = (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] != 'on' ? 'http' : 'https') . '://' . $_SERVER['HTTP_HOST'] . '/' . $PROJECTFOLDER_NAME;
$SRC_URL = $BASE_URL + '/src';
$PAGE_DIR = $SRC_URL + '/pages';
$DATABASE_DIR = $SRC_URL + '/database';
$COMPONENT_DIR = $SRC_URL + '/components';

$DB_CONNECTION = $DATABASE_DIR + '/connection.php';

$NAVBAR_COMPONENT = $COMPONENT_DIR + '/navbar.php';
$HEAD_COMPONENT = $COMPONENT_DIR + '/head.php';

$LOGIN_FORM_COMPONENT = $COMPONENT_DIR + '/form/login_form.php';
$SIGNIN_FORM_COMPONENT = $COMPONENT_DIR + '/form/signin_form.php';

$UTILITY = $SRC + '/utility.php';

$SERVER_NAME = 'database';
$HOST_NAME = 'root';
$PASSWORD = $_ENV['MYSQL_ROOT_PASSWORD'];
$DB_NAME = ''; # Imposta database name

# Pages
$HOME = array(
    'href' => $SRC . 'index.php',
    'name' => 'Home'
);

$LOGIN = array(
    'href' => $PAGE_DIR . 'login.php',
    'name' => 'Login'
);

# Navbar
$NAVBAR_LINKS = array($HOME);