function afficher(categorie){
    $("#categories").hide();
   $.ajax({
       type: "GET",
        url: '/Mini-Market/php/afficher.php',
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
         url: '/Mini-Market/php/panier.php',
        data: 'id_pr=' + id_pr,
         success: function (qnt) {
             console.log("succes addCart");
            $("#panierQnt").empty().html(qnt);
            cartContent();
            showCart();
         },
         error: function () {
             alert("problem");
         }
 
     });
     cartContent();
}
function showCart(){
    $.ajax({
        type: "POST",
         url: '/Mini-Market/php/panier.php',
         success: function (qnt) {
             console.log("succes showCart");
            $("#panierQnt").empty().html(qnt);
            cartContent();
         },
         error: function () {
             alert("problem");
         }
 
     });
}
function cartContent(){
    $.ajax({
        type: "POST",
         url: '/Mini-Market/php/panierContenu.php',
         success: function (contenu) {
             console.log("succes showCart");
            $("#cartContent").empty().html(contenu);
            cartContent();
            showCart();
         },
         error: function () {
             alert("problem");
         }
 
     });
}
function valide(){
    $.ajax({
        type: "POST",
         url: '/Mini-Market/php/panierValide.php',
         success: function () {
            cartContent();
            showCart();
         },
         error: function () {
             alert("problem");
         }
 
     });
}