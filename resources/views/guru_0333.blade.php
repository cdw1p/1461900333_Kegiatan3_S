@extends('main_0333')
@section('content')
<div class="container-xl">
   <div class="table-responsive">
      <div class="table-wrapper">
         <div class="table-title">
            <div class="row">
               <div class="col-sm-5">
                  <h2>Data <b>Guru</b></h2>
               </div>
               <div class="col-sm-7">
                  <a href="/guru/create" class="btn btn-secondary"><i class="material-icons">&#xE147;</i> <span>Tambah Data</span></a>
               </div>
            </div>
         </div>
         <table class="table table-striped table-hover">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tbody>
              @foreach($data as $v)
               <tr>
                  <td>{{ $v->id }}</td>
                  <td>{{ $v->nama }}</td>
                  <td>{{ $v->mengajar }}</td>
                  <td>
                    <a href="/guru/edit/{{ $v->id }}" class="settings" title="Edit"><i class="material-icons">&#xe150;</i></a>
                    <a href="/guru/delete/{{ $v->id }}" class="delete" title="Hapus"><i class="material-icons">&#xE5C9;</i></a>
                  </td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection