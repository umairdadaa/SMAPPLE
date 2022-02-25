<style>
    .result,h1{

        text-align: center;
    }
    .imgphp{
        width: 200px;
    }
    .submit {
        transition: all 0.5s ease;
        text-align: center;
        border: 1px solid black;
        background-color: #0b5ed7;
        border-radius: 12px;
        padding: 10px 15px;
    }

    .submit:hover {
        background-color: rgba(142, 192, 204, 0.473);
    }

</style>

<?php
session_start();
include ('common.php');
output_header_navigation("Samsung Products", "min_custom_index");

require __DIR__ . '/vendor/autoload.php';

//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Smapple->Products;

//Extract the data that was sent to the server
$search_string= filter_input(INPUT_GET,'Name', FILTER_SANITIZE_STRING);
$search = $_GET['search'];


////Create a PHP array with our search criteria
$findCriteria = [
    '$text' => ['$search' => $search_string]
];


//Find all of the products that match  this criteria

$cursor = $db->find(['$text' => ['$search' => $search]]);

// Display the output
echo "<h1 class=result'><br>Results</h1>";
foreach($cursor as $reccord){

    echo "<p>";
    echo "_______________________________________";
    echo "<p>";
    echo "<img class='imgphp'; src='".$reccord['image_url']."'/>";
    echo "<p>";
    echo "Brand Name: ".$reccord['Brand'];
    echo "<p>";
    echo "Product: ".$reccord['Name'];
    echo "<p>";
    echo "Colors Available: ".$reccord['Color'];
    echo "<p>";
    echo "Price: ".$reccord['price'];
    echo "<p>";
    echo "<button class='submit' type='submit' name='Submit'>Add To Cart</button>";
 
    echo "<p>";
    echo "_______________________________________";

}






output_footer()
?>

</body>

</html>