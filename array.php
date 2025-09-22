 <?php

    //  Array 
    $userName = ["Rahul", "Satish", "Gautam", "Pankaj", "Raja"];

    echo "<h2> List OF Student  </h2>";

    echo $userName[0];
    echo "<br>";

    echo $userName[1];
    echo "<br>";

    echo $userName[2];


    echo "<h1> user print using LOOP </h1>";          

    // Apply Loop 

    foreach ($userName as $user) {
        echo "<h2 style = 'color:red'> $user <br> </h2>";
    }


    // ------------- Associative array ------------------- ///  


    echo   "<h1> Array with Key value pair </h1>";


    $userDetails = [
        "name" => "Rahul Kumar Sahu",
        "age" => 21,
        "email" => "rahulsahudev24@gmail.com"
    ];

    
    echo "Name : " . $userDetails['name'];
    echo "<br>";
    echo "Age : " . $userDetails['age'];
    echo "<br>";
    echo "Email : " . $userDetails['email'];
    
    echo   "<h1> Array with Key value pair LOOP </h1>";
    foreach ($userDetails as $d) {
        echo $d;
        echo "<br>";
    }
     echo "<br>";
      echo "<br>";
       echo "<br>";
    

        foreach ($userDetails as $key => $data) {
        echo $key . " : ". $data;
        echo "<br>";
    }
    /// ------------ Multidimensional Array ------------- /// 

echo "<h1> Multidimensional (2-D) Array </h1>";

$student = [
    [100 , "Rahul , rahul@gmauil.com , Patna"],
    [101 , "Satish , satish@gmauil.com , bihar"],
    [102 , "Raja , raja@gmauil.com , bhopal"],
    [103 , "Bikash , bikash@gmauil.com , indor"],
];

echo "<pre>";
print_r($student);
echo "</pre>";

echo "<h2> Print (2-D) Array Using LOOP </h2>";

/// --- Outer loop ----- // 
for($i = 0; $i < count($student); $i++) {
    // ---- inner loop 
    // For each row in student array
    for($j = 0; $j < count($student[$i]); $j++) {
        echo $student[$i][$j] ." ";
    }
    echo "<br>";
}





    ?>