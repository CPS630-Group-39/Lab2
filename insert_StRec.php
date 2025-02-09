<?php
require 'connect.php';

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$sql = "INSERT INTO StRec 
VALUES
(1, 'John', 'Doe', 'john.doe@gmail.com', '2024-07-08', 'computer science', 4.00),
(2, 'Donald', 'Trump', 'trump@gmail.com', '2000-11-08', 'business', 4.33),
(3, 'Jessica', 'Doe', 'jessica@hotmail.com', '2015-09-25', 'engineering', 3.00)
";

if (mysqli_query($conn, $sql)) {
        echo "Rows inserted into table Student Records successfully";
    } else {
        echo "Error inserting rows: " . mysqli_error($conn);
    }


mysqli_close($conn);

?>