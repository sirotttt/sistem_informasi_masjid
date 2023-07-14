@extends('dashboard.layouts.main')
@section('admindata')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="/dashboard/jabatan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Kembali</a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Jabatan</h6>
            </div>
            <div class="card-body">
                <form method="post" action="/dashboard/jabatan">
                    @csrf
                    <div class="form-group row">
                        <label for="nama_jabatan" class="col-4 col-form-label">Nama Jabatan</label>
                        <div class="col-8">
                            <input id="nama_jabatan" name="nama_jabatan" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
