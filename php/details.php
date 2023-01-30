<?php
include('./classes/Panier.php');
session_start();

if (empty($_SESSION["panier"])) {
  $_SESSION["panier"] = new Panier();
}
if (empty($_SESSION["id_cl"])) {
  $_SESSION["id_cl"] = 1;
}
?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Shop Homepage - Start Bootstrap Template</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../css/styles.css" rel="stylesheet" />
    <link href="../css/product_card.css" rel="stylesheet" />
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- Core theme JS-->
    <script src="/Mini-Market/jquery.min.js"></script>
    <script src="/Mini-Market/js/scripts.js"></script>
    <script src="/Mini-Market/js/bootstrap.js"></script>

  <style>
        section li {
            padding: 0;
            margin: 0;
            float: right;
            margin-right: 20px;
        }

        section li {
            /* background:#c4bab000; */
            position: relative;
            list-style: none;
            display: inline-block;
        }

        section li a {
            display: block;
            /* padding: 0px 15px; */
            color: darkgray;
            /* color: #b80f0f; */
            text-decoration: none;
            /* line-height: 60px; */
            font-size: 18px;
        }

        section li a:hover {

            cursor: pointer;
            color: darkgray;
        }

        section ul {
            position: absolute;
            top: 25px;
            display: none;
        }

        .g1 {
            border-radius: 15px;
            background-color: antiquewhite;
            outline: none;
            display: none;
            position: absolute;
            z-index: 8;
            width: 300px;
            height: 400px;
            right: 7px;
        }
        .g2 {
            border-radius: 15px;
            background-color: antiquewhite;
            outline: none;
            display: none;
            position: absolute;
            z-index: 8;
            width: 360px;
            height: 300px;
            right: 7px;
        }
        .g3 {
            border-radius: 15px;
            background-color: antiquewhite;
            outline: none;
            display: none;
            position: absolute;
            z-index: 8;
            width: auto;
            height: auto;
            text-align: center;
            /* font-weight: 80px; */
            right: 7px;
        }

        section ul li a{
            font-size: 13px;
            line-height: 25px;
            }     
        section li:hover>ul {
            display: block;
        }
       .nav-link:hover{
       background:red;
       border-radius:5px ;
       }
        .s:after{
          content:"";
          position:absolute;
          background-color:red ;
          height:3px;
          width:0;
          left:0 ;
          transition:0.3s;
        }
       
        .s:hover:after{
                    width:100%;

        }
    </style>

               
<body onload="showCart();cartContent()">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="../logo.png" width="60" hight="auto" alt="">
            <a class="navbar-brand " href="#!" style="cursor:none;">Mini Market</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item "><a class="nav-link " aria-current="page" href="../index.php">accueil</a></li>
                    
                    
                    
                    <li class="nav-item"><a class="nav-link" href="../login.php">connexion</a></li>
                    <li class="nav-item"><a class="nav-link" href="../client.html">se connecter</a></li>

                </ul>
            </div>

            <section>
               
               <li> 
                   <a href="#" class="s">À propos de nous </a>

                   <ul class="g2" >
                   Mini Market est un détaillant électronique national de mode et de style de vie qui s'engage à rendre la beauté de la mode accessible à tous. Nous utilisons une technologie de fabrication à la demande pour connecter les fournisseurs à notre chaîne d'approvisionnement agile, réduisant ainsi le gaspillage des stocks et nous permettant de livrer une variété de produits abordables aux clients. Depuis nos bureaux , nous touchons des clients dans tous les villes dans le Maroc.
                   </ul>
               </li>
       </section>
       <section>
           
                  <li>
                    <a href="#" class="s">Categories</a>
                    <ul class="g3" >
                        <li onclick="afficher('Robes')"> <a href="#">Robes</a></li>
                        <li onclick="afficher('casual')" ><a href="#">Casual</a></li>
                        <li  onclick="afficher('sport')"><a href="#">Sport</a></li>
                        <li onclick="afficher('classy')" ><a href="#">Classy</a></li>
                        <li onclick="afficher('bijoux')"><a href="#">Bijoux</a></li>
                        <li onclick="afficher('maison')"><a href="#">Maison</a></li>
                        <li onclick="afficher('nourriture')"><a href="#">Nourriture</a></li>
                        <li onclick="afficher('technologie')"><a href="#">Technologie</a></li>
                    </ul>
                   </li>
            
            </section>
            <section>
                <div class="d-flex">
                    <li> <button class="btn btn-outline-dark btn-secondary" type="button">
                            <i class="bi-cart-fill me-1">Cart</i>
                            <span class="badge bg-dark text-white ms-1 rounded-pill" id="panierQnt"></span>
                        </button>

                        <ul class="g1" id="cartContent">
                            hhhshshshshhshshhshshhshhshsh
                        </ul>
                    </li>
            </section>

        </div>
        </div>
        </div>
    </nav>

  <div class="doc"></div>
  <section class="product">


    <div class="hshs" style="width:350px;">
      <?php
      echo '<img src="../' . $_SESSION['row']['image'] . '" >'
      ?>
    </div>

    <div class="product__info">
      <div class="title">
        <?php
        echo '<h1>' . $_SESSION['row']['nom'] . '</h1>'
        ?>
      </div>
      <div class="price">
        <span><?php echo $_SESSION['row']['prix'] ?></span> DH
      </div>

      <div class="mb-3">
        <h3>description</h3>
        <textarea class="form-control" name="desc" required style="height: 209px; width:350px"><?php echo $_SESSION['row']['description'] ?></textarea>
        <br><br>

      </div>


      <div><input class="btn btn-outline-dark mt-auto" type="submit" value="Add to card" onclick="addCart(<?php echo $_SESSION['row']['id_pr'] ?>)" /></div>
    </div>
  </section>

  <!-- Footer-->
  <footer class="bg-dark text-center text-white">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Get connected with us on social networks:</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </footer>
</body>

</html>