<?php
include('Produit.php');
class Panier
{
  protected $panierArray = array();
  //methode
  function get_panierArray()
  {
    return $this->panierArray;
  }
  function ajout($id_pr)
  {
   // $produitsPanier = array_keys($session);
    if (!in_array("'$id_pr'", array_keys($this->panierArray))) {
      $Array = array("'$id_pr'" => 1);
      $this->panierArray = array_merge($this->panierArray, $Array);
      return $this->panierArray;
    }else if(in_array("'$id_pr'",array_keys($this->panierArray))){
      $this->panierArray["'$id_pr'"] += 1;
      return $this->panierArray;
    }
  }

}
?>