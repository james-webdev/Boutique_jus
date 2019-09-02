
<?php 

include("../app/view/layout/header.inc.php");


?>
<!-- Page Content -->
<div class="container">

        <div class="row">
         
              <div class="col-lg-3">
                      <h1 class="col-lg-3">Nos Cures</h1>
                       <div class="list-group">
                          <a href="index.php?module=produit&action=produit_laits" class="list-group-item">Nos Laits</a>
                          <a href="index.php?module=produit&action=produit_jus" class="list-group-item">Nos Jus</a>
                       </div>
             
                            <br>
                        <h4>S'enregistrer pour commander</h4>
                          <a href="index.php?module=utilisateur&action=register" class="list-group-item">S'enregistrer
                          </a>
              </div>
        
      
             <div class="col-lg-9">
        

                      <?php 
                      foreach ($produits as $produit) {
                        //var_dump($produits);
                       ?>
                
                  <div class= "row" style="margin-top: 50px;"> 

                      <div class="col-sm-2">
                      </div>
                    
                          <div class="col-sm-8">
                              <img class="card-img-top img-fluid" src="<?= $produit ["pro_img_url"] ?>" alt="">
                          </div>
                     
                      <div class="col-sm-2">
                      </div>
                  </div>


                    <div class="row"> 
                                   <div class="col-sm-8">
                                          <div class="card-body">
                                              <h3 class="card-title"><?= $produit ["pro_title"] ?></h3>
                                              <p class="card-text"><?= $produit ["pro_descr"] ?></p>    
                                          </div>
                                    </div>
                                 
                                
                          
                                 <div class="col-lg-4 prixcentre">       
                                             <h4 style="margin: 10px auto;">€<?= $produit ["pro_price"] ?></h4>
                                          


                                      <form action="index.php?module=cart&action=cart_ajouter_cures" style= "padding: 1.25rem;" method= "post" >
                                        Quantité:
                                              <input type="number" name="cad_qt"
                                               min="0" max="10" step="1" value="1">
                                               <?php if (isset($_SESSION["user"])) { ?>
                                              <input type="hidden" name="cus_id" id="cus_id" value="<?= $_SESSION["user"]["cus_id"] ?>">
                                              <input type="hidden" id="pro_id" name="pro_id" value="<?= $produit ["pro_id"] ?>">
                                                <?php } ?>
                                              <button type="submit" class="btn btn-success">Ajouter au panier</button>
                                      </form>
                                
                                </div> 

                    </div>

                
                

                    <?php } ?>

                 
         
        </div>

      
</div>

   
     

        
</div><!-- /.fin du row -->
  <!-- /.container -->


<?php 

include("../app/view/layout/footer.inc.php");

?>