//data Tabel
$.getJSON("/inventaris/get", function (result) {
    console.log(result)
})
var table = $("#dataTable").DataTable({
    processing: true,
    responsive:true,
    // serverSide: true,
    ajax: "/inventaris/get",
    columns: [
        {
            data: 'id',
            render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            },
            className: "text-center"
        },
         {
            data: 'nama_barang',
        },
        {
            data: 'jenis_barang',
        },
        {
            data: 'nomor_inventaris',
        },
        {
            data: 'id_user',
            className:"text-center"
        },
        {
            data: 'lokasi_pengguna',
            render: function (data, type, row) {
                return data.length > 15 ?
                    data.substr(0, 15) + '…' :
                    data;
                }
        },
      
        {
            data: 'id',
            render: function (data) {
                return "<div class='btn-group blocks'>" +
                    "<button type='button' class='btn btn-warning view' id='btn-view-modal' aku='" + data + "' value='" + data + "'><i class='fa fa-eye'></i></button>" +
                    "<button type='button' class='btn btn-danger delete' title='Hapus Data' value='" + data + "'><i class='fa fa-trash'></i></button>" +
                    // "<button type='button' class='btn btn-sm publish' title='Publish' value='" + data + "'><i class='fa fa-paper-plane'></i></button>" +
                    "</div>";
            },
            className: "text-center"
        },

    ]
});