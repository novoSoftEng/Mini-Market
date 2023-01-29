<?php
session_start();

 include "php/commande.php";

// if(isset($_SESSION['xRttpHo0greL39']))
// {
//     if(!empty($_SESSION['xRttpHo0greL39']))
//     {
//         header("Location: admin/afficher.php");
//     }
// }



?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
   <link rel="stylesheet" href="login.css">
    <title>Sign in & Sign up Form</title>

  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  method="post" class="sign-in-form">
            <h2 class="title">Admin </h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Adresse email "name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password"name="motdepasse" />
            </div>
            <input type="submit" name="envoyer" value="Se connecter" class="btn solid" />
            <p class="social-text">nous reseaux sociales</p>
            <div class="social-media">
              <a href="https://fr-fr.facebook.com/.com" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/?lang=fr" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.google.com/" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://linkedin.com" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel right-panel">

          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
  </body>
</html>

<?php

if(isset($_POST['envoyer']))
{
    if(!empty($_POST['email']) AND !empty($_POST['motdepasse']))
    {
        $login = htmlspecialchars(strip_tags($_POST['email'])) ;
        $motdepasse = htmlspecialchars(strip_tags($_POST['motdepasse']));

        $admin = getAdmin($login, $motdepasse);

        if($admin){
            $_SESSION['htovxcracf2242'] = $admin;
            header('Location: admin.php');
        }else{
            header('Location: login.php');
        }
    }

}

?>