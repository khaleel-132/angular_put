<?php
require '../dbconfig.php';
$post = file_get_contents("php://input");
$content = (array)json_decode($post,true);

$sql ="insert into api ('name') values('" . $content[0]['name'] . "')";
$result = $mysqli->query($sql);
$lastid= $mysqli->insert_id;

$query = "select * from api where id = '".$lastid."' ";
$res = $mysqli->query($query);
$arr1 = array();
while ($row = $res->fetch_assoc())
{
    $arr1[] = $row;

}

echo json_encode($arr1);
?>