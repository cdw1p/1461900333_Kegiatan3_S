<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
  public function index() {
    $query = Kelas::select('siswa.id', 'siswa.nama as nama_siswa', 'siswa.alamat', 'guru.nama as nama_guru', 'guru.mengajar')
      ->join('siswa', 'kelas.id_siswa', '=', 'siswa.id')
      ->join('guru', 'kelas.id_guru', '=', 'guru.id')
      ->get();
    return view('kelas_0333', ['data' => $query]);
  }
}