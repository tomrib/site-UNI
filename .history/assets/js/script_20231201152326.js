
    // Sélectionnez le formulaire
    var form = document.querySelector('#submitForm');

    // Ajoutez un gestionnaire d'événements pour l'événement de soumission du formulaire
    form.addEventListener('click', function () {
        // Empêche le comportement par défaut du formulaire (rafraîchissement de la page)
        form.preventDefault();

        // Ajoutez ici le code pour traiter la soumission du formulaire, par exemple, envoi de données via AJAX

        // Vous pouvez également fermer la fenêtre modale si nécessaire
        var modal = new bootstrap.Modal(document.getElementById('request'));
        modal.hide();
    });


