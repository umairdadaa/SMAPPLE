<?php

include('common.php');
session_start();

if(isset($_SESSION['loggedInUsername']) && $_SESSION['loggedInUsername'] == "admin"){
    output_admin_navigation("Update Products");

  } else {
    header('location: login_staff.php');
  }

?>
    <body>
        <form action="product_update_forms.php" method="post" class="product-update-form">
            Search Product: <input type="text" name="search" placeholder="Product Name" style="text-align: center;" required><br>
            <input type="submit" >
        </form>
    </body>
</html>
