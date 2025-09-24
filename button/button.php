<!DOCTYPE html>
<html lang="en">

<head>

    <title>Function call </title>
</head>

<body>
    <form action="./button.php" method="post">
        <button name="button" value="btn1">Call Function</button>


    </form>

</body>

</html>

<?php
if (isset($_POST['button'])){
    btn_click_test();

}

function btn_click_test(){
    echo "Function click on Button click" ; 
}
?>