$(document).ready(function () {
    // Sélectionnez le formulaire
    var form = $('form');

    // Ajoutez un gestionnaire d'événements pour l'événement de soumission du formulaire
    form.submit(function (event) {
        // Empêche le comportement par défaut du formulaire (rafraîchissement de la page)
        event.preventDefault();

        // Collecte les données du formulaire
        var formData = form.serialize();

        // Utilisez jQuery.ajax pour envoyer les données via AJAX
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: formData,
            success: function (data) {
                // Traitement de la réponse
                console.log(data);

                // Vous pouvez également fermer la fenêtre modale si nécessaire
                var modal = new bootstrap.Modal(document.getElementById('request'));
                modal.hide();
            },
            error: function (error) {
                // Gestion des erreurs
                console.error('Erreur lors de l\'envoi du formulaire:', error);
            }
        });
    });
});