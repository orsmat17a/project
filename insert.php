<?php
$cim=$_GET['cim'];
$szerzo=$_GET['szerzo'];
$oldal=$_GET['oldal'];
$tema=$_GET['tema'];
$kiado=$_GET['kiadoindex'];
$ev=$_GET['ido'];

require_once("db.php");
$sql="INSERT INTO `konyvek`( `szerzo`, `cim`, `ev`, `kiadokod`, `oldal`, `tema`) VALUES (?,?,?,?,?,?)";
$stmt=$db->prepare($sql);
$stmt->execute(array($szerzo,$cim,$ev,$kiado,$oldal,$tema));
if($stmt) {
    echo "<div class='bg-success m-2'>A könyv sikeresen rögzítve!</div>";
}
else
    echo " <div class='bg-danger m-2'>Hiba a könyv rögzítése során!</div>";





?>