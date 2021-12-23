<?php 
require_once 'db.php';
$tabla=$_GET['table'];
if(isset($_GET['id'])){
    $sql = "delete from {$tabla} where id={$_GET['id']}";
    $stmt = $db -> exec($sql);
    if($stmt)
        echo "<div class='bg-success m-2'>A törlés sikeresen megtörtént!</div>";
    else
        echo "<div class='bg-danger m-2'>Hiba a törlés során!</div>";    
}
   
?>