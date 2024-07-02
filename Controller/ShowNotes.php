
<?php

// Include the configuration file
$config = require('config.php');

// Create a new Database instance using the database configuration
$db = new Database($config['database']);

// Retrieve the user_id from the query parameter
$user_id = $_GET['userId'];
echo $user_id;
exit;
// Query the database to fetch the notes with the given user_id
$notes = $db->query("SELECT body FROM notes WHERE user_id = '$user_id'")->get(); // Assuming you have a "get" method in your Database class to fetch results

// Set the heading based on the user ID
$heading = 'Notes for User ID: ' . $user_id;


// Include the view file with the data passed as variables
require "Views/index(view).php";

?>