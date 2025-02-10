<?php
require 'connect.php';

try {
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT id, firstname, lastname, email, program, gpa FROM StRec WHERE id IN (1,3)";
    
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        echo "<table border='1'>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Program</th>
                    <th>GPA</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['firstname']}</td>
                    <td>{$row['lastname']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['program']}</td>
                    <td>{$row['gpa']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found.";
    }
} catch (Exception $e) {
    echo "Error caught: " . $e->getMessage();
}

mysqli_close($conn);
?>
