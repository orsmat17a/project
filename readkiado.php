<?php 
require_once 'db.php';
if(isset($_GET['id'])){
    $sql="SELECT * from konyvek where kiadokod=".$_GET['id'];
}else
    $sql="SELECT * from konyvek";
$stmt = $db -> query($sql);
echo json_encode($stmt -> fetchAll());

?>