<?php

if(isset($_POST['idpr'])){
    require("conn.php"); 
    $stm = $conn->prepare("SELECT * FROM produit WHERE id_pr=?");
    $stm->bindValue(1, $_POST['idpr']);
    $stm->execute();
    $row = $stm->fetch(PDO::FETCH_ASSOC);  

    session_start();
    $_SESSION['row'] = $row;
    header("Location: /Mini-Market/php/details.php");
}

?>