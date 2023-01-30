<?php
// Connexion à la base de données
require_once('./php/conn.php');
session_start();
if (isset($_POST['submit'])) {
    // Récupération des informations d'inscription
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['motdepasse'];
    

    // Insertion des informations d'inscription dans la base de données
    $test = "SELECT * FROM client WHERE email='$email' AND motdepasse='$password'";
    $result = $conn->query($test);
    if ($result->num_rows > 0) {
      // Démarrez une session pour l'utilisateur

      // Redirigez l'utilisateur vers la page d'accueil
      header("Location: client.html");
  }else{
    $query = "INSERT INTO client (nom, prenom, email, motdepasse) VALUES ('$nom', '$prenom', '$email', '$password')";
    if ($conn->query($query)) {
        // Démarrez une session pour le nouveau client

        $_SESSION['email'] = $email;

        // Redirigez le nouveau client vers la page d'accueil
        header("Location: index.php");
    } }
}
?>


