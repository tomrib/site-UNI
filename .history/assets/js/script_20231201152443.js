<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Sélectionnez le formulaire
        var form = document.querySelector('form');

        // Ajoutez un gestionnaire d'événements pour l'événement de soumission du formulaire
        form.addEventListener('submit', function (event) {
            // Empêche le comportement par défaut du formulaire (rafraîchissement de la page)
            event.preventDefault();

            // Collecte les données du formulaire
            var formData = new FormData(form);

            // Utilisez la méthode fetch pour envoyer les données via AJAX
            fetch(form.action, {
                method: form.method,
                body: formData,
                headers: {
                    'Accept': 'application/json',
                    // Ajoutez d'autres en-têtes si nécessaire
                },
            })
            .then(response => response.json())
            .then(data => {
                // Traitement de la réponse JSON
                console.log(data);

                // Vous pouvez également fermer la fenêtre modale si nécessaire
                var modal = new bootstrap.Modal(document.getElementById('request'));
                modal.hide();
            })
            .catch(error => {
                // Gestion des erreurs
                console.error('Erreur lors de l\'envoi du formulaire:', error);
            });
        });
    });
</script>
