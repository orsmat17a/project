<?php
require_once 'db.php';
$sql1 = "SELECT * FROM `konyvek` group by tema";
$stmt = $db -> query($sql1);
echo json_encode($stmt -> fetchAll());

?>