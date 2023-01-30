<?php
require_once('classes/Produit.php');
require_once('classes/Panier.php');
require_once('classes/Panier.php');
require_once('conn.php');
session_start();
if(empty($_SESSION["email"])){
   echo false;
}else{
    $email = $_SESSION["email"];
    $req=$conn->prepare("SELECT id_cl FROM client WHERE email=?");
    $req->execute([$email]);
    $data = $req->fetch(PDO::FETCH_OBJ);
    $_SESSION["panier"]->valide($data->id_cl);
}
