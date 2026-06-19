<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "portfolio_db"
);

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        echo "<h3>User Details</h3>";

        echo "ID : " . $row["id"] . "<br>";
        echo "Name : " . $row["name"] . "<br>";
        echo "Email : " . $row["email"] . "<br>";

        echo "<hr>";
    }

} else {

    echo "No records found.";

}

mysqli_close($conn);

?>