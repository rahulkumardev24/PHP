<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditional</title>
</head>

<body>

    <div>
        <h3>PHP Conditional Statement </h3>
        <?php

        // Variable Define 
        $age = 21;

        echo "<br>";

        if ($age > 25) {
            echo "Go To party";
        } else if ($age == 10) {
            echo "Go To School";
        } else if ($age == 21) {
            echo "Go To Collage";
        } else {
            echo "PLAY PLAY PLAY";
        }


        echo "<br>";
        echo "<h3> PHP switch Statement </h3>";


        $weekday = "Monday";

        switch ($weekday) {
            case  "Monday":
                echo "Today is Monday";
                break;

            case  "Tuesday":
                echo "Today is Tuesday";

            case "Wednesday":
                echo "Today is Wednesday";

            case "Thursday";
                echo "Today is Thrusday";

            case "Friday":
                echo "Today is Friday";

            default:
                echo "Today is Holly Day";
        }

        echo "<h2> PHP While Loop </h2>";

        echo "<h3> While Loop </h3>";
        $num1 = 0;
        $num2 = 10;
        while ($num1 <= $num2) {
            $num1++;
            echo "$num1 ";
        }
        echo "<br>";
        echo "<h3> While Loop break </h3>";


        $endNumber = 10;
        $startNumber = 0;
        while ($startNumber <= $endNumber) {
            if ($startNumber == 5) break;
            $startNumber++;
            echo "$startNumber ";
        }

        echo "<br>";
        echo "<h3> While Loop continue </h3>";

        $end = 10;
        $start = 0;
        while ($start <= $end) {
            $start++;
            if ($start == 5) continue;
            echo "$start ";
        }

        echo "<br>";
        echo "<h3> While Loop endWhile </h3>";

        $x = 1;
        while ($x <= 10) :
            echo "$x ";
            $x++;
        endwhile;

        echo "<br>";
        echo "<h3> do While Loop </h3>";


        $numberFirst = 1;
        do {
            echo "$numberFirst ";
            $numberFirst++;
        } while ($numberFirst <= 10);

        echo "<br>";
        echo "<h3> The PHP break Statement Do While </h3>";

        $doWhileNumber = 1;
        do {
            if ($doWhileNumber == 5) break;
            echo "$doWhileNumber ";
            $doWhileNumber++;
        } while ($doWhileNumber <= 10);



        echo "<br>";
        echo "<h3> The PHP continue  Do While </h3>";

        $mynum = 0;
        do {
            $mynum++;
            if ($mynum == 5) continue;
            echo "$mynum ";
        } while ($mynum <= 10);



        echo "<br>";
        echo "<h3> PHP For Loop </h3>";

        for ($i = 0; $i <= 10; $i++) {
            echo "$i ";
        }


        echo "<br>";
        echo "<h3> PHP For Loop Brek </h3>";


        for ($i = 0; $i <= 10; $i++) {
            echo "$i ";
            if ($i == 5) break;
        }

        echo "<br>";
        echo "<h3> PHP For Loop Continue </h3>";

        for ($i = 0; $i <= 10; $i++) {
            if ($i == 5) continue;
            echo "$i ";
        }

         echo "<br>";
        echo "<h3> PHP foreach Loop </h3>";

        $colors = array("red", "green", "blue", "yellow");
        foreach($colors as $myColors){

            echo "$myColors " ; 

        }










        ?>

    </div>


</body>

</html>