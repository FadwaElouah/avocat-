<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php @include('nav.php') ?>

<form action="action_log.php" style="max-width:500px;margin:auto; margin-top: 100px;" method="POST">
  <h2 style="margin: 12px 0; width: 100%; text-align: center;">Se connecter</h2>
  <?php 
    if (isset($_GET['err']) && $_GET['err'] == 3) {
      ?>
        <p class="success">inscription effectuée avec succès</p>
      <?php 
    }
  ?>
   <?php 
    if (isset($_GET['err']) && $_GET['err'] == 1) {
      ?>
        <p class="erreur">mot de passe ou email est non valide</p>
      <?php 
    }
  ?>
  <!-- <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div> -->

  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required>
  </div>
 
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw" required>
    
  </div>

  <button type="submit" class="btnlogin" name="login">Se connecter</button>
</form>

</body>
</html>
