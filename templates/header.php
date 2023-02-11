<?php
 require_once "./lib/config.php";
 require_once "./lib/pdo.php";

$currentPage = basename($_SERVER['SCRIPT_NAME']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OséeFood</title>
  <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="../CUISINE/assets/css/style.css">
  <link rel="stylesheet" href="../CUISINE/assets/css/override-bootstrap.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
  
  <div class="container">
        <header>
          <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
              <a href="./index.php" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                <img src="./assets/images/logo-cuisinea-horizontal.jpg" alt="logo OséeFood" width="250">
              </a>

              <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0 nav nav-pills">
                <?php foreach($mainMenu as $key=>$value){?>
                    <li><a href="<?=$key;?>" class="nav-link <?php if($currentPage=== $key){echo 'active';}?> nav-item "><?=$value;?></a></li>
               <?php } ?>

                <!--<li><a href="index.php" class="nav-link nav-item  ?php if($currentPage==='index.php'){echo 'active';}?>">Accueil</a></li>
                <li><a href="recettes.php" class="nav-link nav-item  ?php if($currentPage==='recettes.php'){echo 'active';}?>">Nos recettes</a></li>
                <li><a href="#" class="nav-link nav-item ">Pricing</a></li>
                <li><a href="#" class="nav-link nav-item">FAQs</a></li>
                <li><a href="#" class="nav-link nav-item">About</a></li>-->
              </ul>

              <div class="col-md-3 text-end">
                <button type="button" class="btn btn-outline-primary me-2">Login</button>
                <button type="button" class="btn btn-primary">Sign-up</button>
              </div>
            </header>