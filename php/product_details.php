<?php
    require("conn.php"); 
    session_start();
if(isset($_POST['idpr'])){

    $stm = $conn->prepare("SELECT * FROM produit WHERE id_pr=?");
    $stm->bindValue(1, $_POST['idpr']);
    $stm->execute();
    $row = $stm->fetch(PDO::FETCH_ASSOC);  


    $_SESSION['row'] = $row;
    header("Location: details.php");
}

?>