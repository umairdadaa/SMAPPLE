<?php
include('common.php');

output_header_navigation("Home", "min_custom_index")
?>

<!-- Start Hero Section -->
<div class="wrapper">
    <button class="apple-button"><a href="apple_products.php" class="home-button-tag"><b>CLICK HERE FOR APPLE PHONES</b></a></button>
    <button class="samsung-button"><a href="samsung_products.php" class="home-button-tag"><b>CLICK HERE FOR SAMSUNG PHONES</b></a></button>

    <!-- <h1 style="top: 21%; left: 38%; position: absolute;" class="display-4">Need a phone?</h1> -->

    <img src="assets/img/home_page_bg.jpg" class="img-fluid mx-auto d-block" alt="hero-image" style="width: 100%;">
</div>
<!-- End Hero Section -->



<!-- Start Recommended Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Recommeded Products</h1>
            </div>
        </div>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <a href="view_product.php">
                        <img src="assets/img/iphone13.png" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <h5>iPhone 13 Pro</h5>
                            </li>
                            <li class=" text-right">AED3124.99</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <a href="view_product.php">
                        <img src="./assets/img/samsung21.png" class="card-img-top" alt="...">
                    </a>
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
                    <a href="view_product.php">
                        <img src="./assets/img/iphone12.png" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <h5>iPhone 12</h5>
                            </li>
                            <li class=" text-right">AED3124.99</li>
                        </ul>
                    </div>
                    <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>
                </div>
            </div>

</section>

<?php

output_footer()
?>

</body>

</html>