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
                    </div>
                </div>
                <!-- Product actions-->
                <form action="./php/product_details.php" method="POST" >
                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                        <input type="hidden" name="idpr" value="'.$produit->id_pr.'"/>
                        <div class="text-center"><input class="btn btn-outline-dark mt-auto" type="submit" value="view details" /></div>
                    </div>
                </form>
            </div>
        </div>' ;
       
        endforeach;



      
  echo '  </div>';



?>