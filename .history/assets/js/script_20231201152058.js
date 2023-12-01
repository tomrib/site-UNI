
    // Sélectionnez le formulaire
    var form = document.querySelector('form');

    // Ajoutez un gestionnaire d'événements pour l'événement de soumission du formulaire
    form.addEventListener('submit', function (event) {
        // Empêche le comportement par défaut du formulaire (rafraîchissement de la page)
        event.preventDefault();

        // Ajoutez ici le code pour traiter la soumission du formulaire, par exemple, envoi de données via AJAX

        // Vous pouvez également fermer la fenêtre modale si nécessaire
        var modal = new bootstrap.Modal(document.getElementById('request'));
        modal.hide();
    });


