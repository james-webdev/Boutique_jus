
<?php include("../app/view/layout/header.inc.php") ?>




                       

<div class="cart_block" style="background: #fff; color: #333; padding: 10px; border: 1px solid lightgrey;  " >



<div class="container">
  <div class="row">
    <div class="col-sm-2">
    </div>
    <div class="col-sm-8">
                       <h1 style="text-align: center;margin-top: 25px;">Panier</h1> 

                      <form action="cart_add" method="post">
   <table cellpadding="6" cellspacing="1" style="min-width:100%; color: #333;margin-bottom:50px;">
                                    <tr>
                                      <th></th>
                                      <th>Description</th>
                                      <th>Prix</th>
                                      <th>Quantité</th>
                                      <th>Total</th>
                                    </tr>
                  <?php  foreach ($cart as $car) { 
                     
                      //var_dump($cart); ?>
                     


                                    <tr>
                                      <td><img src="<?= $car ["pro_img_url"] ?>" width="150px"> </td>
                                      <td><?= substr($car ["pro_descr"], 0, 250).'...' ?> </td>
                                      <td style="text-align: center;"><?= $car ["pro_price"] ?>€ </td>
                                      <td style="text-align: center;"><?= $car ["cad_qt"] ?> </td>
                                      <td style="text-align: center;"class="right"><?= $car ["cad_qt"]*$car ["pro_price"] ?>€</td>
                                      <div style="visibility:hidden;"><?= $total+= $car ["cad_qt"]*$car ["pro_price"] ?>
                                    </tr>                
          
                            

                          </form>
  
                  </div>

<?php } ?>
            </table>  




                             <div class="row">
                              <div class="col-sm-8">
                              </div>
                              <div class="col-sm-4">
                            
                             <table cellpadding="6" cellspacing="1" style="min-width: 100%; color: #333;margin-bottom:15px;">

                                    <tr>
                                      <td style="font-size: 20px;font-weight: 600;border:0px;text-align: right;">Total panier :  </td>
                                      <td style="border:0px;text-align: right;font-size: 20px;"><?= $total ?> €</td>
                                    </tr>     
                                    <tr>
           
                             </table>
                             
                             </div> 
                             </div>



            <h2 style="text-align: left;margin-top: 10px;">Adresse de livraison</h2> 


<form>
  <div class="form-row">
   </div>
  <div class="form-group">
    <label for="inputAddress">Adresse</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="123 rue de Boulle">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="1e à gauche 2e etage">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" id="inputCity" placeholder="Paris">
    </div>
    
    <div class="form-group col-md-2">
      <label for="inputZip">Code Postale</label>
      <input type="text" class="form-control" id="inputZip" placeholder="75001">
    </div>
  </div>
  <div class="form-group">

  
    

 <h2 style="text-align: left;margin-top: 10px;">Paiement</h2> 



            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                <label class="custom-control-label" for="credit">Carte Crédit</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="debit">Carte Débit</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Nom</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                <small class="text-muted">Nom, Prénom</small>
                <div class="invalid-feedback">
                  Ce champs est requis
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Numéro de CB</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                <div class="invalid-feedback">
                  Ce champs est requis
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Date d'expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                <div class="invalid-feedback">
                  Ce champs est requis
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                <div class="invalid-feedback">
                  Ce champs est requis
                </div>
              </div>
            </div>




<a href="index.php?module=merci&action=merci" style="float:right;margin-bottom:50px;" type="button" class="btn btn-success" type="submit">Acheter </a>
    </div>
    <div class="col-sm-2">
    </div>                       
  </div>
</div>
<?php include("../app/view/layout/footer.inc.php");?>