@extends('admin.index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">INPUT JENIS</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Jenis</li>
                            <li class="breadcrumb-item active">Input</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form action="{{ route('pengguna.store') }}" method="post">
                            @csrf
                            <div class="card-header">
                                <h3 class="card-title">INPUT PENGGUNA BARU</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="nama" class="form-control" id="inputNama"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Nomor Induk
                                                Pegawai</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="no_pegawai" class="form-control" id="inputNama">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Alamat</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="alamat" class="form-control" id="inputNama">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Email</label>
                                            <div class="col-sm-8">
                                                <input type="email" name="email" class="form-control" id="inputNama"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Password</label>
                                            <div class="col-sm-8">
                                                <input type="password" name="password" class="form-control" id="inputNama"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Jabatan</label>
                                            <div class="col-sm-8">
                                                <select name="jabatan" id="" class="form-control">
                                                    <option value="">--pilih--</option>
                                                    @foreach ($jabatan as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Hak Akses</label>
                                            <div class="col-sm-8">
                                                <select name="role" id="" class="form-control">
                                                    <option value="">--pilih--</option>
                                                    @foreach ($role as $item)
                                                        <option value="{{ $item->name }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Kontak</label>
                                            <div class="col-sm-8">
                                                <input type="text" name="kontak" class="form-control" id="inputNama">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0)" onclick="window.history.back()"
                                    class="btn btn-secondary">Cancel</a>
                                <button type="submit" value="submit" class="btn btn-success float-right">Simpan</button>
                            </div>
                        </form>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </section>
        <!-- /.container-fluid -->
        <!-- /.content -->
    </div>
@endsection

@push('css')
@endpush

@push('javascript')
@endpush
