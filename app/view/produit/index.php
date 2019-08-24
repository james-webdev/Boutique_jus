
<?php 

include("../app/view/layout/header.inc.php"); 


?>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
<?php  
//var_dump($_SESSION["user"]); 

?>

        <h1 class="my-4">100% Naturel, Bio, Vegan, Cru, Non Pasteurisé</h1>
        <div class="list-group">
          <a href="index.php?module=produit&action=produit_jus" class="list-group-item">Nos Jus</a>
          <a href="index.php?module=produit&action=produit_laits" class="list-group-item">Nos Laits D'Amandes</a>
          <a href="index.php?module=produit&action=produit_cures" class="list-group-item">Nos Cures de Jus</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="../app/view/images/lineup.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="../app/view/images/logo.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="../app/view/images/Cure_avancée.jpg" alt="Third slide">
            </div>
             
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../app/view/images/02.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="index.php?module=produit&action=produit_jus">Nos Jus</a>
                </h4>
                <h5>€7.99 à €8.99</h5>
                <p class="card-text">Vous travaillez pour un restaurant, un établissement hôtelier, une boutique bio, un studio de yoga, une salle de sport, un bar ou un café à Paris ? Souhaiteriez-vous proposer des jus pressés à froid à votre clientèle ? Nous livrons nos jus fraîchement pressés tous les jours dans Paris à des prix compétitifs.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="../app/view/images/05.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="index.php?module=produit&action=produit_laits">Nos Laits D'Amandes</a>
                </h4>
                <h5>€9.20 à €9.49</h5>
                <p class="card-text">Des délicieux et nourrissant laits d’amandes avec des dates savoureuses et de la vanille.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-12 col-md-6 mb-4">
            <div class="card h-100">
              <a href="produit/produit_cures.php"><img class="card-img-top" src="../app/view/images/Cure_avancée.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="index.php?module=produit&action=produit_cures">Nos Cures de Jus</a>
                </h4>
                <h5>€49.99 à €54.99</h5>
                <p class="card-text">Refresh offre deux cures détox afin de permettre au corps de prendre une pause digestive en même temps qu’être nourri et satisfait — la cure débutante et la cure avancée.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
              </div>
            </div>
          </div>

   
        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->





<?php include("../app/view/layout/footer.inc.php"); ?>
