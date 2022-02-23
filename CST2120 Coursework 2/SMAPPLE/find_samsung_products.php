<?php

require __DIR__ . '/vendor/autoload.php';

//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Smapple;

$search_string= filter_input(INPUT_GET,'Name', FILTER_SANITIZE_STRING);

//Extract the data that was sent to the server
$search_string = $_GET['Name'];

//Create a PHP array with our search criteria
$findCriteria = [
    '$text' => ['$search' => $search_string]
];

//Find all of the products that match  this criteria
$cursor = $db->Products->find($findCriteria);

//Output the results
var_dump($search_string);
echo "<h1>Results</h1>";
foreach ($cursor as $cust) {
    $jsonStr .= json_encode($customer);//Convert PHP representation of customer into JSON
    $jsonStr .= ',';//Separator between customers
// echo '<a class="c_a" href="' . $cust['productURL'] . '">';
    echo '<div class="category">';
    echo '<img class="c_img" src="' . $cust['image_url'] . '"/>';
    echo '<br />';
    echo '<p class="c_p"><b>' . $cust['p_name'] . '</b>';
    echo '<br />';
    echo 'AED ' . $cust['price'];
    echo '</p class="c_p"></div>';
    //  echo '</a>';
}

?>
