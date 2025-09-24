
<?php

echo "<h3> Sign up data </h3>" ; 

// print_r($_POST) ; 

if($_POST){
    echo "Usrename : " . $_POST['username'] ; 
    echo "<br> <br>" ; 
    echo "Email : " . $_POST['email'] ; 
      echo "<br> <br>" ; 
    echo "Password : " . $_POST['password'] ; 
}



?>