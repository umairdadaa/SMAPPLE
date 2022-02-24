<?php
    //Start session management
    session_start();

    //Connect to MongoDB and select database
	require __DIR__ . '/vendor/autoload.php';//Include libraries
	$mongoClient = (new MongoDB\Client);//Create instance of MongoDB client
	$db = $mongoClient->Smapple;

    //Get name and address strings - need to filter input to reduce chances of SQL injection etc.
    $username= filter_input(INPUT_POST, 'username', FILTER_UNSAFE_RAW);
    $password = filter_input(INPUT_POST, 'password', FILTER_UNSAFE_RAW);    

	
    //Create a PHP array with our search criteria
    $findCriteria = [ "staff_username" => $username];

    //Find all of the staffs that match  this criteria
    $resultArray = $db->Staff->find($findCriteria)->toArray();

    //Check that there is exactly one staff
    if(count($resultArray) == 0){
        echo 'Staff username not found';
        return;
    }
    else if(count($resultArray) > 1){
        echo 'Database error: Multiple staff have same username.';
        return;
    }
   
    //Get staff and check password
    $staff = $resultArray[0];
    if($staff['staff_password'] != $password){
        echo 'Password incorrect.';
        return;
    }
        
    //Start session for this user
    $_SESSION['loggedInUserName'] = $username;
    
    //Inform web page that login is successful
    echo 'ok';
	
    