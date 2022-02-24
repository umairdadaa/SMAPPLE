<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';

//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Smapple;

//Select a collection 
$collection = $db->Customers;


$email = filter_input(INPUT_POST, 'email', FILTER_UNSAFE_RAW);

$findCriteria = ["email" => $email];

$resultArray = $db->Customers->find($findCriteria) ->toArray();


//Convert JSON string to PHP  array. 'true' converts to array instead of PHP object.
if (count($resultArray) == 0) {
    $customerDataArray = json_decode($_POST['user'], true);

    //Add new product to the database
    $insertResult = $collection->insertOne($customerDataArray);

    //Echo result back to user

    if ($insertResult->getInsertedCount() == 1) {
        echo 'Registration Successful';
        return;
    } else {
        echo 'Sorry, an error occured';
        return;
    }
} else {
    echo 'Email already exits. Please login again.';
    return;
}
