$(document).ready(function(){
    $('#data_table').Tabledit({
        deleteButton: false,
        editButton: false,
        columns: {
            identifier: [0, 'id'],
            editable: [[1, 'fecha'], [2, 'id_medio'], [3, 'impresiones'], [4, 'clicks'],[5, 'ctr'],[6, 'coste']]
        },
        hideIdentifier: true,
        url: '../model/editarpubli.php'
    });
});

