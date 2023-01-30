<?php
require_once('classes/Produit.php');
require_once('classes/Panier.php');
session_start();
if(empty($_SESSION["email"])){
    header('Location: /Mini-Market/client.html');
}else{
    $email = $_SESSION["email"];
    $test = "SELECT id_cl FROM client WHERE email='$email'";
    $result = $conn->query($test);
    $_SESSION["panier"]->valide($result);
}
