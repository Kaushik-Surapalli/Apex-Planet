<?php

include("db_connect.php");


if (!isset($conn) || !$conn) {
    // Default XAMPP MySQL credentials; adjust database name if needed
    $conn = mysqli_connect('localhost', 'root', '', 'apex_planet');
    if (!$conn) {
        die('Database connection failed: ' . mysqli_connect_error());
    }
}

echo "<h2>INSERT</h2>";

$sql = "INSERT INTO students(name, age, course)
VALUES('Kaushik', 20, 'Data Science')";

if(mysqli_query($conn, $sql))
{
    echo "Record inserted.<br><br>";
}

echo "<h2>SELECT</h2>";

$result = mysqli_query($conn, "SELECT * FROM students");

while($row = mysqli_fetch_assoc($result))
{
    echo "ID: ".$row['id']."<br>";
    echo "Name: ".$row['name']."<br>";
    echo "Age: ".$row['age']."<br>";
    echo "Course: ".$row['course']."<br><br>";
}

echo "<h2>UPDATE</h2>";

$sql = "UPDATE students
SET course='AI & DS'
WHERE name='Kaushik'";

if(mysqli_query($conn, $sql))
{
    echo "Record updated.<br><br>";
}

echo "<h2>SELECT AFTER UPDATE</h2>";

$result = mysqli_query($conn, "SELECT * FROM students");

while($row = mysqli_fetch_assoc($result))
{
    echo "ID: ".$row['id']."<br>";
    echo "Name: ".$row['name']."<br>";
    echo "Age: ".$row['age']."<br>";
    echo "Course: ".$row['course']."<br><br>";
}

echo "<h2>DELETE</h2>";

$sql = "DELETE FROM students
WHERE name='Kaushik'";

if(mysqli_query($conn, $sql))
{
    echo "Record deleted.";
}

mysqli_close($conn);

?>