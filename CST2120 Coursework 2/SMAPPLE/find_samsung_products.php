<?php

require __DIR__ . '/vendor/autoload.php';

$Name= filter_input(INPUT_GET,'Name', FILTER_SANITIZE_STRING);

$findCriteria = [
        "Name" => $Name,
    ];

$cursor = $db->Products->find($findCriteria);

echo "<h1>Results</h1>";

foreach ($cursor as $cust){
    echo "<p>";
    echo "Products Available: ".$cust['Name'];
}