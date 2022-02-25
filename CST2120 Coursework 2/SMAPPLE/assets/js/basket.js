"use strict";

//Globals
window.onload = loadBasket;

//Get basket from session storage or create one if it does not exist
function getBasket() {
    let basket;
    if (sessionStorage.basket === undefined || sessionStorage.basket === "") {
        basket = [];
    } else {
        basket = JSON.parse(sessionStorage.basket);
    }
    return basket;
}


//Displays basket in page.
function loadBasket() {
    let basket = getBasket(); //Load or create basket

    var totalprice
        //Build string with basket HTML
    let htmlStr = "<form action='checkout.php' method='post'>";
    let prodIDs = [];
    console.log(basket)
    for (let i = 0; i < basket.length; ++i) {

        htmlStr += '<tr>';
        htmlStr += '<td>';
        htmlStr += '<div class="products-cart">';
        htmlStr += '<div class="cart-info">';

        htmlStr += '<img src="' + basket[i].image_url + '">';
        htmlStr += '<h1 id="cart-item-name">' + basket[i].name + '</h1>&nbsp;';

        htmlStr += '</div>';

        htmlStr += '<td>';
        htmlStr += '<h2> AED ' + basket[i].price + '</h2>';
        htmlStr += '</td>';
        htmlStr += '<td>';
        htmlStr += '</div>';

        totalprice += basket[i].price;


        prodIDs.push({ id: basket[i].id, count: 1 }); //Add to product array
    }
    //Add hidden field to form that contains stringified version of product ids.
    htmlStr += "<input type='hidden' name='prodIDs' value='" + JSON.stringify(prodIDs) + "'>";

    //Add checkout and empty basket buttons



    //Display nubmer of products in basket
    document.getElementById("products-cart").innerHTML = htmlStr;

}

//Adds an item to the basket
function addToBasket(prodID, prodName, prodprice, url) {

    let basket = getBasket(); //Load or create basket

    //Add product to basket
    basket.push({ id: prodID, name: prodName, price: prodprice, image: url });

    //Store in local storage
    sessionStorage.basket = JSON.stringify(basket);

    //Display basket in page.
    loadBasket();
}



//Deletes all products from basket
function emptyBasket() {
    sessionStorage.clear();
    loadBasket();
}