<?php
session_start();

if(!isset($_SESSION['htovxcracf2242']))
{
    header("Location: login.php");
}

if(empty($_SESSION['htovxcracf2242']))
{
    header("Location: login.php");
}

require("php/commande.php");

$produits = afficher();

foreach($_SESSION['htovxcracf2242'] as $i){
    $nom = $i->pseudo;
    $email = $i->email;
} 
?>

<!DOCTYPE html>
<html>
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title>Tous les produits</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
<div class="container-fluid">
<a class="navbar-brand" href="index.html">Mini Market</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
        <a class="nav-link active" style="font-weight: bold;" aria-current="page" href="adminaff.php">Produits</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" aria-current="page" href="admin.php">Nouveau</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="adminsupp.php">Suppression</a>
        </li>
        <li class="nav-item">
          <h5 class="nav-link">Connecté en tant que : <?= $nom ?></h5>
        </li>
        
    </ul>
    
    <a class="btn btn-danger d-flex" style="display: flex; justify-content: flex-end;" href="deconnexion.php">Se deconnecter</a>
    </div>
</div>
</nav>

<div class="album py-5 bg-light">
    <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    <table class="table">
            <thead>
                <tr>
                <th scope="col">id</th>
                <th scope="col"style="padding-left: 70px">image</th>
                <th scope="col">nom</th>
                <th scope="col">prix</th>
                <th scope="col">Description</th>
                <th scope="col">modifier</th>
                </tr>
            </thead>
            <tbody>
<?php foreach($produits as $produit): ?>
                <tr>
                <th scope="row"><?= $produit->id_pr ?></th>
                <td style="padding-left: 40px">
                <img src="<?= $produit->image ?>" style="width: 30%">
                </td>
                <td ><?= $produit->nom ?></td>
                <td style="font-weight: bold; color: green;"><?= $produit->prix ?>DH</td>
                <td><?= substr($produit->description, 0, 50); ?>...</td>
                <td><a href="adminmodifier.php?id=<?= $produit->id_pr ?>"><i class="fa fa-pencil" style="font-size: 30px;"></i></a></td>
                </tr>      
<?php endforeach; ?>

            </tbody>
            </table>
    </div>
</div>
</div>

    
</body>
</html>

<?php


?>