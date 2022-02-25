<?php

include('common.php');
output_admin_navigation("Update Products");
?>
<?php

session_start();

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Smapple;

//Extract the data that was sent to the server
$search_string = filter_input(INPUT_POST, 'search', FILTER_UNSAFE_RAW);

//Create a PHP array with our search criteria
$findCriteria = [
    '$text' => [ '$search' => $search_string ] 
 ];

//Find all of the customers that match  this criteria
$cursor = $db->Products->find($findCriteria);


//Output the results as forms
echo "<h1 style='margin-left: 600px; margin-bottom: 50px;margin-top: 10px'>Update Products</h1>";  

foreach ($cursor as $cust){
    echo '<form action="replace_products.php" method="post" style="display: flex; flex-wrap: wrap; flex-direction: column;
    align-content: center;">';
    echo 'Name: <input type="text" name="name" value="' . $cust['name'] . '" required><br>';
    echo 'Brand: <input type="text" name="brand" value="' . $cust['brand'] . '" required><br>';
    echo 'Description: <input type="text" name="description" value="' . $cust['description'] . '" required><br>';
    echo 'Color: <input type="text" name="color" value="' . $cust['color'] . '" required><br>';
    echo 'Capacity: <input type="text" name="capacity" value="' . $cust['capacity'] . '" required><br>';
    echo 'Price: <input type="text" name="price" value="' . $cust['price'] . '" required><br>';
    echo 'Keywords: <input type="text" name="keywords" value="' . $cust['keywords'] . '" required><br>';
    echo '<input type="hidden" name="id" value="' . $cust['_id'] . '" required>'; 
    echo '<input type="submit">';
    echo '</form><br>';
}

 