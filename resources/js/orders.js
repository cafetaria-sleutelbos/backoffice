import axios from 'axios';

function initTable() {
    return $('#orders_table').DataTable({
        'lengthChange': false,
        pageLength: 25,
        "stripeClasses": ['dt_even', 'dt_odd'],
        "columnDefs": [
            {
                orderData: [5],
                targets: 4
            },
            {
                targets: 5,
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
            window.location.href = '/orders/' + $(this).attr('data-item-id');
        })
    }
});
