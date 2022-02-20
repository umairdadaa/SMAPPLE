<link rel="stylesheet" href="assets/css/payment.css" />
<?php
include('common.php');

output_header_navigation("Payment", "min_custom")
?>

<div class="progress-checkout-container">

    <div class="progress-step-container">
        <div class="step-check"></div>
        <span class="step-title">Shipping</span>
    </div>
    <div class="progress-step-container">
        <div class="step-check"></div>
        <span class="step-title">Payment</span>
    </div>
    <div class="progress-step-container">
        <div class="step-check"></div>
        <span class="step-title">Review</span>
    </div>
</div>

<div class="form-container">


    <h2 class="form-title" style="margin-bottom: 70px;">Payment Details</h2>
    <input id=back type="button" value="Go back" style="margin-left: 375px;margin-top: -120px;">
    <p style="margin-top: 50px;">This webiste is yet to be published with a proper method of online payment - However we are offering a cash payment service without any service fee. </p>
    <!--        <form action="" class="checkout-form">-->
    <!--            <div class="input-line">-->
    <!--                <label for="name">Name on card</label>-->
    <!--                <input type="text" name="name" id="name" placeholder="Your name and surname">-->
    <!--            </div>-->
    <!--            <div class="input-line">-->
    <!--                <label for="name">Card number</label>-->
    <!--                <input type="text" name="name" id="name" placeholder="1111-2222-3333-4444">-->
    <!--            </div>-->
    <!--            <div class="input-container">-->
    <!--                <div class="input-line">-->
    <!--                    <label for="name">Expiring Date</label>-->
    <!--                    <input type="text" name="name" id="name" placeholder="09-21">-->
    <!--                </div>-->
    <!--                <div class="input-line">-->
    <!--                    <label for="name">CVC</label>-->
    <!--                    <input type="text" name="name" id="name" placeholder="***">-->
    <!--                </div>-->
    <!--            </div>-->

    <input id=card type="button" value="Complete purchase" style="margin-top: 20px;">

    <!--        </form>-->
</div>

</body>
<script>
    document.getElementById("card").addEventListener("click", myFunction);
    document.getElementById("cash").addEventListener("click", myFunction);
    document.getElementById("back").addEventListener("click", myFunction2);

    function myFunction() {
        window.location.href = "order_confirmation.php";
    }

    function myFunction2() {
        window.location.href = "shipping.php";
    }
</script>

</html>