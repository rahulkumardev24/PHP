<?php

if ($_GET) {
    echo "<h2> Welcome to PHP File </h2>";
    echo   "User Name :" . $_GET['username'];
    echo "<br>";
    echo  "Password : " . $_GET['password'];
}
