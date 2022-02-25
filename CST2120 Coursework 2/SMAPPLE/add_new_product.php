<?php

//Include libraries
require __DIR__ . '/vendor/autoload.php';

//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Smapple;

//Select a collection 
$collection = $db->Products;

//Extract the data that was sent to the server
$name = filter_input(INPUT_POST, 'name', FILTER_UNSAFE_RAW);
$brand = filter_input(INPUT_POST, 'brand', FILTER_UNSAFE_RAW);
$description = filter_input(INPUT_POST, 'description', FILTER_UNSAFE_RAW);
$color = filter_input(INPUT_POST, 'color', FILTER_UNSAFE_RAW);
$capacity = filter_input(INPUT_POST, 'capacity', FILTER_UNSAFE_RAW);
$imageToUpload = filter_input(INPUT_POST, 'imageToUpload', FILTER_UNSAFE_RAW);
$price = filter_input(INPUT_POST, 'price', FILTER_UNSAFE_RAW);
$keywords = filter_input(INPUT_POST, 'keywords', FILTER_UNSAFE_RAW);


//Check file data has been sent
if (!array_key_exists("imageToUpload", $_FILES)) {
    echo 'File missing.';
    return;
}
if ($_FILES["imageToUpload"]["name"] == "" || $_FILES["imageToUpload"]["name"] == null) {
    echo 'File missing.';
    return;
}
$uploadFileName = $_FILES["imageToUpload"]["name"];

/*  Check if image file is a actual image or fake image
    tmp_name is the temporary path to the uploaded file. */
if (getimagesize($_FILES["imageToUpload"]["tmp_name"]) === false) {
    echo "File is not an image.";
    return;
}

// Check that the file is the correct type
$imageFileType = pathinfo($uploadFileName, PATHINFO_EXTENSION);
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    return;
}

//Specify where file will be stored
$target_file = '/CST2120 Coursework 2/SMAPPLE/assets/img/' . $uploadFileName;

$image_path = '/assets/img/' . $uploadFileName;

/* Files are uploaded to a temporary location. 
    Need to move file to the location that was set earlier in the script */
if (move_uploaded_file($_FILES["imageToUpload"]["tmp_name"], $target_file)) {
    echo $target_file;
} else {
    echo "Sorry, there was an error uploading your file.";
}




//Convert to PHP array
$dataArray = [
    "name" => $name,
    "brand" => $brand,
    "description" => $description,
    "color" => $color,
    "capacity" => $capacity,
    "image_url" => $image_path,
    "price" => $price,
    "keywords" => $keywords
];

//Add the new product to the database
$insertResult = $collection->insertOne($dataArray);

//Echo result back to user
if ($insertResult->getInsertedCount() == 1) {
    echo 'Product added.';
    echo ' New document id: ' . $insertResult->getInsertedId();
    header("Location: add_products_admin.php", TRUE, 301);
} else {
    echo 'Error adding product';
}
