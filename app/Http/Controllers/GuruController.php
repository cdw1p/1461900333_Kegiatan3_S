<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class GuruController extends Controller
{
  public function index() {
    $mahasiswa = Siswa::all();
    return view('main_0333' , ['mahasiswa' => $mahasiswa]);
  }

  public function create() {
  }

  public function store() {
  }

  public function show() {
  }

  public function edit() {
  }

  public function update() {
  }

  public function destroy($id) {
  }
}