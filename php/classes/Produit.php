<?php
class Produit {
  // Properties
  protected $id_pr;
  protected $nom;
  protected $prix;
  protected $description;
  protected $image;
  protected $quantite;
  protected $categorie;

  // Method
  function insert($nom, $prix,$description,$image,$quantite,$categorie){
   // require_once("php/conn.php");
   $host='mysql:host=localhost;dbname=minimarket';
$user='root';
$psswd='';
$conn = new PDO($host,$user,$psswd);
    require('Article.php');
    $this->nom=$nom;
    $this->prix=$prix;
    $this->description=$description;
    $this->image=$image;
    $this->quantite=$quantite;
    $this->categorie=$categorie;
    $query = $conn->prepare('INSERT INTO produit (nom , prix ,description ,image,quantite,categories) VALUES(? , ? ,?,?,?,?)');
    $query->execute([$nom,$prix,$description,$image,$quantite,$categorie]);
    
    $this->id_pr = $conn->lastInsertId();
    for($i=0;$i<$quantite;$i++){
      $article = new Article();
      $article->insert($this->id_pr);
    }
  }
 function select_id($id){
    require("../conn.php");
    $req=$access->prepare("SELECT * FROM produit WHERE id_pr=?");

      $req->execute([$id]);
      $data = $req->fetch(PDO::FETCH_OBJ);
        $this->id_pr = $id;
   $this->nom=$data->nom;
   $this->prix=$data->prix;
   $this->description=$data->description;
   $this->image=$data->image;
   $this->quantite=$data->quantite;
   $this->categorie=$data->categorie;
 }
 function afficher_cat($categorie)
{
	if(require("conn.php"))
	{
    if(!$categorie){
		$req=$access->prepare("SELECT * FROM produit ORDER BY id_pr DESC");

        $req->execute();

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
      }
        else{
          $req=$access->prepare("SELECT * FROM produit WHERE categories=? ORDER BY id_pr DESC ");

        $req->execute(array($categorie));

        $data = $req->fetchAll(PDO::FETCH_OBJ);
          return $data;
        }
	}
}
}

?> 