<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Smapple;

//Extract the customer details 
$name= filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW);
$id = filter_input(INPUT_POST, 'id', FILTER_UNSAFE_RAW);

//Criteria for finding document to replace
$replaceCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

//Data to replace
$productData = [
    "name" => $name,
];

//Replace customer data for this ID
$updateRes = $db->Products->replaceOne($replaceCriteria, $productData);
    
//Echo result back to user
if($updateRes->getModifiedCount() == 1)
    echo 'Product successfully replaced.';
else
    echo 'Product replacement error.';


