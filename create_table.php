<?php
require 'connect.php';

if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

$sql = "CREATE TABLE StRec (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP,
        program VARCHAR(255),
        gpa DECIMAL(3, 2),
        CHECK (gpa >= 0 AND gpa <= 4.33)
        )";

if (mysqli_query($conn, $sql)) {
        echo "Table Student Records created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

mysqli_close($conn);

?>