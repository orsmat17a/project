<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Könyvek</title>
    <link rel="stylesheet" href="../cliens/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Főoldal</a></li>
                <li class="nav-item"><a href="index.php?program=konyvek.php" class="nav-link">Könyvek</a></li>
                <li class="nav-item"><a href="index.php?program=kiadok.php" class="nav-link">Kiadók szerinti szűrés</a></li>
                <li class="nav-item"><a href="index.php?program=ujkonyv.php" class="nav-link">Új könyv felvétele</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
        <?php 
            if(isset($_GET["program"]))
                include $_GET["program"];
            else
                include "fooldal.php";    
        
        ?>
    </div>
    <script src="menuHighlights.js"></script>
</body>
</html>