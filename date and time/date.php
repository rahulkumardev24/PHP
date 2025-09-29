<?php

echo "<h1>Date</h1>";
echo "<br>";
echo date("m");
echo "<br>";
echo date("M");

echo "<br>";
echo date("M Y");
echo "<br>";
echo date("D M Y");
echo "<br>";
echo date("d M Y");

echo "<br>";
echo "<h1>Time</h1>";
echo "<br>";

// echo date_default_timezone_get();
echo "<br>";

date_default_timezone_set("Asia/Kolkata");
echo "<br>";

echo date_default_timezone_get();

echo "<br>";
echo date("h");
echo "<br>";
echo date("h:i");
echo "<br>";
echo date("h:i:sa");
