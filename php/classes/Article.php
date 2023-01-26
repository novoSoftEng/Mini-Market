<?php
class Article{
    protected $id_pr;
    protected $id_art;
    protected $id_com;
    //method
    function insert($id_pr){
        $host='mysql:host=localhost;dbname=minimarket';
        $user='root';
        $psswd='';
        $conn = new PDO($host,$user,$psswd);
        $this->id_pr;
        $query = $conn->prepare('INSERT INTO article (id_pr) VALUES(? )');
    $query->execute([$id_pr]);
    $this->id_art = $conn->lastInsertId();

    }
    
}