<?php
header('Content-Type: application/json');

include_once './database/connection.php';

$content = file_get_contents('php://input');
$json = json_decode($content, true);


$result = select_all_sections('it');
$sections = mysqli_fetch_all($result);

$sections[1] = 'Akunamamataa';
$sections[2] = 'Sbasdasd asd asd as';

exit(json_encode($sections));
