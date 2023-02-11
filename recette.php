
<?php
        require_once "./templates/header.php";
        require_once "./lib/pdo.php";
        require_once "./lib/recipe.php";
        require_once "./lib/tools.php";

        //var_dump($_GET['id']);
        $id = (int)$_GET['id'];
        //var_dump($recipes[$id]);

    

    //$pdo  = new PDO("mysql:dbname=studi_live_cuisines;host=localhost;charset=utf8mb4", 'root', ''); rendre le code plus propre voir le pdo.php

    $recipe = getRecipeById($pdo, $id);
    /*$query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
    $query->bindParam(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $recipe=$query->fetch(); rendre le code plus propre par une function getRecipeById() dans recipe.php*/

    //var_dump($result);
    //var_dump($recipe);

    if($recipe){

    /*if($recipe['image']===null){
        $imagePath = _ASSETS_IMG_PATH_.'recipe_default.jpg';
    }else{
        $imagePath = _RECIPES_IMG_PATH_.$recipe['image'];
    } rendre le code plus propre voir recipe.php function getRecipeImage return soit la bonne image soit l'image par défaut elle est appelée dans img src="<?*/

    //var_dump(explode(PHP_EOL, $recipe['ingredients']));
    $ingredients = linesToArray($recipe['ingredients']);
    $instructions = linesToArray($recipe['instructions']);

?>


      <!--<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="?=_RECIPES_IMG_PATH_.$recipes[$id]['image'];?>" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">?=$recipes[$id]['title'];?></h1>
                    <p class="lead">?=$recipes[$id]['description']?>$recipes</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    
                    </div>
                </div>
       </div>-->
       <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="<?=getRecipeImage($recipe['image']);?>" class="d-block mx-lg-auto img-fluid" alt="<?=$recipe['title'];?>" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3"><?=$recipe['title'];?></h1>
                    <p class="lead"><?=$recipe['description']?>$recipes</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    
                </div>
       </div>
       <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <h2>Ingrédients</h2>
                <ul class="list-group">
                    <?php foreach($ingredients as $key=>$ingredient){?>
                    
                    <li class="list-group-item"><?=$ingredient?></li>
                    <?php }?>
                </ul>
       </div>
       <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <h2>Instructions</h2>
                <ol class="list-group list-group-numbered">
                    <?php foreach($instructions as $key=>$instruction){?>
                    
                    <li class="list-group-item"><?=$instruction?></li>
                    <?php }?>
                </ol>
       </div>
                    <?php }else{?>
                        <div class="row text-center">
                            <h1>Recette introuvable</h1>
                        </div>
                   <?php }?>
  <?php 
    include './templates/footer.php';
    
  ?>     