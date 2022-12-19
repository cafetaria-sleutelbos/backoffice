import axios from 'axios';
import modal from './modal'

function initTable() {
    return $('#scans_table').DataTable({
        'lengthChange': false, "stripeClasses": ['dt_even', 'dt_odd'], "columnDefs": [{
            orderData: [3], targets: 2
        }, {
            targets: 3, visible: false,
        }, {"width": "20%", "targets": [0, 2]}], createdRow: function (row, data, index) {
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

function updateRealTime() {
    // axios({
    //     method: 'post',
    //     url: '/scans/12345',
    //     data: {
    //         firstName: 'Fred',
    //         lastName: 'Flintstone'
    //     }
    // });
}

$(document).ready(function () {
    let table = initTable()

    // if (table.context) {
    //     setInterval(updateRealTime, 2000);
    // }

    if (table) {
        $('#scans_table_wrapper').on('click', '.table_row', function () {
            window.location.href = '/scans/' + $(this).attr('data-item-id');
        })

        $('#scans_export_csv').on('click', function () {
            window.location.href = '/scans-export';
        })

        $('#scans_download_img').on('click', function () {
            window.location.href = '/scans-download-images';
        })
    }
    modal($('#exampleModal'))
});
