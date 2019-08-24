
<?php 

include("../app/view/layout/header.inc.php");
?>





<!-- Page Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-3">
      <h1 class="col-lg-3">Nos Jus</h1>
      <div class="list-group">
        <a href="index.php?module=produit&action=produit_laits" class="list-group-item active">Nos Laits</a>
        <a href="index.php?module=produit&action=produit_cures" class="list-group-item">Nos Cures</a>
      </div>
    </div>
    
    <div class="col-md-9">
      
      <?php  foreach ($produits as $produit) {
                    //var_dump($produits);
       ?>
       <div class="row">
         <div class="col-sm-1">
         </div>

         <div class="col-sm-4">
          <img class="card-img-top img-fluid" src="<?= $produit ["pro_img_url"] ?>" alt="">
        </div>
        <div class="col-sm-6">
          <div class="card-body">
            <h3 class="card-title"><?= $produit ["pro_title"] ?></h3>
            <h4>€<?= $produit ["pro_price"] ?></h4>
            <p class="card-text"><?= $produit ["pro_descr"] ?></p>           
          </div>         

          <form action="post" style="padding: 1.25rem; ">
            Quantité:
            <input type="number" name="quantity"
            min="0" max="10" step="1" value="1">
            <button type="button" class="btn btn-success">Commander</button>
          </form>
        </div>
        
        <div class="col-sm-1">
        </div>
      </div>
    <?php } ?>
    
    
  </div>

</div>

</div>




<?php include("../app/view/layout/footer.inc.php"); ?>
