<?php

echo "<h2>Variables</h2>";

$name = "Kaushik";
$age = 20;

echo "Name: $name <br>";
echo "Age: $age <br><br>";

echo "<h2>Arrays</h2>";

$colors = ["Red", "Blue", "Green"];
echo $colors[1]."<br>";

$student = [
    "name"=>"Kaushik",
    "branch"=>"Data Science"
];

echo $student["branch"]."<br><br>";

echo "<h2>Conditions</h2>";

$marks = 80;

if($marks >= 40)
{
    echo "Pass<br>";
}
else
{
    echo "Fail<br>";
}

echo "<br><h2>Loops</h2>";

for($i=1;$i<=5;$i++)
{
    echo $i." ";
}

echo "<br><br>";

$fruits = ["Apple","Mango","Orange"];

foreach($fruits as $fruit)
{
    echo $fruit."<br>";
}

echo "<br><h2>Functions</h2>";

function square($n)
{
    return $n*$n;
}

echo "Square of 5 = ".square(5);

include("header.php");

?>