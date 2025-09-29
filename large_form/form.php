<?php
/* print_r($_POST);
echo "<br><br>"; */
if (isset($_POST['username'])) {
    echo "User name is : " . $_POST['username'];
    echo "<br>";
    echo "User email : " . $_POST['email'];
    echo "<br>";
    echo "Password : " . $_POST['password'];

    echo "<br>";

    echo "Skills :";

    echo implode(",", $_POST['skills']);
    /*     foreach($_POST['skills'] as $skill ){
        echo "@".$skill ; 
        echo "<br>" ; 
    } */


    echo "<br>";
    echo "Gender : " .  $_POST['gender'];
    
    echo "<br>";
    echo "City : " .  $_POST['city'];

   
}
