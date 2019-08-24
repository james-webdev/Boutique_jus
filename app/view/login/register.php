<?php include("../app/view/layout/header.inc.php") ?>

    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>S'enregistrer</h1>
            
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
             <form name="sentMessage" id="contactForm" action="index.php?module=utilisateur&action=register" method="post">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Nom</label>
              <input type="text" class="form-control" placeholder="Nom" id="cus_nom" required data-validation-required-message="Entrez votre Nom complet." name="cus_nom">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Prénom</label>
              <input type="text" class="form-control" placeholder="Prénom" id="cus_prenom" required data-validation-required-message="Prénom" name="cus_prenom">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Mot de passe</label>
              <input type="password" class="form-control" placeholder="mot de passe" id="cus_pass" required data-validation-required-message="Please enter your password." name="cus_pass">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email</label>
              <input type="Email" class="form-control" placeholder="Email" id="cus_mail" required data-validation-required-message="Entrez votre adresse Email" name="cus_mail">
              <p class="help-block text-danger"></p>
            </div>
          </div>

          <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">M'inscrire</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<?php include("../app/view/layout/footer.inc.php");?>