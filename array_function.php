<?php

// Craete Array 
$nameArray = array("Rahul" , "Satish" , "Gautam" , "Bikas" , "Roshan" ,) ; 
echo print_r($nameArray) ; 
echo "<br>" ; 
// 1. count() Element in Array
echo count($nameArray) ; 
echo "<br>" ; 
// 2. sizeOf() -> Same as Count 
echo sizeof($nameArray);
echo "<br>" ; 

// 3. array_push() -> Push Value at the end of array 
echo "<h3> PUSH </h3>" ; 
array_push($nameArray,"Raja");
echo "<br>" ; 
echo print_r($nameArray) ; 
echo "<br>" ; 

// 4. array_pop() -> Remove last element
echo "<h3> Pop </h3>" ; 
array_pop($nameArray);
echo print_r($nameArray) ; 
echo "<br>" ; 



// 5. array_unshift($arr, $val) → Add value at the beginning
echo "<h3> UnShift </h3>" ; 
array_unshift($nameArray , "Abhimanyu");
echo print_r($nameArray) ; 
echo "<br>" ; 

// 6. array_shift($arr) → Remove first element

echo "<h3> Shift </h3>" ; 
array_shift($nameArray);
echo print_r($nameArray) ; 
echo "<br>" ; 


// 6. in_array($val, $arr) → Check if a value exists

echo "<h3> In Array </h3>" ; 
echo in_array("Gautam" , $nameArray);
echo "<br>" ; 

echo "<br>" ; 

$userDetails = ["name"=>"Rahul" , "age" => 24 , "course" => "MCA" , "city" => "Patna"] ; 
print_r($userDetails) ; 

// 7. array_search($val, $arr) → Find key of a value
echo "<h3> Find key of a value  </h3>" ; 
$key = array_search("MCA", $userDetails); 
echo $key; // print result
echo "<br>" ; 

// isset($arr['key']) → Check if a key exists
echo "<h3> Check Key Exit  </h3>" ; 
echo isset($userDetails['city']); 

echo "<br>" ; 

/* 

🔹 4. Sorting
sort($arr) → Sort ascending (values only)
rsort($arr) → Sort descending (values only)
asort($arr) → Sort ascending by values, keep keys
arsort($arr) → Sort descending by values, keep keys
ksort($arr) → Sort ascending by keys
krsort($arr) → Sort descending by keys

🔹 5. Combine & Split
array_merge($a1, $a2) → Merge arrays
array_combine($keys, $values) → Combine two arrays
array_slice($arr, $start, $length) → Extract part of an array
array_splice($arr, $start, $length, $replacement) → Remove/replace part of array


🔹 6. Filtering & Mapping
array_map($callback, $arr) → Apply function to each element
array_filter($arr, $callback) → Filter values using condition
array_reduce($arr, $callback) → Reduce array to a single value


🔹 7. Keys & Values
array_keys($arr) → Get all keys
array_values($arr) → Get all values
array_key_exists('key', $arr) → Check if key exists


🔹 8. Unique & Random
array_unique($arr) → Remove duplicate values
array_rand($arr, $num) → Pick random key(s)


🔹 9. Other Useful
implode(",", $arr) → Convert array to string
explode(",", $string) → Convert string to array
array_reverse($arr) → Reverse array order


 */



?>