
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>REFRESH COLD PRESS</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
  

  <!-- Custom styles for this template -->
  <style> 

body {
  padding-top: 56px;
}

td,th {
  border: grey 1px solid;
}

</style>
 

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Refresh Cold Press</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
         


          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
         <!--  <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> -->
 
          <?php if(!isset($_SESSION["user"])) { ?>
           <li class="nav-item">
            <a class="nav-link" href="index.php?module=utilisateur&action=login">Log in</a>
          </li>
           

          <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?module=utilisateur&action=logout">Log out</a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?module=cart&action=cart">Panier</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>