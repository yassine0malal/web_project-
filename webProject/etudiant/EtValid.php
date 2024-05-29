<?php
session_start(); 
include './connect.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : ""; 
    $codeApoge = isset($_POST['CodeApoge']) ? $_POST['CodeApoge'] : ""; 
    $motDePasse = isset($_POST['MotDePasse']) ? $_POST['MotDePasse'] : "";

    // Check if any required fields are empty
    if ((empty($nom) || empty($prenom) || empty($motDePasse || empty($codeApoge))))
    {
        $_SESSION['error_message'] = "Please fill in all required fields.";
            header("Location: EtLogin.php");
        exit();
    }


    $sql = "SELECT * FROM etudiant WHERE code='$codeApoge' AND mot_password  ='$motDePasse'";
    $result = $conn->query($sql);

    if ($result === false) {
        $_SESSION['error_message'] = "Database error: " . $conn->error;
        header("Location: EtLogin.php");
        exit();
    }

    if ($result->num_rows > 0) {
            header("Location: absenceOpresent.php");
            exit(); 
        }
    } else {
        $_SESSION['error_message'] = "Invalid credentials!";
            header("Location: EtLogin.php");
        exit(); 
    }
    $conn->close();
?>
