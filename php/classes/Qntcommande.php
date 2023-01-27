<?php
include('Produit.php');
class Qntcommande extends Produit{
    protected $id_com;
    protected $qnt;
    protected $total;
    //method
    function insert($id_pr,$id_com,$qnt){
        $host='mysql:host=localhost;dbname=minimarket';
        $user='root';
        $psswd='';
        $conn = new PDO($host,$user,$psswd);
        $this->id_pr;
        $this->id_com;
        $this->qnt;
        parent::select_id($id_pr);
        $this->total = $this->prix*$this->qnt;
        $query = $conn->prepare('INSERT INTO qntcommande (id_pr,id_com,$total,$qnt) VALUES(?,?,?,?)');
    $query->execute([$id_pr,$id_com,$this->total,$qnt]);

    }
    
}