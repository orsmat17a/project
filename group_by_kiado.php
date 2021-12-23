<?php
require_once 'db.php';
    $sql = "SELECT * FROM `kiado` group by nev";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

 ?>