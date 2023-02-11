<?php
 /*$recipes = [
    ["title"=>"Mousse au chocolat",
    "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut ",
    "image" => "1-chocolate-au-mousse.jpg"] ,
    ['title'=>"Gratin dauphinois",
    "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore",
    "image"=>"2-gratin-dauphinois.jpg"],
    ["title"=>"Salade de chèvre",
    "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua",
    "image"=>"3-salade.jpg"]
    
  ]; stocker dans $recipes du fetchAll*/
  function getRecipeById(PDO $pdo, int $id) {
  
  $query = $pdo->prepare("SELECT * FROM recipes WHERE id = :id");
  $query->bindParam(':id', $id, PDO::PARAM_INT);
  $query->execute();

  return $query->fetch();
  }
  
  function getRecipeImage(string|null $image){
    if($image===null){
        return _ASSETS_IMG_PATH_.'recipe_default.jpg';
    }else{
        return _RECIPES_IMG_PATH_.$image;
    }
}

function getRecipes(PDO $pdo, int $limit=null) {
    $sql = 'SELECT * FROM recipes ORDER BY id DESC';//ORDER BY id DESC permet d'avoir les derniers ajouts en premier, ORDER BY RAND permet dechanger les images aléatoirement
    
    if($limit){
        $sql .= ' LIMIT :limit';
    }
    $query = $pdo->prepare($sql);

    if($limit){
        $query->bindParam(':limit', $limit, PDO::PARAM_INT);

    }
        $query->execute();
        return $query->fetchAll();
}

//INSERT INTO `recipes` (`id`, `category_id`, `title`, `description`, `ingredients`, `instructions`, `image`) VALUES (NULL, '2', 'MON TITRE', 'RESTAURANT OUAGA', 'SAUCE COPE', 'AVEC PIMENT', NULL);

function saveRecipe(PDO $pdo, int $category, string $title, string $description, string $ingredients, string $instructions, $image){
    $sql= "INSERT INTO recipes(category_id, title, description, ingredients, instructions, image) VALUES(:category_id, :title, :description, :ingredients, :instructions, null)";
    $query = $pdo->prepare($sql);

    $query->bindParam(':category_id', $category, PDO::PARAM_INT);
    $query->bindParam(':title', $title, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->bindParam(':ingredients', $ingredients, PDO::PARAM_STR);
    $query->bindParam(':instruction', $instructions, PDO::PARAM_STR);
    $query->bindParam(':image', $image, PDO::PARAM_STR|PDO::PARAM_NULL);
    
    return $query->execute();
    


    // $params = [
    //     ":category_id" => $category,
    //     ":title" => $title,
    //     ":description" => $description,
    //     ":ingredients" => $ingredients,
    //     ":instructions" => $instructions,
    // ];

    // if ($image !== null) {
    //     $params[":image"] = $image;
    // }

    // $exec = $query->execute($params);
    // return $exec;

}