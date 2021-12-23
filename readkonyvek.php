<?php 
require_once 'db.php';
if(isset($_GET['id']))
    $sql = "SELECT * FROM `konyvek` where id = {$_GET['id']}";
else
    $sql = "SELECT * FROM `konyvek` where 1";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>