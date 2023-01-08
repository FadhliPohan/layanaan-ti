//Data Table
$.getJSON("/sperpat/get", function (result) {
    console.log(result)
})

// $('#dataTabelSperpat').DataTable({
// processing: true,
// serverSide: true,
// ajax: "/sperpat/get",
// columns: [
//         {
//             data: 'id',
//             render: function (data, type, row, meta) {
//                 return meta.row + meta.settings._iDisplayStart + 1;
//             },
//             className: "text-center"
//         },
//         {
//             data: 'nama',
//         },
//         {
//             data: 'no_inventaris',
//         },
//         {
//             data: 'qty',
//         },
//         {
//             data: 'tanggal_pembelian',
//         },
//         {
//             data: 'jenis_barang',
//         },
        
//         {
//             data: 'id',
//             render: function (data) {
//                 return "<div class='btn-group blocks'>" +
//                     "<button type='button' class='btn btn-sm view' id='btn-view-modal' aku='" + data + "' value='" + data + "'><i class='fa fa-eye'></i></button>" +
//                     "<button type='button' class='btn btn-sm delete' title='Hapus Data' value='" + data + "'><i class='fa fa-trash-o'></i></button>" +
//                     // "<button type='button' class='btn btn-sm publish' title='Publish' value='" + data + "'><i class='fa fa-paper-plane'></i></button>" +
//                     "</div>";
//             },
//             className: "text-center"
//         },

//     ],
// order: [[0, 'desc']]
// });



//init the table
var table = $("#dataTableSperpat").DataTable({
    processing: true,
    responsive:true,
    // serverSide: true,
    ajax: "/sperpat/get",
    columns: [
        {
            data: 'id',
            render: function (data, type, row, meta) {
                return meta.row + meta.settings._iDisplayStart + 1;
            },
            className: "text-center"
        },
        {
            data: 'nama',
        },
        {
            data: 'no_inventaris',
        },
        {
            data: 'qty',
        },
        {
            data: 'tanggal_pembalian',
        },
        {
            data: 'jenis_barang',
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

// new $.fn.dataTable.FixedHeader( table );

//bind to boostrap panel shown event and recalc
// $table.parent().closest('.panel-collapse').on('shown.bs.collapse', function () {
//     $table.DataTable().columns().responsive.recalc();
// });




//  $(function () {
     
//       $.ajaxSetup({
//           headers: {
//               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//           }
//     });
    
//     var table = $('.dataTableSperpat').DataTable({
//         processing: true,
//         serverSide: true,
//         ajax: "sperpat/get",
//            columns: [
//         {
//             data: 'id',
//             render: function (data, type, row, meta) {
//                 return meta.row + meta.settings._iDisplayStart + 1;
//             },
//             className: "text-center"
//         },
//         {
//             data: 'nama',
//         },
//         {
//             data: 'no_inventaris',
//         },
//         {
//             data: 'qty',
//         },
//         {
//             data: 'tanggal_pembelian',
//         },
//         {
//             data: 'jenis_barang',
//         },
        
//         {
//             data: 'id',
//             render: function (data) {
//                 return "<div class='btn-group blocks'>" +
//                     "<button type='button' class='btn btn-sm view' id='btn-view-modal' aku='" + data + "' value='" + data + "'><i class='fa fa-eye'></i></button>" +
//                     "<button type='button' class='btn btn-sm delete' title='Hapus Data' value='" + data + "'><i class='fa fa-trash-o'></i></button>" +
//                     // "<button type='button' class='btn btn-sm publish' title='Publish' value='" + data + "'><i class='fa fa-paper-plane'></i></button>" +
//                     "</div>";
//             },
//             className: "text-center"
//         },

//     ]
//     });
     
//     $('#createNewPost').click(function () {
//         $('#savedata').val("create-post");
//         $('#id').val('');
//         $('#postForm').trigger("reset");
//         $('#modelHeading').html("Create New Post");
//         $('#ajaxModelexa').modal('show');
//     });
    
//     $('body').on('click', '.editPost', function () {
//       var id = $(this).data('id');
//       $.get("{{ route('ajaxposts.index') }}" +'/' + id +'/edit', function (data) {
//           $('#modelHeading').html("Edit Post");
//           $('#savedata').val("edit-user");
//           $('#ajaxModelexa').modal('show');
//           $('#id').val(data.id);
//           $('#title').val(data.title);
//           $('#description').val(data.description);
//       })
//    });
    
//     $('#savedata').click(function (e) {
//         e.preventDefault();
//         $(this).html('Sending..');
    
//         $.ajax({
//           data: $('#postForm').serialize(),
//           url: "{{ route('ajaxposts.store') }}",
//           type: "POST",
//           dataType: 'json',
//           success: function (data) {
     
//               $('#postForm').trigger("reset");
//               $('#ajaxModelexa').modal('hide');
//               table.draw();
         
//           },
//           error: function (data) {
//               console.log('Error:', data);
//               $('#savedata').html('Save Changes');
//           }
//       });
//     });
    
//     $('body').on('click', '.deletePost', function () {
     
//         var id = $(this).data("id");
//         confirm("Are You sure want to delete this Post!");
      
//         $.ajax({
//             type: "DELETE",
//             url: "{{ route('ajaxposts.store') }}"+'/'+id,
//             success: function (data) {
//                 table.draw();
//             },
//             error: function (data) {
//                 console.log('Error:', data);
//             }
//         });
//     });
     
//   });

