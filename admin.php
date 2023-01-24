<?php
session_start();

require("php/commande.php");

if(!isset($_SESSION['htovxcracf2242']))
{
    header("Location: login.php");
}

if(empty($_SESSION['htovxcracf2242']))
{
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Favicon-->
     <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
     <!-- Bootstrap icons-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
     <link rel="stylesheet" href="b">
     <!-- Core theme CSS (includes Bootstrap)-->
     <link href="css/styles.css" rel="stylesheet" />
     <link rel="stylesheet" href="index.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
  
         
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light ">  
        <div class="menu-btn">
        <i class="fas fa-bars" style="color:white"></i> 
    </div>
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand "  style="margin-left: 100px; font-family: Georgia, 'Times New Roman', Times, serif; color:white">YCA Market HI</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="admin.php"style="color:white">accueil</a></li>
                    <li class="nav-item"><a class="nav-link"  style="color:white" >Ajouter</a></li>
                    <li class="nav-item"><a class="nav-link" href="page2.php" style="color:white">tous les Produits</a></li>
                    <li class="nav-item"><a class="nav-link" href="deconnexion.php" style="color:white">se deconnecter</a></li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit" style="color:white">
                        Admin
                    </button>
                </form>
            </div>
        </div>
    </nav>

  

   
    

    <div class="side-bare">
        <div class="close-btn">
<i class="fas fa-times"></i>        
</div>
        <div class="menu">
            <img src="admin-png-1.png" width="150px"height="150px"class="img rounded-circle" style="margin-left: 45px;">
            <div class="item"><a href="#"><i class="fas fa-desktop"> Dashbord</i></a></div>
            <div class="item">
                <a class="sub-btn"><i class="fas fa-table"> Tables <i class="fas fa-angle-right dropdown"></i></i></a>
                <div class="sub-menu">
                    <a href="#" class="sub-item">sub-item 01</a>
                    <a href="#" class="sub-item">sub-item 02</a>
                    <a href="#" class="sub-item">sub-item 03</a>

                </div>
            </div>
            <div class="item"><a href="#"><i class="fas fa-cogs">  Seting</i></a></div>
            <div class="item"><a href="#"><i class="fas fa-info-circle"> About</i></a></div>
        </div>
    </div>          

        <section id="section2">
        <form action="./php/addProduct.php" id="form1" method="post" enctype="multipart/form-data">
        <div class="form-group">    
             <label for="">Nom de produit :</label> 
       <input type="text" placeholder="entrer le nom de produit" class="form-control" name="nom">
    </div>
       
       <div class="formm-group"> 
        <label for="">Description :</label>
        <input type="text" placeholder="entrer la description de produit" class="form-control" name="description">
    </div>
    <div class="formm-group"> 
        <label for="">Ajouter une photo :</label>
        <input type="file" class="form-control btn-primary" name="image">
    </div>
      
        <div class="form-group">       
             <label for="">Prix :</label>
            <input type="number" placeholder="entrer le prix de produit" class="form-control" name="prix"><span class="DH">DH</span><br>
            </div>
            <div class="form-group">       
                <label for="">Quantite :</label>
               <input type="number" placeholder="entrer la quantité de produit" class="form-control" name="quantite"><br>
               </div>
         <div class="form-group"> 
            <input type="submit" value="Ajouter" class="form-control btn btn-outline-primary text-white"  name="submit">
        </div>

       
    </form>
</section>

    <footer class="foter">
        <div class="media-icons">
       <a href="#"><i class="fab fa-facebook"style="color:white" ></i></a>
       <a href="#"><i class="fab fa-instagram" style="color:white"></i></a>
       <a href="#"><i class="fab fa-twitter" style="color:white"></i></a>
        </div>
    </footer>


  
        <script src="jquery.min.js"></script>
    <script src="admin.js"></script>
</body>
</html>