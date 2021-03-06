<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Menüvezérelt PHP</title>
    <style>
    .container-fluid {
        width: 100%;
        padding-right: 0px;
        padding-left: 0px;
        margin-right: auto;
        margin-left: auto;
    }

    

    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="index.php" class="nav-link">Főoldal</a></li>
                <li class="nav-item"><a href="index.php?program=kategoriak.php" class="nav-link">Kategoriák</a></li>
                <li class="nav-item"><a href="index.php?program=zenek.php" class="nav-link">Zenék</a></li>
                <li class="nav-item"><a href="index.php?program=kategoriakSzures.php" class="nav-link">Kategóriák rendezése</a></li>
                <li class="nav-item"><a href="index.php?program=modositas.php" class="nav-link">Módosítás</a></li>
                <li class="nav-item"><a href="index.php?program=ujkategoria.php" class="nav-link">Új kategória bevezetése</a></li>
                <li class="nav-item"><a href="index.php?program=torol.php" class="nav-link">Zene törlés</a></li>
            </ul>
        </nav>

    </div>
    <!-- Itt fog megjelenni a kiválasztott program -->
    <div class="container">
        <?php
            if(isset($_GET["program"]))
                include $_GET["program"];
            else
                include "fooldal.php";

        ?>
    </div>
    
    <script>
        console.log(document.URL)
        for(let obj of document.links)
            if(obj.href==document.URL)
                obj.style.color = "orange"

    </script>
</body>
</html>