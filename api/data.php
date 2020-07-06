<?php
require '../dbconfig.php';
$post = file_get_contents('php://input');
$content = (array)json_decode($post,true);

$sql = 'INSERT INTO api (`name`) VALUES ('".$content[0]['name']."')';
$result = $mysqli->query($sql);
?>