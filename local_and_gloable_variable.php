<?php

echo " <h1> Gloable Variable </h1>";

$name = "Rahul";
echo "$name";
echo "<br>";

// Create function 
function myFunction()
{
    $myName = "Rahul Local";
    echo  "$myName";

    echo "<h2> Chage Global variable vaalue inside function </h2>";

    $name = "Rahul Change Name ";
    echo "$name";


    echo "<h2> Use Gloable Variable inSide function </h2>";

    global $name;

    echo "$name";
}

// call function 
myFunction();
