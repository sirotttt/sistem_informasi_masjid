@extends('dashboard.layouts.main')
@section('admindata')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="/dashboard/pengurus" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Kembali</a>
        </div>
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Edit Pengurus</h6>
            </div>
            <div class="card-body">
                <form method="post" action="/dashboard/pengurus/{{ $pengurus->id }}">
                    @csrf
                    @method('put')
                    <div class="form-group row">
                        <label for="nama_pengurus" class="col-4 col-form-label">Nama Pengurus</label>
                        <div class="col-8">
                            <input id="nama_pengurus" name="nama_pengurus" value="{{ $pengurus->nama_pengurus }}"
                                type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode_pengurus" class="col-4 col-form-label">Kode Pengurus</label>
                        <div class="col-8">
                            <input id="kode_pengurus" name="kode_pengurus" value="{{ $pengurus->kode_pengurus }}"
                                type="text" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kontak" class="col-4 col-form-label">Kontak</label>
                        <div class="col-8">
                            <input id="kontak" name="kontak" value="{{ $pengurus->kontak }}" type="text"
                                class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jabatan_id" class="col-4 col-form-label">Jabatan_id</label>
                        <div class="col-8">
                            <select id="jabatan_id" name="jabatan_id" class="form-control" required>
                                <option value="">Pilih Jabatan</option>
                                @foreach ($jabatan as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $pengurus->jabatan_id == $item->id ? 'selected' : '' }}>{{ $item->nama_jabatan }}
                                    </option>
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
