<head>
    <title>Table</title>
</head>

<h1>Table With HTML</h1>

<table border="2">Table


    <tr>
        <th>Sno</th>
        <th>Name</th>
        <th>Email</th>
    </tr>


    <tr>
        <td>1</td>
        <td>Rahul Kumar</td>
        <td>rahulsahu24@gmail.com</td>
    </tr>

    <tr>
        <td>2</td>
        <td>Satish Kumar</td>
        <td>satish@gmail.com</td>
    </tr>

    <tr>
        <td>3</td>
        <td>Raja Kumar</td>
        <td>raja@gmail.com</td>
    </tr>

</table>

<?php

echo "<h1>Table With PHP (Array Data )</h1>";

$users = [
    ["1", " Rahul", "Rahul@gmail.com"],
    ["2", " Satish", "satish@gmail.com"],
    ["3", " raja", "raja@gmail.com"],
    ["4", " Gautam", "gautam@gmail.com"],
    ["5", " Vikash", "vikash@gmail.com"]
];

echo "<table border = 1 >";
for ($i = 0; $i < count($users); $i++) {
    echo "<tr>";

    for ($j = 0; $j < count($users[$i]); $j++) {
        echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>