
    <?php
    include('common.php');

    output_header_navigation("Cart Summary", "min_custom_custom")
    ?>

    <!---Start of the main content----->

    <div class="title">
        <h8>CART</h8>
    </div>

    <div class="contain cart-page">
        <!----------Table for cart page------------->
        <table>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
            
                <tbody id="products-cart"></tbody>
            <tr>
                <!-- <td>
                    <div class="cart-info">
                        <img src="assets\img\iphone-13-pro.jpg">
                        <h1 id="cart-item-name">iPhone 13 pro</h1>&nbsp;
                      </div>
                    <td>
                        <h2>3,500</h2>
                    </td>
                </td>  -->
           
            <!---------------->
            <!-- <tr>
                <td>
                    <div class="cart-info">
                        <img src="assets\img\Samsung-Galaxy-S21.jpg">
                        <h1 id="cart-item-name">Samsung Galaxy S21+ 5G</h1>&nbsp;
                      
                    </div>
                    </td>
                    <td>
                        <h2>2,999</h2>
                    </td>
                </td>-->
            </tr>
        </table>
    </div>

 <button id="button" onclick="emptyBasket()">Empty Basket</button>


    <!-----------Subtotal, Total and Proceed to Checkout content-------->
    <div class="checkout">
        <ul>
            <!-- <li class="subtotal">Total
                <span id="totalprice"> AED </span>
            </li> -->

            <!-- <li class="cart-total">Total
                <span>6,499</span>
            </li> -->
            <li class="proceed-btn">
                <a href="shipping.php">
                    <button class="proceed-btn">Proceed to Checkout</button>
                </a>
            </li>
        </ul>
    </div>
    <!------End of the Main Content-------->

   <script src="assets\js\basket.js"></script>

  <script>  
    function getBasket() {
    let basket;
    if (sessionStorage.basket === undefined || sessionStorage.basket === "") {
        basket = [];
    } else {
        basket = JSON.parse(sessionStorage.basket);
    }
    return basket;
}
</script>

<script>

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
       
        htmlStr += '<h1 id="cart-item-name">' + basket[i].Name + '</h1>&nbsp;';
        htmlStr += '</div>';
        htmlStr += '<td>';
        htmlStr += '<h2> '+ basket[i].price + ' AED </h2>';
        htmlStr += '</td>';
        htmlStr += '</div>';

        htmlStr += "<br><button onclick='emptyBasket()'>Empty Basket</button>";

        totalprice += basket[i].price;


        prodIDs.push({ id: basket[i].id, count: 1 }); //Add to product array
    }
    //Add hidden field to form that contains stringified version of product ids.
    htmlStr += "<input type='hidden' name='prodIDs' value='" + JSON.stringify(prodIDs) + "'>";

    //Add checkout and empty basket buttons



    //Display nubmer of products in basket
    document.getElementById("products-cart").innerHTML = htmlStr;
    // document.getElementById("totalprice").innerHTML = totalprice;
}


function addToBasket(prodID, prodName, prodprice, url ) {

let basket = getBasket(); //Load or create basket

//Add product to basket
basket.push({ id: prodID, name: prodName, price: prodprice, image: url});

//Store in local storage
sessionStorage.basket = JSON.stringify(basket);

//Display basket in page.
loadBasket();
}

</script>


<?php

output_footer()
?>

</body>

</html>
