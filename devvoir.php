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
        // Affichez un message d'erreur si l'utilisateur n'existe pas
        echo "Adresse email ou mot de passe incorrect";
    }
}
?>

