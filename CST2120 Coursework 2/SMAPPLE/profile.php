<?php
include('common.php');

output_header_navigation("Profile", "min_custom_custom")
?>

<!---Start of the main content----->

<!---Personal Info for profile page----->

<!-- <div class="img"> -->
<!-- <img src="assets/img/user.jpeg" width="50px" height="50px">&nbsp; -->


<div class="profile-box">
<img src="assets/img/user.jpeg" width="50px" height="50px" class="profile-img">&nbsp;

    <h1 class="profile-title">Personal Info</h1>

    <form>
        <label>Name</label>
        <input type="text" placeholder="" class="profile-input"/>
        <label>Email</label>
        <input type="email" placeholder="" class="profile-input"/>
        <label>Password</label>
        <input type="password" placeholder="" class="profile-input" />
        <button type="submit" class="submit-btn">Update</button>
    </form>

</div>

<div style="padding: 50px;"></div>

<div class="ace">
    <h9>Your Order History</h9>
</div>

<table class="order">

    <t>
        <th>Products</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Date</th>
        <th>Remove</th>
        </tr>

        <tr>
            <td data-label="Products">Iphone 13-pro</td>
            <td data-label="Price">3,500</td>
            <td data-label="Quantity">1</td>
            <td data-label="Date">30/12/2020</td>
            <td data-label="Remove">
                <a href="#">X</a>
            </td>
        </tr>

        <tr>
            <td data-label="Products">Samsung-Galaxy-S21+ 5G</td>
            <td data-label="Price">2,999</td>
            <td data-label="Quantity">1</td>
            <td data-label="Date">15/06/2021</td>
            <td data-label="Remove">
                <a href="#">X</a>
            </td>
        </tr>

        <tr>
            <td data-label="Products">Samsung-Galaxy-Z-Fold</td>
            <td data-label="Price">2,599</td>
            <td data-label="Quantity">2</td>
            <td data-label="date">1/01/2022</td>
            <td data-label="Remove">
                <a href="#">X</a>
            </td>
        </tr>

</table>

<br><br><br>

<!------End of the Main Content-------->
<?php

output_footer()
?>
</body>

</html>