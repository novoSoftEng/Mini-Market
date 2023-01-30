<?php
require_once('classes/Produit.php');
require_once('classes/Panier.php');
require_once('conn.php');
session_start();
if (empty($_SESSION["panier"])) {
  $_SESSION["panier"] = new Panier();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Shop Homepage - Start Bootstrap Template</title>
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
  <!-- Core theme CSS (includes Bootstrap)-->
  <link href="/Mini-Market/css/styles.css" rel="stylesheet" />
  <!-- Core theme JS-->
  <script src="/Mini-Market/jquery.min.js"></script>
  <script src="/Mini-Market/js/scripts.js"></script>
  <script src="/Mini-Market/js/bootstrap.js"></script>

</head>

<body>
  <table>
    <thead>
      <th>image</th>
      <th>nom</th>
      <th>prix</th>
      <th>quantite</th>
    </thead>
    <tbody> 
<?php 
foreach ($_SESSION["panier"]->get_panierArray() as $key => $value) {
  $produit = new Produit();
  $produit->select_id(trim($key, "'"));
  echo '<tr><td><img src="/Mini-Market/' . $produit->get_image() .
   '" alt="..." /> </td><td>' . $produit->get_nom() . '</td><td> '.$produit->get_prix().'</td><td>' . $value . '</td>';
}

?>
</tbody>
</table>
<?php 
echo 'total :' . $_SESSION["panier"]->get_total() . '';
echo '<button onclick="valide()"> valide </button>';
?>
</body>

</html>