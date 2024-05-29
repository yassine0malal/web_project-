document.getElementById("chooseForm").addEventListener("submit", function(event) {
    event.preventDefault(); 

    var selectedRole = document.querySelector('input[name="userType"]:checked').value;

    if (selectedRole === "etudiant") {
        window.location.href = "./etudiant/EtLogin.php"; 
    } else if (selectedRole === "professeur") {
        window.location.href = "./prof/prLooogin.php"; 
    }
});

