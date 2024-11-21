$('#datatableUser').DataTable( {
    ajax: {
        url: 'http://localhost/trakindo.tech/user/get_data_users',
        dataSrc: ''
    },
    columns: [
        {
            data: null,
            render: function (data, type, row, meta) {
                return meta.settings._iDisplayStart + meta.row + 1;
            },
            orderable: false
        },
        { data: 'id_ptfi' },
        { data: 'username' },
        { data: 'name' },
        { 
            data: 'position',
            render: function ( data, type, row ) {
                if (data == 1) {
                    return 'Technician Technology';
                } else if (data == 2) {
                    return 'Analyst Technology';
                } else if (data == 3) {
                    return 'Foreman';
                } else if (data == 4) {
                    return 'Supervisor';
                } else {
                    return '';
                }
            }
        },
        { 
            render: function ( data, type, row ) {
                return '<button class="btn btn-primary" id="buttonUsers" data-bs-toggle="modal" data-bs-target="#myModalUsers" data-row=\'' + JSON.stringify(row, function(key, value) {
                    if (typeof value === 'string') {
                        return value.replace(/"/g, '&quot;');
                    }
                    return value;
                }) + '\'>' + 'Detail</button>';
            }
        }
    ],
    rowCallback: function(row, data, index) {
        var info = this.api().page.info();
        var page = info.page;
        var length = info.length;
        var start = page * length;
        
        $(row).find('td:eq(0)').text(start + index + 1);
    }
} );

var button = document.getElementById('buttonUsers');
button.addEventListener('click', function() {
    var rowId = button.getAttribute('data-row');
    // Use the rowId to populate the modal content
    var modalBody = document.getElementById('myModalUsers').querySelector('.modal-body');
    modalBody.innerHTML = 'Row ID: ' + rowId;
});