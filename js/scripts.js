function afficher(categorie){
    $("#categories").hide();
   $.ajax({
       type: "GET",
        url: './php/afficher.php',
       data: 'categorie=' + categorie,
        success: function (produits) {
            $("#categories_choisis").empty().html(produits);
        },
        error: function () {
            alert("problem");
        }

    });
}



function addCart(id_pr){
    $.ajax({
        type: "POST",
         url: './php/panier.php',
        data: 'id_pr=' + id_pr,
         success: function (qnt) {
             console.log("succes addCart");
            $("#panierQnt").empty().html(qnt);
         },
         error: function () {
             alert("problem");
         }
 
     });
}
function showCart(){
    $.ajax({
        type: "POST",
         url: './php/panier.php',
         success: function (qnt) {
             console.log("succes showCart");
            $("#panierQnt").empty().html(qnt);
         },
         error: function () {
             alert("problem");
         }
 
     });
}
function cartContent(){
    $.ajax({
        type: "POST",
         url: './php/panierContenu.php',
         success: function (contenu) {
             console.log("succes showCart");
            $("#cartContent").empty().html(contenu);
         },
         error: function () {
             alert("problem");
         }
 
     });
}
var slides = document.querySelectorAll(".slide");
var currentSlide = 0;

function changeSlide() {
  for (var i = 0; i < slides.length; i++) {
    slides[i].style.opacity = 0;
  }
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].style.opacity = 1;
}

setInterval(changeSlide, 5000); // changement toutes les 5 secondes
