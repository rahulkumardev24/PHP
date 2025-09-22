<?php

$users = ["Apple " , "Orange" , "Banana" , "Mango" ] ;

echo "<h1> Before Adding  </h1>" ; 

print_r($users);

// add 
echo "<h1> After Adding </h1>" ; 
array_push($users , "Guava");
print_r($users);

echo "<h1> Remove </h1>" ; 

array_pop($users);
print_r($users);

echo "<h1> After Removeing </h1>" ; 
print_r($users);

echo "<h1>  Splice </h1>" ; 
array_splice($users , -2) ; 

echo "<h1> After revemong  </h1>" ; 
print_r($users);



?>