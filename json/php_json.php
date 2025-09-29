<?php
echo "Array" ; 
echo "<br>" ; 
echo "<br>" ; 
$user = ["name" => "Rahul" , "age" => 24 , "email" => "rahul@gmail.com"]; 
print_r($user); 
echo "<br>" ; 
echo "<br>" ; 
echo "Array Convert into json" ; 
echo "<br>" ; 
$userJson = json_encode($user);
echo $userJson ; 

?>