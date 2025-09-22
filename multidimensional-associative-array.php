<?php
$users = [
    ["name" => "Rahul", "age" => "28", "city" => "noida"],
    ["name" => "Satish", "age" => "32", "city" => "Patna"],
    ["name" => "Gautam", "age" => "222", "city" => "Bhopal"],
    ["name" => "Raja", "age" => "23", "city" => "Mp"],
];

// Display as key-value pairs
foreach ($users as $user) {
    foreach ($user as $key => $item) {
        echo "$key : $item ";
    }
    echo "<br>";
}

echo "<br><br><br>";

echo "<h1>Same Data in Table</h1>";

echo "<table border='1'>";
echo "<tr>";

// Table Headers
foreach (array_keys($users[0]) as $header) {
    echo "<th>$header</th>";
}
echo "</tr>";

// Table Rows
foreach ($users as $user) {
    echo "<tr>";
    foreach ($user as $item) {
        echo "<td>$item</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
