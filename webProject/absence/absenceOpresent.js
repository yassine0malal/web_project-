


const absentButton = document.getElementById('absent-button');
const presentButton = document.getElementById('present-button');
const messageDiv = document.getElementById('message');

function gg() 
{
           messageDiv.innerText = "L'etudient est ABSENT !!";
           absentButton.remove();
           presentButton.remove();
};

presentButton.addEventListener('click', function()
{
   messageDiv.innerText = "L'etudient est PRESENT !!";
   absentButton.remove();
   presentButton.remove();
   let h1=document.getElementsByClassName('h')[0];
   let h2=document.getElementsByClassName('h')[1];
   h1.remove();
   h2.remove();
   afficherNombresAleatoires();
 });
 
       function afficherNombresAleatoires() {
   var listeNombresAleatoires = document.createElement('ul');

   for (let i = 0; i < 5; i++) {
       var nombreAleatoire = Math.floor(Math.random() * 100) + 1; // Génère un nombre aléatoire entre 1 et 100
       var listItem = document.createElement('li');

       var radio = document.createElement('input');
       radio.type = "radio";
       radio.name = "choixNombre"; // Assure que les boutons radio sont mutuellement exclusifs
       radio.value = nombreAleatoire;
       radio.addEventListener('change', function() {
           if (this.checked) {
               alert("Vous avez choisi le nombre : " + this.value);
               // Vous pouvez ajouter ici d'autres actions à effectuer lorsque l'étudiant choisit un nombre
           }
       });

       var label = document.createElement('label');
       label.textContent = nombreAleatoire;

       listItem.appendChild(radio);
       listItem.appendChild(label);
       listeNombresAleatoires.appendChild(listItem);
   }

   document.body.appendChild(listeNombresAleatoires);
}

       
        