<?php
require_once('Qntcommande.php');
class Commande extends Qntcommande{
    protected $id_cl;
    function addToCom($id_cl,$qnt,$total){
        $host='mysql:host=localhost;dbname=minimarket';
        $user='root';
        $psswd='';
        $conn = new PDO($host,$user,$psswd);
        $this->id_cl = $id_cl;
        $this->qnt=$qnt;
        $this->total=$total;
        $query = $conn->prepare('INSERT INTO commande (id_cl,total,qnt) VALUES(?,?,?)');
        $query->execute([$this->id_cl,$this->total,$this->qnt]);
        $this->id_com = $conn->lastInsertId();
    }
    function get_id(){
        return $this->id_com;
      }
      function get_id_cl(){
        return $this->id_cl;
      }
}