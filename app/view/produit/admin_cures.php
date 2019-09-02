
<?php 

include("../app/view/layout/header.inc.php");
 ?>





  <!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-3">
          <h1 class="col-lg-3">Admin Cures</h1>
        <div class="list-group">
          <a href="index.php?module=produit&action=admin_laits" class="list-group-item active">Admin Laits</a>
          <a href="index.php?module=produit&action=admin_jus" class="list-group-item">Admin Jus</a>
        </div>
        </div>
    
        <div class="col-md-9">
                
              <table style="width:100%">
                      <?php  foreach ($produits as $produit) {
                        //var_dump($produits);
                       ?>
                    <tr>
                      <th>
                        <?= $produit ["pro_img_url"] ?>
                      </th>
                      <th>
                        <?= $produit ["pro_title"] ?>
                      </th>
                      <th>
                        <?= substr($produit ["pro_descr"], 0, 100).'...' ?>
                      </th>
                      <th>
                        <?= $produit ["pro_price"] ?>
                      </th>
                      <th>
                        <?php $action = "index.php?module=produit&action=supprime_cures&id=".$produit ["pro_id"] ?>
                        <form method="post" action="<?php echo $action ?>" style="padding: 1.25rem; ">
                            <button type="submit" class="btn btn-success">Supprimer</button>
                        </form>
                      </th>
                    </tr>


                       <?php } ?>
               </table>
    
              <form method="post" action="index.php?module=produit&action=ajouter_cures" style="padding: 1.25rem; ">
                    <label>Ajouter une cure</label>
                    <input type="text" class="form-control" placeholder="nom" id="pro_title" required data-validation-required-message="Entrez nom produit." name="pro_title">
                  <p class="help-block text-danger"></p>
                    <input type="text" class="form-control" placeholder="desc" id="pro_descr" required data-validation-required-message="Entrez nom produit." name="pro_descr">
                  <p class="help-block text-danger"></p>
                    <input type="text" class="form-control" placeholder="price" id="pro_price" required data-validation-required-message="Entrez nom produit." name="pro_price">
                  <p class="help-block text-danger"></p>
                    <input type="text" class="form-control" placeholder="img" id="pro_img_url" required data-validation-required-message="Entrez nom produit." name="pro_img_url">
                  <p class="help-block text-danger"></p>
                      <button type="submit" class="btn btn-success">Ajouter</button>
              </form>
        </div>

    </div>

</div>
         
    


<?php include("../app/view/layout/footer.inc.php"); ?>
