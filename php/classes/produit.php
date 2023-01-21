<?php
require_once('../conn.php');
class produit {

    protected $id;
    protected $nom;
    protected $prix;
    protected $description;
    protected $img;
    protected $quantite;

    //method insert
    function insert($n,$p,$d,$im,$qnt){
        $this->nom=$n;
        $this->prix=$p;
        $this->description=$d;
        $this->img=$im;
        $query = $conn->prepare('INSERT INTO produit (nom , prix ,description ,image,quantite) VALUES(? , ? ,?,LOAD_FILE(?),?)');
$query->execute([$nom,$prix,$description,$img,$quantite]);
    }

}
?>