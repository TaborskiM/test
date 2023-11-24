<?php
include('connex.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $codclt = $_POST["codclt"];

    // SQL query to delete data from the client table
    $sql = "DELETE FROM client WHERE CODCLT = '$codclt'";

    if ($conn->query($sql) === TRUE) {
        echo "Client deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
