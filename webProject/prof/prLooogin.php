<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./absStyle.css">
</head>
<body>
    <form action="./profPage.php" method="post" class="container" id="loginForm">
        <h4>Inscription</h4>
        <hr>
    
        <div>
            <div>
                <label for="f">Nom</label><br>
                <input type="text" name="nom" id="f" placeholder="Entrer votre Nom"><br>
            </div>
            <div>
                <label for="l">Prenom:</label><br>
                <input type="text" name="prenom" id="l" placeholder="Entrer votre Prénom"><br>
            </div>
        <div>
            <label for="p">Mot de passe:</label><br>
            <input type="password" name="MotDePasse" id="p" placeholder="Entrer votre mot de passe"><br>  
        </div>
        
        <input type="submit" value="submit" id="sub">  
    </form>

    
</body>
</html>
<?php
    session_start();
    if (isset($_SESSION['error_message'])) {
        echo "<br><p class='error-message'>" . $_SESSION['error_message'] . "</p>";
        unset($_SESSION['error_message']); // Clear the error message
    }
    ?>
