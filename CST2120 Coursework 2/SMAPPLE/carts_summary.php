
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
                <th>Products</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>

            <tr>
                <td>
                    <div class="cart-info">
                        <img src="assets/img/iphone-13-pro.jpg">
                        <h1 id="cart-item-name">iPhone 13 pro</h1>&nbsp;
                        <a href="#">Remove</a>
                    </div>


                    <td>
                        <h2>3,500</h2>
                    </td>
                    <td>
                        <div class="counter">
                            <input type="number" value="1">
                        </div>
                    </td>
                    <td>
                        <h2>3,500</h2>
                    </td>
                </td>
            </tr>
            <!---------------->
            <tr>
                <td>
                    <div class="cart-info">
                        <img src="assets/img/Samsung-Galaxy-S21.jpg">
                        <h1 id="cart-item-name">Samsung Galaxy S21+ 5G</h1>&nbsp;
                        <a href="#">Remove</a>
                    </div>
                    <td>
                        <h2>2,999</h2>
                    </td>
                    <td>
                        <div class="counter">
                            <input type="number" value="1">
                        </div>
                    </td>
                    <td>
                        <h2>2,999</h2>
                    </td>
                </td>
            </tr>
        </table>
    </div>

    <!-----------Subtotal, Total and Proceed to Checkout content-------->
    <div class="checkout">
        <ul>
            <li class="subtotal">Subtotal
                <span>6,499</span>
            </li>

            <li class="cart-total">Total
                <span>6,499</span>
            </li>
            <li class="proceed-btn">
                <a href="shipping.php">
                    <button class="proceed-btn">Proceed to Checkout</button>
                </a>
            </li>
        </ul>
    </div>
    <!------End of the Main Content-------->


</body>
<!---End of body----->

</html>
<!---End of the html code----->