<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->ecommerce;

//Select a collection 
$collection = $db->customers;

//Test data - this would be a JSON string sent to the server and extracted from $_POST
$testCustomerData = '{"name": "Anne Smith", "email":"anne@example.com", "password": "1234"}'; 

//Convert JSON string to PHP  array. 'true' converts to array instead of PHP object.
$customerDataArray = json_decode($testCustomerData, true);

//Add the new product to the database
$insertResult = $collection->insertOne($customerDataArray);
    
//Echo result back to user
if($insertResult->getInsertedCount()==1){
    echo 'Customer added.';
    echo ' New document id: ' . $insertResult->getInsertedId();
}
else {
    echo 'Error adding customer';
}

