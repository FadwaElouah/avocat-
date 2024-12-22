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
<form action="action_inscri.php" style="max-width:500px;margin:auto; margin-top: 100px;" method="POST">
  <h2 style="margin: 12px 0; width: 100%; text-align: center;">Inscription</h2>
  <!-- <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="usrnm">
  </div> -->

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Nom complete" name="fname" required
    value="<?php if (isset($_GET['nom'])) echo $_GET['nom'] ?>"
    >
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="email" required
     value="<?php if (isset($_GET['login'])) echo $_GET['login'] ?>"
    >
  </div>
  <?php
    if (isset($_GET['err']) && !empty($_GET['err']) && $_GET['err'] ==2 ){
     ?>
    <p class="erreur">choisissez  d'autre email address valide </p>
     <?php 
    }
  ?>

  <div class="input-container">
    <i class="fa fa-phone icon"></i>
    <input class="input-field" type="tel" placeholder="votre numero de telephone" name="phone" required
     value="<?php if (isset($_GET['phone'])) echo $_GET['phone'] ?>"
    >
    
  </div>
  <?php
    if (isset($_GET['err']) && !empty($_GET['err']) && $_GET['err'] ==10 ){
     ?>
    <p class="erreur">il doit etre identique a '06XX-XXXXXXX' ou '07XX-XXXXXXX'</p>
     <?php 
    }
  ?>



  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="psw" required>
    
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="confirm Password" name="cpsw" required>
    
  </div>

  <?php
    if (isset($_GET['err']) && !empty($_GET['err']) && $_GET['err'] ==1){
     ?>
    <p class="erreur">  password et confim password doit etre identique</p>
     <?php 
    }
  ?>
  <div class="input-container">
    <span>Role</span>
    <input class="input-field" type="radio" value="avocat" name="role" > <span>avocat</span>
    <input class="input-field" type="radio" value="client" name="role" checked> <span>client</span>
  </div>
    
  <button type="submit" name="register">s'inscriver</button>
</form>

</body>
</html>
