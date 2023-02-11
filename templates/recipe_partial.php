<div class="col-md-4">
                            <!--<div class="card" style="width: 18rem;">
                              <img src="?=$recipe['image']; ?>" class="card-img-top" alt="?=$recipe['title'];?>">
                              <div class="card-body">
                                <h5 class="card-title">?=$recipe['title'];?></h5>
                                <p class="card-text">?=$recipe['description'];?></p>
                                <a href="recette.php?id=?=$key?>" class="btn btn-primary">voir la recette</a>
                              </div>
                            </div>    
                          </div>-->
                          <div class="card" style="width: 18rem;">
                              <img src="<?=getRecipeImage($recipe['image']); ?>" class="card-img-top" alt="<?=$recipe['title'];?>">
                              <div class="card-body">
                                <h5 class="card-title"><?=$recipe['title'];?></h5>
                                <p class="card-text"><?=$recipe['description'];?></p>
                                <a href="recette.php?id=<?=$recipe['id'];?>" class="btn btn-primary">voir la recette</a>
                              </div>
                            </div>    
                          </div>