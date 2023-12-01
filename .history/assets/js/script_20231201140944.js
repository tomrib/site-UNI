


    document.addEventListener('DOMContentLoaded', function () {
        // Vérifie s'il y a des erreurs dans le formulaire
        <?php if (!empty($formError)) : ?>
            // Affiche la modal
            var modal = document.getElementById('votreModalID'); // Remplacez 'votreModalID' par l'ID de votre modal
            var modalInstance = new bootstrap.Modal(modal);
            modalInstance.show();
        <?php endif; ?>

        // Ajoute un gestionnaire d'événement pour réinitialiser la modal lorsque l'utilisateur la ferme
        var modalElement = document.getElementById('votreModalID'); // Remplacez 'votreModalID' par l'ID de votre modal
        modalElement.addEventListener('hidden.bs.modal', function () {
            location.reload(); // Cela recharge la page, réinitialisant ainsi le formulaire
        });
    });
