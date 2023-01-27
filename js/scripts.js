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
$(document).ready(function (){
    $.ajax({
        type: "POST",
         url: './php/panier.php',
        data: 'categorie=' + categorie,
         success: function (produits) {
             $("#categories_choisis").empty().html(produits);
         },
         error: function () {
             alert("problem");
         }
 
     });
});