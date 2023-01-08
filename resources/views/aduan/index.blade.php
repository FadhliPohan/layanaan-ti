@extends('layouts.header')
@section('contain')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sint asperiores, quis illo, odit magni
            nobis tempora similique, accusantium labore maxime quae earum odio perspiciatis itaque saepe inventore eius
            nulla.</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-sm-6">
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Scrup</h6>
                    </div>
                    <div class="col-sm-6 ">
                        <a id="btnAdd" class="btn btn-primary float-right">Tambah Data <i
                                class="fas fa-fw fa-plus-circle"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>No Aduan</th>
                                <th>Nama Pengadu</th>
                                <th>Nama Teknisi</th>
                                <th>Jenis Aduan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>No Aduan</th>
                                <th>Nama Pengadu</th>
                                <th>Nama Teknisi</th>
                                <th>Jenis Aduan</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection

@push('script')
    <script src="{{ URL::asset('js/aduan.js') }}" type="text/javascript"></script>
@endpush
