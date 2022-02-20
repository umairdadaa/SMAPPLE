<?php
include('common.php');

output_header_navigation("About Us", "min_custom")
?>

<!-- Start Content -->
<section class="py-5" style="background-color: #2b6777;">
    <div class="container">
        <div class="row align-items-center py-5">
            <div class="col-md-8 text-white">
                <h1>About Us</h1>
                <p style="text-align: left;">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="col-md-4">
                <img src="assets/img/about_page_icon.png" alt="About Hero" style="margin-left: -20px;" />
            </div>
        </div>
    </div>
</section>
<!-- End Content -->

<!-- Start Section -->
<section class="container py-5">
    <div class="row text-center pt-5 pb-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Our Services</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod Lorem ipsum dolor sit amet.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5  shadow">
                <div class="h1 text-danger text-center">
                    <i class="fa fa-truck fa-lg"></i>
                </div>
                <h2 class="h5 mt-4 text-center">Delivery Services</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5 shadow">
                <div class="h1 text-danger text-center">
                    <i class="fas fa-exchange-alt"></i>
                </div>
                <h2 class="h5 mt-4 text-center">Shipping & Return</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5  shadow">
                <div class="h1 text-danger text-center">
                    <i class="fa fa-percent"></i>
                </div>
                <h2 class="h5 mt-4 text-center">Promotion</h2>
            </div>
        </div>

        <div class="col-md-6 col-lg-3 pb-5">
            <div class="h-100 py-5  shadow">
                <div class="h1 text-danger text-center">
                    <i class="fa fa-user"></i>
                </div>
                <h2 class="h5 mt-4 text-center">24 Hours Service</h2>
            </div>
        </div>
    </div>
</section>
<!-- End Section -->


<?php

output_footer()
?>

</body>

</html>