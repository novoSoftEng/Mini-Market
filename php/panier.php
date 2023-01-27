<?php
session_start();
include('conn.php');
include('classes/Produit.php');
$status="";
if (isset($_POST['id_pr']) && $_POST['id_pr']!=""){
$id_pr = $_POST['id_pr'];
    $produit = new Produit();
    $produit->select_id($id_pr);


if(empty($_SESSION["shopping_cart"])) {
    $_SESSION["shopping_cart"] = $panierArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["shopping_cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    $_SESSION["shopping_cart"] = array_merge(
    $_SESSION["shopping_cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
