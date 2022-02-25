<style>
    .result,h1{

        text-align: center;
    }
    .imgphp{
        width: 200px;
    }
    .submit {
        transition: all 0.5s ease;
        text-align: center;
        border: 1px solid black;
        /*font-size: 1.5em;*/
        background-color: #0b5ed7;
        border-radius: 12px;
        padding: 10px 15px;

        /*margin-left: 920px;*/
        /*margin-top: 25px;*/
    }

    .submit:hover {
        background-color: rgba(142, 192, 204, 0.473);
    }

</style>

<?php

include ('common.php');
output_header_navigation("Samsung Products", "min_custom_index");

require __DIR__ . '/vendor/autoload.php';

//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Smapple->Products;


$search_string= filter_input(INPUT_GET,'Name', FILTER_SANITIZE_STRING);
$search = $_GET['search'];

//Extract the data that was sent to the server
//$search_string = $_GET['search'];
//
////Create a PHP array with our search criteria
$findCriteria = [
    '$text' => ['$search' => $search_string]
];

//
////Find all of the products that match  this criteria
//$cursor = $db->Products->find($findCriteria);
//$cursor = $db->find()->toArray();
//$cursor = $db->findOne(array('Name' => 'Galaxy S21 Plus'));
$cursor = $db->find(['$text' => ['$search' => $search]]);

//var_dump($cursor->toArray());
//return $cursor;

echo "<h1 class=result'><br>Results</h1>";
foreach($cursor as $reccord){

//    $jsonStr .= json_encode($reccord);//Convert PHP representation of customer into JSON
//    $jsonStr .= ',';//Separator between customers
//    include 'assets/js/search.js';
    echo "<p>";
    echo "_______________________________________";
    echo "<p>";
    echo "<img class='imgphp'; src='".$reccord['image_url']."'/>";
    echo "<p>";
    echo "Brand Name: ".$reccord['Brand'];
    echo "<p>";
    echo "Product: ".$reccord['Name'];
    echo "<p>";
    echo "Colors Available: ".$reccord['Color'];
    echo "<p>";
    echo "Price: ".$reccord['price'];
    echo "<p>";
    echo "<button class='submit' type='submit' name='Submit'>Add To Cart</button>";
    echo "<p>";
    echo "_______________________________________";



}
// I love you FIRAS
//foreach($cursor as $cust){
////echo '<form id="'.$form.'" method="get" action="products.php">';
//echo '<a class="c_a" onclick="document.getElementById('.$form.').submit();">';
//echo '<div class="category">';
//echo '<img class="c_img" src="' . $cust['image_url'] . '"/>';
//echo '<br />';
//echo '<p class="c_p" id='.$cust['Name'].'><b>' . $cust['Name'] . '</b>';
//echo '<br />';
//echo 'AED ' . $cust['price'];
//echo '</p></div>';
//echo '</a>';
//echo '<input type="text" name="Name" value="'.$cust['Name'].'" style="visibility: hidden ; height:0px; width:0px;" >';
//echo '</form>';A
//}

//$getbacktome = $db.Products.find(['$text'=>['$search' =>$search_string]]);

//Output the results
//echo "<h1>Results</h1>";
//foreach ($cursor as $cust) {
////    $jsonStr .= json_encode($Customer);//Convert PHP representation of customer into JSON
////    $jsonStr .= ',';//Separator between customers
//// echo '<a class="c_a" href="' . $cust['productURL'] . '">';
//    echo '<div class="category">';
//    echo '<img class="c_img" src="' . $cust['image_url'] . '"/>';
//    echo '<br />';
//    echo '<p class="c_p"><b>' . $cust['p_Name'] . '</b>';
//    echo '<br />';
//    echo 'AED ' . $cust['price'];
//    echo '</p class="c_p"></div>';
//    //  echo '</a>';
//}
output_footer()
?>
