<?php

include('common.php');
session_start();

if (isset($_SESSION['loggedInUsername']) && $_SESSION['loggedInUsername'] == "admin") {
    output_admin_navigation("View Products");
} else {
    header('location: login_staff.php');
}
?>

<h1 style="margin-left: 600px; margin-bottom: 50px;margin-top: 100px">View Products</h1>



<div class="row">
    <div class="col-sm-12">
        <table onLoad="load_products()">
            <thead style="text-align: center;">
                <tr>
                    <th>Order ID#</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Description</th>
                    <th>Color</th>
                    <th>Capacity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tbody-tag"></tbody>
        </table>
    </div>
</div>

<script>
    window.onload = function(){

        let request = new XMLHttpRequest();

        request.onload = () => {
            if (request.status === 200) {
                display_products(request.response)
            } else alert("Error communicating with server: " + request.status)
        }

        request.open("GET", "get_products.php");
        request.send();
    };


    function display_products(jsonProducts) {
        //json to array for the product object
        let productArray = JSON.parse(jsonProducts)

        //Create HTML table containing product data
        let htmlStr = ""
        for (let index = 0; index < productArray.length; ++index) {
            htmlStr += '<tr>';
            htmlStr += '<td>' + Object.values(productArray[index]._id)[0] + '</td>';
            htmlStr += '<td>' + productArray[index].name + '</td>'
            htmlStr += '<td>' + productArray[index].brand + '</td>';
            htmlStr += '<td>' + productArray[index].description + '</td>';
            htmlStr += '<td>' + productArray[index].color + '</td>';
            htmlStr += '<td>' + productArray[index].capacity + '</td>';
            htmlStr += '<td>' + productArray[index].price + '</td>';
            htmlStr += '<td class="text-center">'

            htmlStr += '<a href="delete_product.php?product_id=' + Object.values(productArray[index]._id)[0] + '" class="btn btn-danger">Delete</a>';

            htmlStr += '</td>';
            htmlStr += '</tr>';
        }
        document.getElementById("tbody-tag").innerHTML = htmlStr;

    }
</script>

</body>

</html>