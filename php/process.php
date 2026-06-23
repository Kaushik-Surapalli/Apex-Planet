<?php

if(isset($_GET['name']))
{
    echo "<h2>GET Request</h2>";
    echo "Welcome ".$_GET['name'];
}

echo "<br><br>";

if(isset($_POST['email']))
{
    echo "<h2>POST Request</h2>";
    echo "Email: ".$_POST['email'];
}

?>