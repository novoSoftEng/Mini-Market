<?php
require_once('Produit.php');
require_once('Commande.php');
require_once('Qntcommande.php');
class Panier
{
  protected $panierArray = array();
  protected $qnt=0;
  protected $total=0;
  //methode
  function get_panierArray()
  {
    return $this->panierArray;
  }
  function get_qnt()
  {
    return $this->qnt;
  }
  function get_total()
  {
    return $this->total;
  }
  function addCart($id_pr)
  {
   if(!empty($id_pr)){
    if (!in_array("'$id_pr'", array_keys($this->panierArray))) {
      $Array = array("'$id_pr'" => 1);
      $this->panierArray = array_merge($this->panierArray, $Array);
      $this->qnt= array_sum($this->panierArray);
        $produit = new Produit();
        $this->total=0;
        foreach($this->panierArray as $key=>$value){
          $produit->select_id(trim($key,"'"));
          $this->total += $produit->get_prix() * $this->panierArray[$key];
        }
       
    }else if(in_array("'$id_pr'",array_keys($this->panierArray))){
      $this->panierArray["'$id_pr'"] += 1;
      $this->qnt= array_sum($this->panierArray);
      $produit = new Produit();
      $this->total=0;
      foreach($this->panierArray as $key=>$value){
        $produit->select_id(trim($key,"'"));
        $this->total += $produit->get_prix() * $this->panierArray[$key];
      }
    }}
  }
  function delete($id_pr){
    unset($this->panierArray["'$id_pr'"]);
  }
  function valide($id_cl){
    $commande = new Commande();
    $commande->addToCom($id_cl, $this->qnt, $this->total);
    foreach($this->panierArray as $key=>$value){
      $qntcommande = new Qntcommande();
      $qntcommande->add(trim($key, "'"),$commande->get_id(),$value);
    }
    $this->panierArray = array();
    $this->qnt=0;
    $this->total=0;
  }
  
}
?>