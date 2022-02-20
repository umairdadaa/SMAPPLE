<?php
include('common.php');

output_header_navigation("Order Confirmation", "min_custom")
?>

<div class="progress-checkout-container" style="margin-top: 80px;">



<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="invoice p-5">
                    <h5>Your Order is Confirmed!</h5> <span class="font-weight-bold d-block mt-4">Hello, Umair</span>
                    <tr class="border-top border-bottom"></tr><span><br>Your order has been confirmed and will be shipped within the next few days!</span>
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order Date</span> <span>27 Jan,2022</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Order No</span> <span>AE756967</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Payment</span> <span><i class='bx bx-money' width="20"></i></i></span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Shiping Address</span> <span>Middlesex, Block 16 - Knowleedge Park, Dubai UAE</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="product border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
                                <tr>
                                    <td width="20%">
                                        <img src="https://i.imgur.com/jptFqQ9.jpg" width="90">
                                    </td>
                                    <td width="60%"> <span class="font-weight-bold">Samsung Galaxy S21 Ultra</span>
                                        <div class="product-qty"> <span class="d-block">Quantity:1</span> <span>Color:Black</span>
                                        </div>
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold">AED 3,999.00</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="20%">
                                        <img src="https://i.imgur.com/7zsSl6y.jpg" width="70">
                                    </td>
                                    <td width="60%"> <span class="font-weight-bold">Apple Iphone 13 PRO MAX</span>
                                        <div class="product-qty"> <span class="d-block">Quantity:1</span> <span>Color:Blue</span>
                                        </div>
                                    </td>
                                    <td width="20%">
                                        <div class="text-right"> <span class="font-weight-bold">AED 4,999.00</span>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                            <table class="table table-borderless">
                                <tbody class="totals">
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Subtotal</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>AED 8,998.00</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Shipping Fee</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>AED 105.00</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Tax Fee</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span>AED 449.90</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="text-left"> <span class="text-muted">Discount</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="text-success">AED 2.90</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="border-top border-bottom">
                                        <td>
                                            <div class="text-left"> <span class="font-weight-bold">Subtotal</span>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="text-right"> <span class="font-weight-bold">AED 9,550.00</span>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                    <tr class="border-top border-bottom"></tr>
                    <p class="font-weight-bold mb-0">Thanks for shopping with us!</p> <span>Team SMAPPLE</span>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>