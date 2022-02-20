<?php
include('common.php');

output_admin_navigation("View Orders")
?>



<div class="page-header" style="margin-left: 600px; margin-bottom: 50px; margin-top: 100px">
    <h1>View Orders</h1>
</div>
<table class="table">
    <thead>
        <tr>
            <th>Order ID#</th>
            <th>Customer ID</th>
            <th>Customer First Name</th>
            <th>Customer Last Name</th>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>16511</td>
            <td>12555</td>
            <td>John</td>
            <td>Wick</td>
            <td>Samsung S21 Ultra</td>
            <td>1</td>
            <td>3,999</td>
        </tr>
        <tr>
            <td>25995</td>
            <td>52662</td>
            <td>Peter</td>
            <td>Parker</td>
            <td>Iphone 13 PRO MAX</td>
            <td>1</td>
            <td>4,999</td>
        </tr>
        <tr>
            <td>54859</td>
            <td>93464</td>
            <td>Tom</td>
            <td>Hardy</td>
            <td>Iphone 12</td>
            <td>1</td>
            <td>2,999</td>
        </tr>
    </tbody>
</table>
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>

</body>

</html>