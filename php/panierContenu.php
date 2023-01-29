<?php
require_once('classes/Produit.php');
require_once('classes/Panier.php');
session_start();
foreach($_SESSION["panier"]->get_panierArray() as $key => $value) {
    $produit = new Produit();
  $produit->select_id(trim($key,"'"));
   echo '<p><img src="'.$produit->get_image() .'" alt="..." /> <p>'.$produit->get_nom().'qunatite:'.$value.'</p>';
  }