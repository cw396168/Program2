<?php

$dsn = 'mysql:host=localhost;dbname=putdatabaseNameHere';
$DBusername = 'root';
$DBpassword = '';

try {
    $db = new PDO($dsn, $DBusername, $DBpassword);
    //without the below line you won't see SQL exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    echo $error_message;
    //include('database_error.php');
    exit();
}

function get_all() {
    global $db;

    $queryMovies = 'SELECT * FROM incidents JOIN Customers ON incidents.customerID=customers.customerID and incidents.techID is NULL';
    $statement = $db->prepare($queryCustomers);
    $statement->execute();
    $movies = $statement->fetchAll();
    $statement->closeCursor();

    return $persons;
}


function get_rating($rating) {
    global $db;
    $query = 'SELECT * from persons WHERE rating=:ratingPlaceholder';

    //prepare the query, bind the values, then you execute
    $statement = $db->prepare($query);
    $statement->bindValue(':ratingPlaceholder', $rating);

    //the execute method returns a boolean TRUE on success or FALSE on failure.
    $success = $statement->execute();
    //after the statement is executed you can then fetch the results
    $results = $statement->fetchAll();

    $statement->closeCursor();
    
    return $results;
}

