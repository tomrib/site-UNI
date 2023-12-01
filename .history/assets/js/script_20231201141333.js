// Code pour ouvrir la modal
function ouvrirModal() {
    var modal = document.getElementById('request');
    modal.style.display = 'block'; // Définissez la propriété display sur 'block' pour afficher la modal
}

// Code pour fermer la modal
function fermerModal() {
    var modal = document.getElementById('maModal');
    modal.style.display = 'none'; // Définissez la propriété display sur 'none' pour cacher la modal
}

// Évitez de fermer la modal automatiquement
window.onload = function() {
    ouvrirModal(); // Appelez la fonction ouvrirModal() pour afficher la modal au chargement de la page
    // Vous pouvez également appeler ouvrirModal() en réponse à un événement utilisateur, par exemple, un clic sur un bouton.
};
