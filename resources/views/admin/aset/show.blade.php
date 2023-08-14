@extends('admin.index')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Aset</h1>
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
    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary">
                <form action="{{route('aset.store')}}" method="post">
                    @csrf
                    <div class="card-header">
        
                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                        {{-- <div class="form-group"> --}}
                            <label for="inputName">TAHUN PENGANGGARAN</label>
                            <input type="text" value="{{ $data->tahun_pengadaan }}" class="form-control" readonly>
                          {{-- </div> --}}
                          {{-- <div class="form-group"> --}}
                            <label for="inputName">TYPE BARANG</label>
                            <input type="text" value="{{ $data->tipe->nama }}"id="inputClientCompany" class="form-control" readonly>
                          {{-- </div> --}}
                          <div class="form-group">
                            <label for="inputName">JENIS BARANG</label>
                            <input type="text" value="{{ $data->jenis->nama }}"id="inputClientCompany" class="form-control" readonly>
                          </div>
                          <div class="form-group">
                            <label for="inputName">RUANGAN</label>
                            <input type="text" value="{{ $data->ruang_id }}"id="inputClientCompany" class="form-control" readonly>
                          </div>
                          <div class="form-group">
                            <label for="inputName">KODE BARANG</label>
                            <input type="text" value="{{ $data->kode }}" name="kode" id="inputClientCompany" class="form-control" readonly>
                          </div>
                          <div class="form-group">
                            <label for="inputName">NAMA BARANG</label>
                            <input type="text" value="{{ $data->nama }}" name="nama" id="inputClientCompany" class="form-control" readonly>
                          </div>
                          <div class="form-group">
                            <label for="inputName">KETERANGAN</label>
                            <input type="text" value="{{ $data->keterangan }}" id="inputClientCompany" class="form-control" readonly>
                          </div>
                  </div>
                  <div class="card-footer">
                      <a href="javascript:void(0)" onclick="window.history.back()" class="btn btn-secondary">Cancel</a>
                  </div>

                </form>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            
          </div>
        </div>
    </section>
</div>    
@endsection