<?php

        //Connect to MongoDB and select database
        require __DIR__ . '/vendor/autoload.php';
        $mongoClient = (new MongoDB\Client);
        $db = $mongoClient->Smapple;
        

        $findCriteria = [
            "Brand" => $brand,
         ];
        //Find all products
        $products = $db->Products->find($findCriteria);

        //Output results onto page
        echo '<table>';
        echo '<tr>><th>Product</th><th>Price</th><th></tr>';
        foreach ($Product as $document) {
            echo '<tr>';
            echo '<td>' . $document["product"] . "</td>";
            echo '<td>' . $document["price"] . "</td>";
          
            echo '<td><button onclick=\'addToCart("' . $document["product"] . '", "' . $document["price"] . '")\'>';
         
            echo '</tr>'; 
        }
        echo '</table>';

 ?>