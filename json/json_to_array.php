<?php

$data = '{"name":"Rahul","age":24,"email":"rahul@gmail.com"}' ; 
echo "<br>" ; 
echo "Json Convert Into Array" ; 
echo "<br>" ; 

$arrayData = json_decode($data , true) ; 
print_r($arrayData) ; 




?>