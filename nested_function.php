<?php

function function1(){
    echo "Function 1 Called <br>" ; 


    function function2 (){
          echo "Function 2 Called <br>" ; 
    }

}


// jab tal function1 call nahi hoga tab tak function second ko call nahi kar sakte hai hai ager kar diys to ERROR 
// Function 2 ko function 1 se pehle call nahi kar sakte hai 


function1();
function2() ; 




?>