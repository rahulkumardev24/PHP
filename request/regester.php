<?php
echo "<h1> Register Data </h1>";

print_r($_REQUEST);
echo "<br>";
print_r($_REQUEST['username']);

echo "<h1> Apply Loop  </h2>";

if($_REQUEST){
foreach ($_REQUEST as $key => $data) {
    echo $key . " : " . $data;
    echo "<br/>";

}

}
