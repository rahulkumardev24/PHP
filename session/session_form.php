<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session Form</title>
</head>
<body>

<form action="" method="post">
    <input type="text" name="username" placeholder="username"> 
    <br><br>
    <button name="button" value="set">Set Session</button>
    <br><br>
    <button name="button" value="get">Get Session</button>
    <br><br>
    <button name="button" value="delete">Delete Session</button>
</form>

</body>
</html>

<?php
// Start session
session_start();

if (isset($_POST['button'])) {
    if ($_POST['button'] == 'set') {
        $value = $_POST['username'];
        $_SESSION['username'] = $value;
        echo "Session set: " . $_SESSION['username'];
    }

    if ($_POST['button'] == 'get') {
        if (isset($_SESSION['username'])) {
            echo " Session value: " . $_SESSION['username'];
        } else {
            echo " No session found!";
        }
    }

    if ($_POST['button'] == 'delete') {
        session_unset();  // remove all session variables
        session_destroy(); // destroy the session
        echo "🗑️ Session deleted!";
    }
}
?>
