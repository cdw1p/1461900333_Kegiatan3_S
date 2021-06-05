@extends('main_0333')
@section('content')
<div class="container-xl">
   <div class="table-responsive">
      <div class="table-wrapper">
         <div class="table-title">
            <div class="row">
               <div class="col-sm-5">
                  <h2>Fitur Pencarian <b>Siswa</b></h2>
               </div>
            </div>
         </div>
         <form method="POST" autocomplete="off">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group row">
               <label class="col-sm-2 col-form-label">Nama</label>
               <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Contoh: Abdullah Ibrohim" required />
               </div>
            </div>
            <div class="form-group row">
               <label class="col-sm-2 col-form-label"></label>
               <div class="col-sm-10">
                  <button type="submit" class="btn btn-dark mb-2">Cari Data</button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection