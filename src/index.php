<?php 
session_start();
include_once __DIR__ . '/configuration.php';

# Connessione database
include_once $DB_CONNECTION;

# Head della pagina
$title = 'Index';
include_once $HEAD_COMPONENT;

# Navbar
$links = $NAVBAR_LINKS;
include_once $NAVBAR_COMPONENT;