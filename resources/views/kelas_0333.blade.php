@extends('main_0333')
@section('content')
<div class="container-xl">
   <div class="table-responsive">
      <div class="table-wrapper">
         <div class="table-title">
            <div class="row">
               <div class="col-sm-5">
                  <h2>Data <b>Kelas</b></h2>
               </div>
            </div>
         </div>
         <table class="table table-striped table-hover">
            <thead>
               <tr>
                  <th>#</th>
                  <th>Nama Siswa</th>
                  <th>Alamat</th>
                  <th>Mata Pelajaran</th>
                  <th>Guru Pembimbing</th>
               </tr>
            </thead>
            <tbody>
              @foreach($data as $v)
               <tr>
                  <td>{{ $v->id }}</td>
                  <td>{{ $v->nama_siswa }}</td>
                  <td>{{ $v->alamat }}</td>
                  <td>{{ $v->mengajar }}</td>
                  <td>{{ $v->nama_guru }}</td>
               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>
@endsection