@extends('apk/head')

@section('head')

<div class="content-wrapper">
  <div class="container-fluid">
    <div class="col-sm-9">
      <h4 class="page-title">Form Input</h4>
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/index">kembali</a></li>
       </ol>
    </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header text-uppercase">Text Input</div>
            <div class="card-body">
      
              <form action="">
                <div class="form-group row">
                  <label for="rounded-input" class="col-sm-3 col-form-label">Nama Barang</label>
                  <div class="col-sm-9">
                  <input type="text" id="rounded-input" class="form-control form-control-rounded">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="rounded-input" class="col-sm-3 col-form-label">No Barang</label>
                  <div class="col-sm-9">
                  <input type="text" id="rounded-input" class="form-control form-control-rounded">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="basic-select" class="col-sm-3 col-form-label">Select Input</label>
                  <div class="col-sm-9">
                    <select class="form-control" id="basic-select">
                        <option>Layak</option>
                        <option>Cukup Layak</option>
                        <option>Tidak Layak</option>
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="rounded-input" class="col-sm-3 col-form-label">Jumlah</label>
                  <div class="col-sm-9">
                  <input type="text" id="rounded-input" class="form-control form-control-rounded">
                  </div>
                </div>

                <div class="form-group row">
                  <label for="rounded-input" class="col-sm-3 col-form-label">Barang Masuk</label>
                  <div class="col-sm-9">
                  <input type="text" id="rounded-input" class="form-control form-control-rounded">
                  </div>
                </div>

              </form>
      
            </div>
          </div>
        </div>
      </div>

  </div>
</div>

@endsection