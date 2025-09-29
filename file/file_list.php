<?php
echo "<h2> Print List For File </h2>" ; 
$path = "file_create/myFiles";
$items = scandir($path) ; 
print_r($items);
echo "<br>" ; 
// Remove dot (. ,..)
$items = array_diff($items,array("." , ".."));
print_r($items);

echo "<h2>All File List </h2>" ; 

echo "<br>" ; 
foreach($items as $item){
    echo $item ; 
    echo "<br>" ; 

}
echo "<br>" ; 
echo "<br>" ; 

foreach($items as $item){
    echo "<a href = ./file_create/myFiles/$item>$item</a>" ; 
    echo "<br>" ; 

}

?>