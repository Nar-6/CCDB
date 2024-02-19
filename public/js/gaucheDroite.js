$(document).ready(function() {
    // Gestionnaire d'événement pour le bouton précédent
    $('#prevBtn').click(function() {
        updateI('decrement');
    });

    // Gestionnaire d'événement pour le bouton suivant
    $('#nextBtn').click(function() {
        updateI('increment');
    });

    // Fonction pour mettre à jour la valeur de $i en appelant le contrôleur
    function updateI(action) {
        // Envoyez une requête AJAX pour mettre à jour $i
        $.ajax({
            url: "{{ route('update-i') }}'",
            method: 'POST',
            data: { action: action, i: $('#current-i').val() },
            success: function(response) {
                // Mettez à jour la valeur de $i avec la nouvelle valeur renvoyée par le contrôleur
                $('#current-i').val(response.i);
            },
            error: function(xhr, status, error) {
                // Gérer les erreurs, si nécessaire
            }
        })
    }
})
