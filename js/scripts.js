function afficher(categorie){
    var url="categories.html";
    window.location.replace(url);
    $.ajax({
        type: "GET",
        url: './php/afficher.php',
        data: 'categorie=' + categorie,
        success: function (produits) {
            $("#categories_choisis").empty().html(produits);
        }

    });
}