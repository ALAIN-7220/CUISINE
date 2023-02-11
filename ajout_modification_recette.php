
<?php
        require_once "./templates/header.php";
        require_once "./lib/pdo.php";
        require_once "./lib/recipe.php";
        require_once "./lib/tools.php";

        
        if (isset($_POST['saveRecipe'])){
            
            var_dump($_POST);
           $res= saveRecipe($pdo, $_POST['category'], $_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['instructions'], 'null');
            var_dump($res);
        
        //var_dump($_SERVER);
    } ?>
<form method="POST" enctype="multipart/form-data"><!--enctype permet d'avoir les fichiers envoyés dans la requête-->
        <div class="mb-3">
            <label for="title" class="form-label">Titre</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea type="text" name="description" id="description" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="ingrédients" class="form-label">Ingrédients</label>
            <textarea type="text" name="ingredients" id="incrédients" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="instructions" class="form-label">Instructions</label>
            <textarea type="text" name="instructions" id="instructions" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Catégorie</label>
            <select name="category" id="category" class="form-select">
                <option value="1">Entrée</option>
                <option value="2">Plat</option>
                <option value="3">Dessert</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="file" class="form-label">Image</label>
            <input type="file" name="file" id="file">
        </div>
        <input type="submit" value="Enregister" name="saveRecipe" class="btn btn-primary">
</form>

  <?php 
    include './templates/footer.php';
    
  ?>    