<?php

include('common.php');
session_start();

if(isset($_SESSION['loggedInUsername']) && $_SESSION['loggedInUsername'] == "admin"){
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="staff_logout.php">Logout</a>';
    echo '</li>';
  } else {
    header('location: login_staff.php');
  }

output_admin_navigation("Edit Products")
?>



<div>
    <h2 style="margin-left: 600px; margin-bottom: 50px;margin-top: 50px">Add Products</h2>


    <form action="add_new_product.php" method="post" id="admin-edit-products" enctype="multipart/form-data">

    <label for="prod_name">Name:</label>
    <input type="text"  name="name" required/>

    <label for="brand">Brand:</label>
    <input type="text"  name="brand" required/>

    <label for="description">Description: </label>
    <input type="text"  name="description" required/>

    <label for="color">Color:</label>
    <select name="color" id="" required>
        <option value="">--Please choose an option--</option>
        <option value="violet">Violet</option>
        <option value="pink">Pink</option>
        <option value="gray">Gray</option>
        <option value="white">White</option>
        <option value="blue">Blue</option>
        <option value="silver">Silver</option>
        <option value="gold">Gold</option>
        <option value="graphite">Graphite</option>
    </select>


    <label for="capacity">Capacity:</label>
    <select name="capacity" id="" required>
        <option value="">--Please choose an option--</option>
        <option value="128GB">128 GB</option>
        <option value="256GB">256 GB</option>
        <option value="512GB">512 GB</option>
        <option value="1TB">1 TB</option>
    </select>


    <label for="img">Product Image:</label>
    <input type="file" name="imageToUpload" id="" placeholder="assets/img/" required>

    <label for="price"> Price:</label>
    <input type="number"  name="price" required/>

    <div style="padding: 30px;"></div>

    <input id=add type="submit" class="button" value="Add Product" />
    </form>
</div>



</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById("add").addEventListener("click", myFunction);


    function myFunction() {
        Swal.fire(
            'Congratulations!',
            'Product has been added!',
            'success'
        )
    }
</script>

</html>