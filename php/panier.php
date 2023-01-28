<?php
include('conn.php');
require_once('classes/Produit.php');
require_once('classes/Panier.php');
session_start();

if(!empty($_POST['id_pr'])&& isset($_POST['id_pr'])){
$_SESSION["panier"]->addCart($_POST['id_pr']);
}
    
    echo $_SESSION["panier"]->get_qnt();



