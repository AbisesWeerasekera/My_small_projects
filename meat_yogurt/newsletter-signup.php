<?php

// Connect to database
//PDO : php use to connect ot the database
//('mysql:host=127.0.0.1;dbname=meat_yogurt', 'root', ''):information need to pass to connect the databse
//mysql:type of using database,host:ip address of the database we are connecting to
//meat_yogurt:database name, root:username,'':null password
try {
    $db = new PDO('mysql:host=127.0.0.1;dbname=meat_yogurt', 'root', '');
} catch (PDOException $e) {
     //echo '<pre>';
     //print_r($e);
     //echo '</pre>';
    //print_r($e->getMessage());
    echo '<p>Whoops, something went wrong</p>';
    echo '<br>';
    echo '<a href="http://localhost/project/meat-yogurt-website/">Back to hompage</a>';
    exit();
}

//print_r($db);

$customer = [
    'name' => isset($_POST['name']) ? $_POST['name'] : NULL,
    'email' => isset($_POST['email']) ? $_POST['email'] : NULL,
    // php date function - https://www.php.net/manual/en/function.date.php
    'created_at' => date("Y-m-d"), 
];

//echo '<pre>';
//print_r($customer);

$db->prepare("
    INSERT INTO newsletters (name, email, created_at) VALUES (:name, :email, :created_at)
")->execute($customer);

// Redirect browser
header("Location: http://localhost/project/meat-yogurt"); 
exit();