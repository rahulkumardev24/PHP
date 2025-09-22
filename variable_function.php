<?php

echo "<h1> Variable Function in PHP  </h1>" ; 

function myVariableFunction (){

    echo "Print Name Rahul Usimng Varaible function <br>" ; 

}

function apply(){
    echo "This is a apple <br>" ; 

}


$myfun = "myVariableFunction" ; 
$apple =  "apply" ; 

myVariableFunction(); 



// pass function as a parameter 

function main($a){
    $a();


}

main($myfun);
main($apple);







?>