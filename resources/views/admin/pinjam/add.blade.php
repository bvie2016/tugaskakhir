@extends('admin.index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">IZIN ASET</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Aset Keluar</li>
                            <li class="breadcrumb-item active">Izin Aset</li>
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
                        <form action="{{ route('pinjam.store') }}" method="post">
                            @csrf
                            <div class="card-header">
                                <h3 class="card-title">IZIN BARU</h3>

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
                                                <input type="text" value="{{ auth()->user()->name }}" name="nama"
                                                    class="form-control" id="inputNama" readonly>
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Aset</label>
                                            <div class="col-sm-8">
                                                <select name="aset_id" id="" class="form-control" required>
                                                    <option value="">--pilih aset--</option>
                                                    @foreach ($aset as $item)
                                                        <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label for="inputNama" class="col-sm-4 col-form-label">Jumlah</label>
                                            <div class="col-sm-8">
                                                <input type="number" name="jumlah" class="form-control" id="inputNama">
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
