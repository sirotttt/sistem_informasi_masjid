@extends('dashboard.layouts.main')
@section('admindata')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="/dashboard/donasi" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Kembali</a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Donasi</h6>
            </div>
            <div class="card-body">
                <form method="post" action="/dashboard/donasi">
                    @csrf
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal Donasi</label>
                        <div class="col-8">
                            <input id="tanggal" name="tanggal" type="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nominal" class="col-4 col-form-label">Nominal Donasi</label>
                        <div class="col-8">
                            <input id="nominal" name="nominal" type="number" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_donatur" class="col-4 col-form-label">Nama Donatur</label>
                        <div class="col-8">
                            <input id="nama_donatur" name="nama_donatur" type="text" class="form-control" required>
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
