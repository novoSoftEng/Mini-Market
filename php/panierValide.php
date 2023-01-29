<?php
require_once('classes/Produit.php');
require_once('classes/Panier.php');
session_start();
if(empty($_SESSION["id_cl"])){
    $_SESSION["id_cl"] = 1;
}
$_SESSION["panier"]->valide($_SESSION["id_cl"]);