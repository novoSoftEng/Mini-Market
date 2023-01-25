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
    // Récupération des informations d'inscription
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['motdepasse'];
    

    // Insertion des informations d'inscription dans la base de données
    $query = "INSERT INTO client (nom, prenom, email, motdepasse) VALUES ('$nom', '$prenom', '$email', '$password')";
    if ($conn->query($query) === TRUE) {
        // Démarrez une session pour le nouveau client
        session_start();
        $_SESSION['email'] = $email;

        // Redirigez le nouveau client vers la page d'accueil
        header("Location: index.html");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>


