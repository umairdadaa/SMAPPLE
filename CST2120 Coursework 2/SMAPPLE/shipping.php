<link rel="stylesheet" href="assets/css/payment.css" />
<?php
include('common.php');

output_header_navigation("Shipping", "min_custom")
?>

<div class="progress-checkout-container">
    <div class="progress-step-container">
        <div class="step-check"></div>
        <span class="step-title">Cart</span>
    </div>
    <div class="progress-step-container">
        <div class="step-check"></div>
        <span class="step-title">Shipping</span>
    </div>
    <div class="progress-step-container">
        <div class="step-check"></div>
        <span class="step-title">Payment</span>
    </div>
</div>

<div class="form-container">
    <h2 class="form-title">Shipping Details</h2>
    <form action="" class="checkout-form">
        <!--            <div class="input-line">-->
        <!--                <label for="name">Name</label>-->
        <!--                <input type="text" name="name" id="name" placeholder="Your Name">-->
        <!--            </div>-->
        <div class="input-line">
            <label for="name">Address</label>
            <input type="text" name="name" id="address" placeholder="Address 1">
        </div>

        <div class="input-container">
            <div class="input-line">
                <label for="name">Country</label>
                <input type="text" name="name" id="country" placeholder="Country">
            </div>
            <div class="input-line">
                <label for="name">City</label>
                <input type="text" name="name" id="city" placeholder="City">
            </div>
        </div>

        <input id=Next type="button" value="Proceed to Payment">
        <input id=Back type="button" value="Go Back" style="margin-left: 250px;margin-top: -50px;">


    </form>
</div>

</body>
<script>
    document.getElementById("Next").addEventListener("click", myFunction);
    document.getElementById("Back").addEventListener("click", myFunction2);

    function myFunction() {
        window.location.href = "payment.php";
    }

    function myFunction2() {
        // window.location.href = cart;
    }
</script>

</html>