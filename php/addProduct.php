<?php




require_once('conn.php');
$nom=$_POST['nom'];
$description=$_POST['description'];
$prix=intval( $_POST['prix']);
$quantite=intval($_POST['quantite']);

$targetDir = "uploads/";
$fileName = basename($_FILES["image"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
move_uploaded_file($_FILES['image']['tmp_name'], "../vetement/".$_FILES['image']['name']);

// move_uploaded_file($_FILES["image"]["tmp_name"], $targetFilePath);
$image=$fileName;

$query = $conn->prepare('INSERT INTO produit (nom , prix ,description ,image,quantite) VALUES(? , ? ,?,?,?)');
$query->execute([$nom,$prix,$description,$image,$quantite]);

?>