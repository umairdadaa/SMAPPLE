<?php
include('common.php');

output_admin_navigation("Edit Products")
?>



<div id="add_div" style="margin-top: 150px;margin-left: 500px;">
    <h2 style="margin-left: 125px;margin-top: -75px;margin-bottom: 25px;color:black;">Edit Products</h2>
    <br /><br />
    <label for="prod_name"> <br>Product Name: &emsp;</label>
    <input type="text" id="prod_name" class="text" />
    <br /><br />
    <label for="price"> Price:&emsp;&emsp;&emsp;&emsp;&emsp;</label>
    <input type="text" id="price" class="text" />
    <br /><br />
    <label for="category"> Category: &emsp; &emsp;&emsp;</label>
    <input type="text" id="category" class="text" />
    <br /><br />
    <label for="img"> Image URL: &emsp; &emsp;</label>
    <input type="text" id="img" class="text" />
    <br /><br />
    <label for="availability"> Availability: &emsp; &emsp; </label>
    <input type="text" id="availability" class="text" />
    <br /><br />
    <input id=add type="button" class="button" value="Add Product" />
    <input id=delete type="button" class="button" value="Delete Product" style="margin-left: 45px;" />
</div>



</body>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.getElementById("add").addEventListener("click", myFunction);
    document.getElementById("delete").addEventListener("click", myFunction2);


    function myFunction() {
        Swal.fire(
            'Congratulations!',
            'Product has been added!',
            'success'
        )
    }

    function myFunction2() {
        Swal.fire(
            'Congratulations!',
            'Product has been removed!',
            'success'
        )
    }
</script>

</html>