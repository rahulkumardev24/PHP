<form action="" method="post">

    <input type="text" placeholder="username" name="user">
    <br><br>
    <button name="button" value="set">Set Cookies</button>
    <br><br>

    <button name="button" value="display">Diplay </button>
    <br><br>
    <button name="button" value="delete">Delete</button>
</form> 

<?php



if(isset($_POST['button'])){

    // set 


if($_POST['button'] == "set"){
    $val = $_POST['user'] ; 


    setcookie("user" , $val ) ; 
    echo " Cookies is set " ; 
}


// display 

if($_POST['button'] == 'display'){
    if(isset(($_COOKIE['user']))){
        echo $_COOKIE['user'] ; 
    }
}


// delete 

   // Delete Cookie
    if ($_POST['button'] == "delete") {
        if (isset($_COOKIE['user'])) {
            setcookie("user", "", time() - 3600,);
            echo "Cookie deleted.";
        } else {
            echo "No cookie to delete.";
        }
    }
}



?>
