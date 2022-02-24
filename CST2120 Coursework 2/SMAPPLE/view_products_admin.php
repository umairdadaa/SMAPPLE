<?php
include('common.php');

output_admin_navigation("View Products")



?>

<h1 style="margin-left: 600px; margin-bottom: 50px;margin-top: 100px">View Products</h1>


<script>
    //Download products when page loads
    window.onload = loadProducts;

    //Downloads JSON description of products from server
    function loadProducts() {
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
        request.open("GET", "get_products.php");
        request.send();
    }

    //Loads products into page
    function displayProducts(jsonProducts) {
        //Convert JSON to array of product objects
        let prodArray = JSON.parse(jsonProducts);

        //Create HTML table containing product data
        let htmlStr = "<table>";
        for (let i = 0; i < prodArray.length; ++i) {
            htmlStr += "<tr>";
            htmlStr += "<td>" + Object.values(prodArray[i]._id)[0] + "</td>";
            htmlStr += "<td>" + prodArray[i].name + "</td>";
            htmlStr += "<td>" + prodArray[i].brand + "</td>";
            htmlStr += "<td>" + prodArray[i].description + "</td>";
            htmlStr += "<td>" + prodArray[i].color + "</td>";
            htmlStr += "<td>" + prodArray[i].capacity + "</td>";
            htmlStr += "<td>" + prodArray[i].price + "</td>";
            htmlStr += "</tr>";
        }
        //Finish off table and add to document
        htmlStr += "</table>";
        document.getElementById("products").innerHTML = htmlStr;
    }
</script>

</body>

</html>