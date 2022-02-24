<?php

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
echo "<h1>Products</h1>";   
foreach ($cursor as $cust){
    echo '<form action="replace_products.php" method="post">';
    echo 'Name: <input type="text" name="name" value="' . $cust['name'] . '" required><br>';
    echo '<input type="hidden" name="id" value="' . $cust['_id'] . '" required>'; 
    echo '<input type="submit">';
    echo '</form><br>';
}

 