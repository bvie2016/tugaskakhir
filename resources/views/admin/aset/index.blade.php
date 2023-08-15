@extends('admin.index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <h1 class="m-0">Jenis Aset</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-8">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Jenis Aset</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">KODE BARANG</th>
                                            <th class="text-center">NAMA BARANG</th>
                                            <th class="text-center">JENIS BARANG</th>
                                            <th class="text-center">TIPE BARANG</th>
                                            <th class="text-center">RUANGAN</th>
                                            <th class="text-center">TAHUN</th>
                                            <th class="text-center">JUMLAH</th>
                                            <th class="text-center">KETERANGAN</th>
                                            <th class="text-center">AKSI</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                            <tr>
                                                <td> {{ $item->kode }} </td>
                                                <td> {{ $item->nama }} </td>
                                                <td> {{ $item->jenis->nama }} </td>
                                                <td> {{ $item->tipe->nama }}</td>
                                                <td> {{ $item->ruang->namaruangan }}</td>
                                                <td> {{ $item->tahun_pengadaan }}</td>
                                                <td> {{ $item->jumlah }}</td>
                                                <td> {{ $item->keterangan }}</td>
                                                <td>
                                                    <a href="{{ route('aset.show', $item->id) }}"
                                                        class="btn btn-info btn-sm">Lihat</a>
                                                    <a href="{{ route('aset.edit', $item->id) }}"
                                                        class="btn btn-warning btn-sm">Edit</a>
                                                </td>
                                            </tr>
                                        @endforeach

                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <a href="{{ route('aset.create') }}" class="btn btn-primary float-right"><i
                                        class="fas fa-plus">
                                    </i> Tambah Data</a>
                                <a href="javascript:void(0)" onclick="window.history.back()"
                                    class="btn btn-secondary">Kembali</a>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush

@push('javascript')
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

        });
    </script>
@endpush
