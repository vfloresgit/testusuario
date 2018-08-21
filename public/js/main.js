$(document).ready( function () {
    $('#table_id').DataTable();
} );

$('#table_id').DataTable( {
    language: {

        processing:     "Traitement en cours...",
        search:         "Buscar&nbsp;:",
        lengthMenu:    "Mostrar _MENU_ elementos",
        info:           "Mostrando  _START_ a _END_ de _TOTAL_ elementos",
        infoEmpty:      "Mostrando  0 a 0 de 0 elementos",
        infoFiltered:   "(filtradas de _MAX_ entradas en total)",
        infoPostFix:    "",
        loadingRecords: "Chargement en cours...",
        zeroRecords:    "No se encontraron registros coincidentes",
        emptyTable:     "No hay ningun registro en esta tabla",
        paginate: {
            first:      "Premier",
            previous:   "Anterior",
            next:       "Siguiente",
            last:       "Dernier"
        },
        aria: {
            sortAscending:  ": activer pour trier la colonne par ordre croissant",
            sortDescending: ": activer pour trier la colonne par ordre décroissant"
        }
    }
} );
