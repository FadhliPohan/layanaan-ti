//data Tabel
$.getJSON("/scrup/get", function (result) {
    console.log(result)
})
var table = $("#dataTable").DataTable({
    // columnDefs: [{
    //     targets: 0,
    //     render: function (data, type, row) {
    //         return data.substr(0, 10);
    //     }
    // }],
    // bLengthChange: false,
    // ordering: false,
    processing: true,
    responsive:true,
    // serverSide: true,
    ajax: "/scrup/get",
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

// btn add

$('#btnAdd').click(function () {
    $('#add').modal('show');
    $("#formAdd")[0].reset();
    // $('#TableUser tr').remove();
    // $('#listPekerja').val('');
})

//btnview
$('#dataTable').on('click', 'tbody tr .view', function () {

     $('#view').modal('show');
    $("#formUpdate")[0].reset();
    // let id = $(this).val();

    // $.ajax({
    //     url: `/scrup/${id}`,
    //     type: "GET",
    //     cache: false,
    //     success: function (result) {
    //         console.log(result);
    //         //fill data to form
    //         $('#id').val(result.data.id);
    //         $('#tanggal_pelaksanaan1').val(result.data.tanggal_pelaksanaan);
    //         $('#jam_mulai1').val(result.data.jam_mulai);
    //         $('#jam_akhir1').val(result.data.jam_akhir);
    //         $('#petugas_umum1').val(result.data.petugas_umum);
    //         $('#petugas_hiperkes1').val(result.data.petugas_hiperkes);
    //         $('#kendala1').val(result.data.kendala);

    //         //open modal
    //         $('#modal_view_flushing').modal('show');
    //     }
    // });
});
