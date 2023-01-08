//data Tabel
$.getJSON("/aduan/get", function (result) {
    console.log(result)
})
var table = $("#dataTable").DataTable({
    processing: true,
    responsive:true,
    // serverSide: true,
    ajax: "/aduan/get",
    columns: [
        {
            data: 'id',
            render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            },
            className: "text-center"
        },
        {
            data: 'nomor_aduan',
            className:"text-center"
        },
        {
            data: 'nama_pengadu',
        },
        {
            data: 'nama_teknisi',
        },
        {
            data: 'jenis_aduan',
        },
      
        {
            data: 'id',
            render: function (data) {
                return "<div class='btn-group block'>" +
                    "<button type='button' class='btn btn-warning view' id='btn-view-modal' aku='" + data + "' value='" + data + "'><i class='fa fa-eye'></i></button>" +
                    "<button type='button' class='btn btn-danger delete' title='Hapus Data' value='" + data + "'><i class='fa fa-trash'></i></button>" +
                    // "<button type='button' class='btn btn-sm publish' title='Publish' value='" + data + "'><i class='fa fa-paper-plane'></i></button>" +
                    "</div>";
            },
            className: "text-center"
        },

    ]
});