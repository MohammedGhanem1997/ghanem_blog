$( document ).ready(function() {
    $('table').DataTable({
        "processing": true,
        "dom": 'lBfrtip',
        "buttons": [
            {
                extend: 'collection',
                text: 'Export',
                buttons: [
                    'copy',
                    'excel',
                    'csv',
                    'pdf',
                    'print'
                ]
            }
        ]
    });
});
