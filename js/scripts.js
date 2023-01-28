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
             console.log("succes");
            $("#panierQnt").empty().html(qnt);
         },
         error: function () {
             alert("problem");
         }
 
     });
}