<?php
session_start(); 
include './connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = isset($_POST['nom']) ? $_POST['nom'] : ""; 
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : ""; 
    $motDePasse = isset($_POST['MotDePasse']) ? $_POST['MotDePasse'] : ""; 

    if ((empty($nom) || empty($prenom) || empty($motDePasse))) {
        $_SESSION['error_message'] = "Please fill in all required fields.";
            header("Location: home.php");
            exit();
        }

        $sql = "SELECT * FROM prof WHERE nome='$nom' AND prenom='$prenom' AND mot_pass='$motDePasse'";

    $result = $conn->query($sql);

    if ($result === false) {
        $_SESSION['error_message'] = "Database error: " . $conn->error;
        header("Location: home.php");
        exit();
    }

    if ($result->num_rows > 0) {
            header("Location: profPage.php");
            exit(); 
        }
else {
        $_SESSION['error_message'] = "Invalid credentials!";
            header("Location: home.php");
            exit();
        }
    $conn->close();
}
?>
