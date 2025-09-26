<?php
// Start session first
session_start();

// remove all session variables
// session_unset();

// destroy the session
// session_destroy();


// Set session variables
$_SESSION['favColor'] = "blue";
$_SESSION['favFood'] = "pizza";

echo "Session variables are set.<br>";
?>

<?php

echo "<h1> Get Session Value </h2>";
// Get session variable values
echo "Favorite Color: " . $_SESSION['favColor'] . "<br>";
echo "Favorite Food: " . $_SESSION['favFood'];


echo "<h1> All Session Value </h2>";

print_r($_SESSION);


echo "<h1>Modify a PHP Session Variable</h1>";

$_SESSION['favColor'] = "red";

echo "<h1>After Modify </h1>";
echo "Change Color : " . $_SESSION['favColor'] . "<br>";

print_r($_SESSION);





?>
