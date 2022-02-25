
  <?php
  include('common.php');

  output_header_navigation("Samsung Products", "min_custom_index")
  ?>

  <!-- Start SAMSUNG Product -->
  <section class="bg-light">
    <div class="container py-5">
      <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
          <h1 class="h1">Samsung</h1>

          <form class="search" action="find_products.php" method="get">
            <input type="text" placeholder="Search" name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          <div class="filters">
            <div>
              Sort By:
              <select class="sort-by">
                <option value="">Select one</option>
                <option value="price">Price</option>
              </select>
            </div>
            <div style="padding: 12px;">
              Sort Order:
              <select class="sort-order">
                <option value="">Select one</option>
                <option value="asc">Ascending</option>
                <option value="desc">Descending</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div style="padding-bottom: 100px;"></div>

      
  <div class="row row-cols-1 row-cols-md-3 g-4" id="product-container">
                <!-- <div class="col">
                  <div class="card">
                      
                        <img src="assets/img/samsung21.png" class="card-img-top" alt="...">
                        
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <h5>Galaxy S21</h5>
                                </li>
                                <li class=" text-right">AED3124.99</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>
                    </div>
                  </div>
      
                <div class="col">
                    <div class="card">
                      
                            <img src="./assets/img/samsung21.png" class="card-img-top" alt="...">
                       
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <h5>Galaxy S21 Ultra 5G</h5>
                                </li>
                                <li class=" text-right">AED3124.99</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>

                    </div>
                </div>
                <div class="col">
                    <div class="card">
                       
                            <img src="./assets/img/samsung21.png" class="card-img-top" alt="...">
                      
                        <div class="card-body">
                            <ul class="list-unstyled d-flex justify-content-between">
                                <li>
                                    <h5>Galaxy S20</h5>
                                </li>
                                <li class=" text-right">AED3124.99</li>
                            </ul>
                        </div>
                        <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>
                    </div> 
                  </div>-->
                  
            </div>

    </section>

    <script>
        //Download products when page loads
        window.onload = loadProduct;

        //Downloads JSON description of products from server
        function loadProduct() {
            //Create request object 
            let request = new XMLHttpRequest();

            //Create event handler that specifies what should happen when server responds
            request.onload = () => {
                //Check HTTP status code
                if (request.status === 200) {
                    //Add data from server to page
                    displayProducts(request.responseText);
                } else
                    alert("Error communicating with server: " + request.status);
            };

            //Set up request and send it
            request.open("GET", "samsung.php");
            request.send();
        }

        //Loads products into page
        function displayProducts(jsonProducts) {
            //Convert JSON to array of product objects
            let prodArray = JSON.parse(jsonProducts);

            //Create HTML table containing product data
            let htmlStr = "";
            for (let i = 0; i < prodArray.length; ++i) {
                //htmlStr += "<tr>";
                //htmlStr += "<td>" + prodArray[i].name + "</td>";
                //htmlStr += "<td><img width=50 height=50 src='" + prodArray[i].image_url + "'></td>";
                //htmlStr += "<td>£" + prodArray[i].price + "</td>";
                //htmlStr += "</tr>";

                htmlStr += '<div class="col">';
                htmlStr += '<div class="card">';
          
                htmlStr += '<img src="' + prodArray[i].image_url +
                    '" class="card-img-top" alt="...">';
                htmlStr += '</a>';
                htmlStr += '<div class="card-body">';
                htmlStr += '<ul class="list-unstyled d-flex justify-content-between">';
                htmlStr += '<li>';
                htmlStr += '<h5>' + prodArray[i].Name +
                    '</h5>';
               
                htmlStr += '</li>';
                htmlStr += '<li class="text-right">' + prodArray[i].price + ' AED </li>';
                htmlStr += '</ul>';
                htmlStr += '</div>';
                htmlStr += '<button class="btn btn-primary p-1 m-1" onclick=\'addToBasket("' + prodArray[i].image + '","' + prodArray[i].Name+ '", "' + prodArray[i].price + '")\'>Add to Cart</button>';
                htmlStr += '</div>';
                htmlStr += '</div>';

            }
            //Finish off table and add to document

            document.querySelector("#product-container").innerHTML = htmlStr;
        }
    </script>



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



function addToBasket(prodID, prodName, prodprice, url) {

let basket = getBasket(); //Load or create basket

//Add product to basket
basket.push({ id: prodID, name: prodName, price: prodprice, image: url });

//Store in local storage
sessionStorage.basket = JSON.stringify(basket);

//Display basket in page.
loadBasket();
}

</script>


<script src="assets\js\recommender.js"></script>


  <?php

  output_footer()
  ?>

</body>

</html>