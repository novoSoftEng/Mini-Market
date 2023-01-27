<?php
// Connexion à la base de données
$host = "localhost";
$username = "root";
$password = "";
$dbname = "minimarket";

$conn = new mysqli($host, $username, $password, $dbname);

// Vérifiez si la connexion a échoué
if ($conn->connect_error) {
    die("Connexion échouée: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    // Récupération des informations de connexion
    $email = $_POST['email'];
    $motdepasse = $_POST['motdepasse'];

    // Sélection de l'utilisateur correspondant dans la base de données
    $query = "SELECT * FROM client WHERE email='$email' AND motdepasse='$motdepasse'";
    $result = $conn->query($query);

    // Vérifiez si l'utilisateur existe
    if ($result->num_rows > 0) {
        // Démarrez une session pour l'utilisateur
        session_start();
        $_SESSION['email'] = $email;

        // Redirigez l'utilisateur vers la page d'accueil
        header("Location: index.html");
    } else {
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
    <link rel="stylesheet" href="client.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="devvoir.php" method="post" class="sign-in-form">
            <h2 class="title">déja client</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="email" placeholder="Adresse email "name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password"name="motdepasse" />
            </div>
            <input type="submit" name="submit" value="se connecter" class="btn solid" />
            <p class="alert alert-danger"> <?php echo "erreur ! le mot de pass ou email et incorect" ?></p>
            <p class="social-text">ou connectez-vous avec les plateformes sociales</p>
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
          <form action="nouveau.php" method="post" class="sign-up-form">
            <h2 class="title">nouveau client</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nom"name="nom" />
            </div>
            <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="prenom"name="prenom" />
              </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Adresse email"name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Mot de passe" name="motdepasse" />
            </div>
            <input type="submit" class="btn"name="submit" value="Inscription" />
            <p class="social-text">ou connectez-vous avec les plateformes sociales</p>
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
        <div class="panel left-panel">
          <div class="content">
            <h3>nouveau ici?</h3>
            <p>
              Le client lui-même, le client pourra suivre la formation du client.
                Vous devez par raison Quelque chose.
            </p>
            <button class="btn transparent" id="sign-up-btn">
             S'inscrire
            </button>
          </div>
          <img src="images/log (1).svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>un de nous ?</h3>
            <p>
              Le client doit être en mesure de suivre le service client du client.
               Notre laborieuse à adoucir
            </p>
            <button class="btn transparent" id="sign-in-btn">
              S'identifier
            </button>
          </div>
          <img src="images/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="client.js"></script>
  </body>
</html>
        <?php
    }
}
?>

