<?php
require_once('Produit.php');
class Panier
{
  protected $panierArray = array();
  protected $qnt=0;
  //methode
  function get_panierArray()
  {
    return $this->panierArray;
  }
  function get_qnt()
  {
    return $this->qnt;
  }
  function addCart($id_pr)
  {
   // $produitsPanier = array_keys($session);
    if (!in_array("'$id_pr'", array_keys($this->panierArray))) {
      $Array = array("'$id_pr'" => 1);
      $this->panierArray = array_merge($this->panierArray, $Array);
      $this->qnt= array_sum($this->panierArray);
    }else if(in_array("'$id_pr'",array_keys($this->panierArray))){
      $this->panierArray["'$id_pr'"] += 1;
      $this->qnt= array_sum($this->panierArray);
    }
  }

}
?>