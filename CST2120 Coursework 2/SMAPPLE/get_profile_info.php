<?php

include('common.php');

?>
<?php

session_start();

//Include libraries
require __DIR__ . '/vendor/autoload.php';

//Create instance of MongoDB client
$mongoClient = (new MongoDB\Client);

//Select a database
$db = $mongoClient->Smapple;

if (array_key_exists("loggedInUsername", $_SESSION)) {
    //Create a PHP array with our search criteria
    $findCriteria = [
        '$email' => $email
    ];

    //Find all of the customers that match  this criteria
    $cursor = $db->Customers->find($findCriteria);


    //Output the results as forms
    

    foreach ($cursor as $cust) {
        echo '<form action="get_profile_info.php" method="post" style="display: flex; flex-wrap: wrap; flex-direction: column;
    align-content: center;">';
        echo 'Name: <input type="text" name="name" value="' . $cust['email'] . '" required><br>';

        echo 'Password: <input type="password" name="password" value="' . $cust['password'] . '" required><br>';

        echo '<input type="hidden" name="id" value="' . $cust['_id'] . '" required>';
        echo '<input type="submit">';
        echo '</form><br>';
    }
}else {
    echo 'Not logged in.';
}
