<?php
session_start();

// Check if status is set and not empty
if (isset($_POST["status"]) && !empty($_POST["status"])) {
    // Sanitize and validate status
    $status = $_POST["status"] == "present" ? "oui" : "non";

    // Connect to database
    include "./connect.php"; // Adjust the path as needed

    // Perform database update
    $sql = "UPDATE etudiant SET absence = '$status' WHERE 1"; // Modify this query based on your table structure
    if ($conn->query($sql) === TRUE) {
        echo "Votre statut de présence a été mis à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour du statut de présence : " . $conn->error;
    }

    // Close database connection
    $conn->close();
} else {
    echo "Erreur : Le statut de présence n'a pas été spécifié.";
}
?>
