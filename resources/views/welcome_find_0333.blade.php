@extends('main_0333')
@section('content')
<div class="container-xl">
   <div class="table-responsive">
      <div class="table-wrapper">
         <div class="table-title">
            <div class="row">
               <div class="col-sm-5">
                  <h2>Hasil Pencarian <b>Siswa</b></h2>
               </div>
               <div class="col-sm-7">
                  <a href="/" class="btn btn-secondary"><i class="material-icons">&#xe5c4;</i> <span>Kembali</span></a>
               </div>
            </div>
         </div>
         <form method="POST" autocomplete="off">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group row">
               <label class="col-sm-2 col-form-label">Nama</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" value="{{ $data->nama }}" required readonly />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-sm-2 col-form-label">Alamat</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputAddress" value="{{ $data->alamat }}" required readonly />
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection