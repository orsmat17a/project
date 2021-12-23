<?php
$cim=$_GET['cim'];
$id=$_GET['id'];

require_once("db.php");
$sql="UPDATE `konyvek` SET `cim`=? WHERE id=?";
$stmt=$db->prepare($sql);
$stmt->execute(array($cim,$id));
if($stmt) {
    echo "<div class='bg-success m-2'>Sikeres cím frissítés!</div>";
}
else
    echo " <div class='bg-danger m-2'>Hiba a frissítés során</div>";
?>