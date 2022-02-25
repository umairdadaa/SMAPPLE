<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Smapple;

//Extract ID from POST data
$id = filter_input(INPUT_GET, 'product_id', FILTER_UNSAFE_RAW);

//Build PHP array with delete criteria 
$deleteCriteria = [
    "_id" => new MongoDB\BSON\ObjectID($id)
];

//Delete the customer document
$deleteRes = $db->Products->deleteOne($deleteCriteria);
    
//Echo result back to user
if($deleteRes->getDeletedCount() == 1){
    header("Location: view_products_admin.php");
}
else{
   echo 'Error deleting product';
}

