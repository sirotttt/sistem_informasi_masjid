@extends('dashboard.layouts.main')
@section('admindata')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="/dashboard/kegiatan" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Kembali</a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tambah Kegiatan</h6>
            </div>
            <div class="card-body">
                <form method="post" action="/dashboard/kegiatan">
                    @csrf
                    <div class="form-group row">
                        <label for="nama_kegiatan" class="col-4 col-form-label">Nama Kegiatan</label>
                        <div class="col-8">
                            <input id="nama_kegiatan" name="nama_kegiatan" type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tanggal" class="col-4 col-form-label">Tanggal Kegiatan</label>
                        <div class="col-8">
                            <input id="tanggal" name="tanggal" type="date" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pengurus_id" class="col-4 col-form-label">pengurus</label>
                        <div class="col-8">
                            <select id="pengurus_id" name="pengurus_id" type="text" class="form-control" required>
                                <option value="">Pilih pengurus</option>
                                @foreach ($pengurus as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_pengurus }}</option>
                                @endforeach
                            </select>
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
