<?php


require("commande.php");
require("./classes/Produit.php");
$categorie=$_GET['categorie'];
$produits = new Produit();
  $Produits=$produits->afficher_cat($categorie);
  foreach($Produits as $produit):
   echo ' <div class="col mb-5">
            <div class="card h-100">
                <!-- Product image-->
                <img class="card-img-top" src="'.$produit->image .'" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">'.$produit->nom .'</h5>
                        <!-- Product price-->
                        <h5 class="fw-bolder">'.$produit->prix .'DH</h5>
                        <h5 class="fw-bolder">'.$produit->description .'</h5>
                        <h3 class="fw-bolder">'.$produit->quantite .'</h3>
                    </div>
                </div>
                <!-- Product actions-->
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center" onclick="addCart('.$produit->id_pr.')"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                </div>
            </div>
        </div>';
       
        endforeach;



      
  echo '  </div>';



?>