<?php 

// Create function 

function myName(){
    echo "Rahul Kumar Sahu" ;
} 


// Call myName Function

myName() ;

// Parameterize Functions  

echo "<h2> Parametrize Function </h2>" ; 

function frindName($name , $age ){
    echo " Name : $name <br> Age : $age <br>"  ; 

}

frindName( name : "Satish" , age : 21);
frindName(age : 32 , name : "Balram");


?>