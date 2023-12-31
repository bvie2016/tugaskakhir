@extends('admin.index')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Data Aset Baru</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Data Jenis Aset</li>
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
                        <form action="{{ route('aset.store') }}" method="post">
                            @csrf
                            <div class="card-header">
                                <h3 class="card-title">INPUT DATA ASET</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                        title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">TAHUN PENGANGGARAN</label>
                                    <input type="text" name="tahun_pengadaan" id="inputClientCompany"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">TYPE BARANG</label>
                                    <select name="tipe_id" id="" class="form-control" required>
                                        <option value="">--pilih--</option>
                                        @foreach ($tipe as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">JENIS BARANG</label>
                                    <select name="jenis_id" id="" class="form-control" required>
                                        <option value="">--pilih--</option>
                                        @foreach ($jenis as $item)
                                            <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">RUANGAN</label>
                                    <select name="ruang_id" id="" class="form-control" required>
                                        <option>--pilih--</option>
                                        @foreach ($ruang as $item)
                                            <option value="{{ $item->id }}">{{ $item->namaruangan }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">KODE BARANG</label>
                                    <input type="text" name="kode" id="inputClientCompany" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">NAMA BARANG</label>
                                    <input type="text" name="nama" id="inputClientCompany" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">JUMLAH BARANG</label>
                                    <input type="text" name="jumlah" id="inputClientCompany" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="inputName">KETERANGAN</label>
                                    <input type="text" name="keterangan" id="inputClientCompany" class="form-control"
                                        required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="javascript:void(0)" onclick="window.history.back()"
                                    class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="submit" class="btn btn-success float-right">
                            </div>

                        </form>
                        <!-- /.card-body -->
                    </div>
<<<<<<< HEAD
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">TAHUN PENGANGGARAN</label>
                            <input type="text" name="tahun_pengadaan" id="inputClientCompany" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="inputName">TYPE BARANG</label>
                            <select name="tipe_id" id="" class="form-control" required>
                              <option value="">--pilih--</option>
                              @foreach ($tipe as $item)
                                  <option value="{{$item->id}}">{{$item->nama}}</option>
                              @endforeach
                          </select>
                          </div>
                          <div class="form-group">
                            <label for="inputName">JENIS BARANG</label>
                            <select name="jenis_id" id="" class="form-control" required>
                              <option value="">--pilih--</option>
                              @foreach ($jenis as $item)
                                  <option value="{{$item->id}}">{{$item->nama}}</option>
                              @endforeach
                          </select>
                          </div>
                          <div class="form-group">
                            <label for="inputName">RUANGAN</label>
                            <select name="ruang_id" id="" class="form-control" required>
                              <option value="">--pilih--</option>
                              @foreach ($ruang as $item)
                                  <option value="{{$item->id}}">{{$item->namaruangan}}</option>
                              @endforeach
                          </select>
                          </div>
                          <div class="form-group">
                            <label for="inputName">KODE BARANG</label>
                            <input type="text" name="kode" id="inputClientCompany" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="inputName">NAMA BARANG</label>
                            <input type="text" name="nama" id="inputClientCompany" class="form-control" required>
                          </div>
                          <div class="form-group">
                            <label for="inputName">KETERANGAN</label>
                            <input type="text" name="keterangan" id="inputClientCompany" class="form-control" required>
                          </div>
                  </div>
                  <div class="card-footer">
                      <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-secondary">Cancel</a>
                      <input type="submit" value="submit" class="btn btn-success float-right">
                  </div>

                </form>
            <!-- /.card-body -->
=======
                    <!-- /.card -->
                </div>
>>>>>>> 7c1ea568ddc8bfd9519e1e69e29679d7e5489f68
            </div>
            <div class="row">
                <div class="col-12">

                </div>
            </div>
        </section>
        <!-- /.container-fluid -->
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
