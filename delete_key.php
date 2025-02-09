<form action="" method="post">
        <label for="id">Enter ID to delete:</label><br>
        <input type="number" id="id" name="id" required><br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'connect.php';

    if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

    $id = $_POST['id'];
    $sql = "DELETE FROM StRec WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
            echo "Row $id deleted successfully";
        } else {
            echo "Error deleting rows " . mysqli_error($conn);
        }


    mysqli_close($conn);
}
?>