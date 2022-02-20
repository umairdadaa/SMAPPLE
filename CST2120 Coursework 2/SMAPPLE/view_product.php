<?php
include('common.php');

output_header_navigation("View Product", "min_custom")
?>

<!-- Open Content -->
<section class="bg-light">
    <div class="container pb-5">

        <div class="row">
            <div class="col-lg-5 mt-5">
                <div class="card mb-3">
                    <img class="card-img img-fluid" src="assets/img/view-iphone.png" alt="Card image cap" id="product-detail">
                </div>
                <div class="row">

                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">Buy iPhone 13 Pro</h1>
                        <p class="h3 py-2">From AED 4,199</p>

                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <h6>Brand:</h6>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted"><strong>Apple</strong></p>
                            </li>
                        </ul>

                        <h6>Description:</h6>
                        <p>Get AED 300 - AED 2,285 off when you trade in an iPhone 8 or newer***</p>


                        <h6 for="acolor">Available Color:</h6>
                        <select id="colorselection" style="margin-bottom: 30px">
                            <option value="blue">Sierra Blue</option>
                            <option value="silver">Silver</option>
                            <option value="gold">Gold</option>
                            <option value="graphite">Graphite</option>
                        </select>

                        <h6 for="storage">Storage:</h6>
                        <select id="storagesize" style="margin-bottom: 30px">
                            <option value="128">128 GB</option>
                            <option value="256">256 GB</option>
                            <option value="512">512 GB</option>
                            <option value="1000">1 TB</option>
                        </select>

                        <form action="">
                            <input type="hidden" name="product-title" value="Activewear">
                            <div class="row">

                                <div class="col-auto">
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item text-right">
                                            Quantity
                                            <input type="hidden" name="product-quanity" id="product-quanity" value="1">
                                        </li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                        <li class="list-inline-item"><span class="badge bg-secondary" id="var-value">1</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row pb-3">

                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To
                                        Cart</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Close Content -->



<?php

output_footer()
?>

</body>

</html>