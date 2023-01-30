<?php
require_once('classes/Produit.php');
require_once('classes/Panier.php');
require_once('conn.php');
session_start();
if (empty($_SESSION["panier"])) {
  $_SESSION["panier"] = new Panier();
}


echo ' <table>
    <thead>
      <th>image</th>
      <th>nom</th>
      <th>prix</th>
      <th>quantite</th>
    </thead>
    <tbody> ';
foreach ($_SESSION["panier"]->get_panierArray() as $key => $value) {
  $produit = new Produit();
  $produit->select_id(trim($key, "'"));
  echo '<tr><td><img src="/Mini-Market/' . $produit->get_image() .
   '" alt="..." width="100" 
   height="100"/> </td><td>' . $produit->get_nom() . '</td><td align="center"> '.$produit->get_prix().'</td><td  align="center">' . $value . '</td>';
}

echo '</tbody>
</table>';

echo 'total :' . $_SESSION["panier"]->get_total() . '';
echo '<button onclick="valide()"> valide </button>';
?>
