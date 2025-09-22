<?php
$number = 20 ; 
echo "Before Condition <br>" ; 

if($number == 20){
    goto myJump ; 
}

$name = "Rahul <br>" ; 
echo $name ; 

// code 



myJump : 
echo "statement is jumped on line no. 16 " ; 


?>

// Go to statement in loop 
<?php

for($num = 0 ; $num <= 10 ; $num++){
    echo "$num <br>" ;

    if($num == 3){

        goto skipNumber ; 

    }
    } 

    skipNumber : 
    echo "Loop is break" ; 



?>