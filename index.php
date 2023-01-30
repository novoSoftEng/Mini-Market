<?php
include('./php/classes/Panier.php');
session_start();

if (empty($_SESSION["panier"])) {
    $_SESSION["panier"] = new Panier();
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
    <link href="css/styles.css" rel="stylesheet" />
    <!-- Core theme JS-->
    <script src="jquery.min.js"></script>
    <script src="./js/scripts.js"></script>
    <script src="./js/bootstrap.js"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
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
        .container {
           display: flex;

         }
        .container i {
  
             margin-left:60px;
         }
    </style>


</head>

<body onload="showCart();cartContent()">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <img src="logo.png" width="60" hight="auto" alt="">
            <a class="navbar-brand " href="#!">Mini Market</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                
                <ul class="navbar-nav ms-auto ">
                    <li class="nav-item "><a class="nav-link " aria-current="page" href="index.php">accueil</a></li>
                    
                    
                    
                    <li class="nav-item"><a class="nav-link" href="login.php">connexion</a></li>
                    <li class="nav-item"><a class="nav-link" href="client.html">se connecter</a></li>

                </ul>
            </div>

            <section>
               
               <li> 
                   <a href="#">À propos de nous </a>

                   <ul class="g2" >
                   Mini Market est un détaillant électronique national de mode et de style de vie qui s'engage à rendre la beauté de la mode accessible à tous. Nous utilisons une technologie de fabrication à la demande pour connecter les fournisseurs à notre chaîne d'approvisionnement agile, réduisant ainsi le gaspillage des stocks et nous permettant de livrer une variété de produits abordables aux clients. Depuis nos bureaux , nous touchons des clients dans tous les villes dans le Maroc.
                   </ul>
               </li>
       </section>
       <section>
           
                  <li>
                    <a href="#">Categories</a>
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
    <!-- Header-->
    <header>
        <div>
            <img src="vetement/AC.jpg" alt="..." width="1260px">
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center" id="categories">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="vetement/robe.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Robes</h5>
                                <!-- Product price-->
                                DH200.00 - DH800.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center" onclick="afficher('Robes')"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="vetement/image6.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Casual</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">DH200.00</span><br />
                                DH100.00 - DH500.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center" onclick="afficher('casual')"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="vetement/sport.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sport</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">DH500.00</span><br />
                                DH300.00 - DH1000.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center" onclick="afficher('sport')"><a class="btn btn-outline-dark mt-auto"
                                    href="#">View options</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="vetement/image8.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Classy</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                DH200.00 - DH1200.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center" onclick="afficher('classy')"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="vetement/bijoux.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Bijoux</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">DH50.00</span><br />
                                DH25.00 - DH500.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center" onclick="afficher('bijoux')"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="vetement/Maison.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Maison</h5>
                                <!-- Product price-->
                                DH120.00 - DH20000.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center" onclick="afficher('maison')"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale
                        </div>
                        <!-- Product image-->
                        <img class="card-img-top" src="vetement/nourt.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Nourriture</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">DH20.00</span><br />
                                DH5.00 - DH100.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center" onclick="afficher('nourriture')"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="vetement/pc.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Technologie</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                DH400.00 - DH20000.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center" onclick="afficher('technologie')"><a class="btn btn-outline-dark mt-auto" href="#">View options</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center"
            id="categories_choisis">

        </div>
    </section>
    <!-- Footer-->
    <footer class="text-center text-lg-start bg-dark text-white">
  
   
  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Description
          </h6>
          <p>Bienvenue sur Shein ! Nous sommes un magasin de proximité proposant une large sélection de produits  Nous visons à offrir une expérience d'achat pratique et agréable pour nos clients. Visitez-nous dès aujourd'hui pour découvrir nos produits et profiter de nos offres spéciales.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase mb-4">Horaires d'ouvertures</h5>
  
          <table class="container text-center text-md-start mt-5">
            <tbody class="font-weight-normal">
              <tr>
                <td>lundi - Jeudi:</td>
                <td>8am - 9pm</td>
              </tr>
              <tr>
                <td>Vendredi - Samedi:</td>
                <td>8am - 1am</td>
              </tr>
              <tr>
                <td>Dimanche:</td>
                <td>9am - 10pm</td>
              </tr>
            </tbody>
          </table>
          </div>
        

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="fas fa-map-marker-alt"></i> Tanger</p>
          <p><i class="fas fa-envelope"></i> minimarket@gmail.com</p>
          <p><i class="fas fa-phone"></i> + 212 61 95 67 88</p>
          <p><i class="fas fa-phone"></i> + 212 23 45 67 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">

<!-- Right -->
<div class="container">
<h6 class="text-uppercase fw-bold mb-4">Rejoignez-nous sur les réseaux sociaux</h6> 

  <a href="https://www.google.com/search?q=facebook+wikipedia&sxsrf=AJOqlzV138-Y7zmY1hUutWOIPjsMERpLlg%3A1675040668082&ei=nBfXY5zjBK6jkdUPzuSZgAU&oq=facebook+wi&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQARgAMgoIABCABBAUEIcCMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEMgUIABCABDIHCAAQgAQQCjIFCAAQgAQ6BAgjECc6CwgAEIAEELEDEIMBSgQIQRgASgQIRhgAUABY0ANgphNoAHAAeACAAdYBiAHmBJIBBTAuMy4xmAEAoAEBwAEB&sclient=gws-wiz-serp" class="me-4 text-reset">
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
 
</footer>
</body>

</html>