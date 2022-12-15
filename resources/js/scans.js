import axios from 'axios';

function initTable() {
    return $('#scans_table').DataTable({
        'lengthChange': false,
        "stripeClasses": ['dt_even', 'dt_odd'],
        "columnDefs": [
            {
                orderData: [3],
                targets: 2
            },
            {
                targets: 3,
                visible: false,
            },
            {"width": "20%", "targets": [0, 2]}
        ]
    });

}

function updateRealTime() {
    console.log('update2')
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

    $('#scans_export_csv').on('click', function () {
        console.log('ait')
        window.location.href = '/scans-export';
    })
});
