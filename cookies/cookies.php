<?php

// Set cookie (expires in 1 day)
setcookie("fruit", "apple", time() + 86400);

if (isset($_COOKIE['fruit'])) {
    echo "Current Cookie is: " . $_COOKIE['fruit'] . "<br>";

    // Show all cookies
    echo "All Cookies: ";
    print_r($_COOKIE);
} else {
    echo "No Cookie";
}
