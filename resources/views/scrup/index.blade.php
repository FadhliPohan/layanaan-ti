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
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>No Inventaris</th>
                                <th>User</th>
                                <th>Lokasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jenis Barang</th>
                                <th>No Inventaris</th>
                                <th>User</th>
                                <th>Lokasi</th>
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

{{-- modal add --}}
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tambah Scrup</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- code... --}}
                <form id="formAdd" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input name="id" id="id" hidden>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                                placeholder="isikan Nama Barang" value="" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="jenis_barang">Jenis Barang</label>
                        <div class="col-sm-9">
                            <select name="jenis_barang" id="jenis_barang" class="form-control " required>
                                <option value="">Pilih Barang</option>
                                <option value="1">Monitor</option>
                                <option value="2">CPU</option>
                                <option value="3">Printer</option>
                                <option value="4">Keyboard</option>
                                <option value="5">Mouse</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nomor_inventaris" class="col-sm-3 col-form-label">Inventaris</label>
                        <div class="col-sm-9">
                            <input type="text" name="nomor_inventaris" class="form-control" id="nomor_inventaris"
                                placeholder="isikan Nomor Inventaris" value="" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_user" class="col-sm-3 col-form-label">ID User</label>
                        <div class="col-sm-9">
                            <input type="text" name="id_user" class="form-control" id="id_user" placeholder="Nama"
                                value="" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi_pengguna" class="col-sm-3 col-form-label">Lokasi Pengguna</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="lokasi_pengguna" class="form-control" id="lokasi_pengguna"
                                placeholder="Isikan Lokasi Pengguna" value="" required></textarea>

                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btnSave" class="btn btn-primary" type="button" data-dismiss="modal">Submit</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                {{-- <a class="btn btn-primary" href="login.html">Logout</a> --}}
            </div>
        </div>
    </div>
</div>

{{-- modal update --}}
<div class="modal fade" id="view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form View Scrup</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- code... --}}
                <form id="formUpdate" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-3 col-form-label">Nama Barang</label>
                        <div class="col-sm-9">
                            <input id="id" name="id" hidden>
                            <input type="text" name="nama_barang" class="form-control" id="nama_barang"
                                placeholder="isikan Nama Barang" value="" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="jenis_barang">Jenis Barang</label>
                        <div class="col-sm-9">
                            <select name="jenis_barang" id="jenis_barang" class="form-control " required>
                                <option value="">Pilih Barang</option>
                                <option value="1">Monitor</option>
                                <option value="2">CPU</option>
                                <option value="3">Printer</option>
                                <option value="4">Keyboard</option>
                                <option value="5">Mouse</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nomor_inventaris" class="col-sm-3 col-form-label">Inventaris</label>
                        <div class="col-sm-9">
                            <input type="text" name="nomor_inventaris" class="form-control" id="nomor_inventaris"
                                placeholder="isikan Nomor Inventaris" value="" required>

                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_user" class="col-sm-3 col-form-label">ID User</label>
                        <div class="col-sm-9">
                            <input type="text" name="id_user" class="form-control" id="id_user"
                                placeholder="Nama" value="" required>

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="lokasi_pengguna" class="col-sm-3 col-form-label">Lokasi Pengguna</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="lokasi_pengguna" class="form-control" id="lokasi_pengguna"
                                placeholder="Isikan Lokasi Pengguna" required></textarea>

                        </div>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button id="btnUpdate" class="btn btn-primary" type="button" data-dismiss="modal">Submit</button>
                <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                {{-- <a class="btn btn-primary" href="login.html">Logout</a> --}}
            </div>
        </div>
    </div>
</div>

@push('script')
    <script src="{{ URL::asset('js/scrup.js') }}" type="text/javascript"></script>
@endpush
