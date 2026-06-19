<?php

include("header.php");

$name="Kaushik";
$age=20;

echo "<h2>Name : $name</h2>";
echo "<h2>Age : $age</h2>";

$skills=array(
    "Python",
    "SQL",
    "HTML",
    "CSS",
    "JavaScript"
);

echo "<h2>Skills</h2>";

foreach($skills as $skill)
{
    echo $skill."<br>";
}

function square($x)
{
    return $x*$x;
}

echo "<br>";
echo "Square of 8 = ".square(8);

include("footer.php");

?>
