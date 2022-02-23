<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';
    
//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);


//Select a database
$db = $mongoClient->Smapple;
$findCriteria = [

    "Brand" => "Apple",

 ];

//Find all of the customers that match  this criteria
$cursor = $db->Products->find($findCriteria);


$jsonStr = '['; //Start of array of customers in JSON

//Output the results

foreach ($cursor as $customer){
    //var_dump($customer);
    $jsonStr .= json_encode($customer);//Convert PHP representation of customer into JSON 
    $jsonStr .= ',';//Separator between customers
}

//Remove last comma
$jsonStr = substr($jsonStr, 0, strlen($jsonStr) - 1);

//Close array
$jsonStr .= ']';

//Echo final string
echo $jsonStr;
