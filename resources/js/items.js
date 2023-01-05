import axios from 'axios';

function initTable() {
    return $('#items_table').DataTable({
        'lengthChange': false,
        pageLength: 25,
        "stripeClasses": ['dt_even', 'dt_odd'],
        "columnDefs": [
            {
                orderData: [6],
                targets: 5
            },
            {
                targets: 6,
                visible: false,
            },
        ],
        createdRow: function (row, data, index) {
            //
            // if the second column cell is blank apply special formatting
            //
            if (data[0] >= 0) {
                $(row).addClass('table_row');
                $(row).attr('data-item-id', data[0]);
            }
        }
    });

}

$(document).ready(function () {
    let table = initTable()

    if(table){
        table.on('click', '.table_row', function (){
            window.location.href = '/items/' + $(this).attr('data-item-id');
        })

        $('#items_export_csv').on('click', function () {
            window.location.href = '/items-export';
        })
    }
});
