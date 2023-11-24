<?php
include('connex.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $codclt = $_POST["codclt"];
    $nom = $_POST["nom"];
    $adresse = $_POST["adresse"];

    // SQL query to insert data into the client table
    $sql = "INSERT INTO client (CODCLT, Nom_CLT, ADRS_CLT) VALUES ('$codclt', '$nom', '$adresse')";

    if ($conn->query($sql) === TRUE) {
        echo "Client added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
