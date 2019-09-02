<?php include("../app/view/layout/header.inc.php") ?>

    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Log In</h1>
            
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
       
        <form name="sentMessage" id="contactForm" action="index.php?module=utilisateur&action=login" method="post">
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Login" id="name" required data-validation-required-message="Entrez votre Login." name="cus_mail">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" id="email" required data-validation-required-message="Please enter your email address." name="cus_password">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          
            <br>
          <div id="success"></div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  
<?php include("../app/view/layout/footer.inc.php");?>