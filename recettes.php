
<?php
        require_once "./templates/header.php";
        require_once "./lib/recipe.php";


        /*$sql = 'SELECT * FROM recipes ORDER BY id DESC';//ORDER BY id DESC permet d'avoir les derniers ajouts en premier
        $query = $pdo->prepare($sql);
        $query->execute();
        $recipes = $query->fetchAll(); rendre le code plus propre dans recipe.php par une nouvelle function */
        $recipes = getRecipes($pdo);


        
  ?> 

      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <h1>Liste des recettes</h1>
      </div>

      <div class="row">
      <?php
      
        foreach($recipes as $key=>$recipe) {
                          require "./templates/recipe_partial.php";
        }?>
        </div>
  <?php 
    include './templates/footer.php';
    
  ?>     
       