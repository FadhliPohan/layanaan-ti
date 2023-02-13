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
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Sperpat Card</h6>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <ul class="cardList">
                    <li class="card">
                        <div class="row">
                            <div class="col">
                                <p>Nama : </p>
                                <p class="namaku"></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-sm-6">
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Sperpat Card</h6>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table style="border: none" class="table" id="dataTableSperpatCard" width="100%" cellpadding="0"
                        cellspacing="0">
                        <tbody style="border: none">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <div class="row">
                    <div class="col-sm-6">
                        <h6 class="m-0 font-weight-bold text-primary">DataTable Sperpat</h6>
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
                    <table class="table table-bordered" id="dataTableSperpat" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>No Inventaris</th>
                                <th>QTY</th>
                                <th>Tanggal Pembelian</th>
                                <th>Jenis Barang</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>No Inventaris</th>
                                <th>QTY</th>
                                <th>Tanggal Pembelian</th>
                                <th>Jenis Barang</th>
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
    <script src="{{ URL::asset('js/sperpat.js') }}" type="text/javascript"></script>
@endpush
