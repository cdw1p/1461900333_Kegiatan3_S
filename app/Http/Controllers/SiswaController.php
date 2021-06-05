<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
  public function index() {
    return view('siswa_0333', ['data' => Siswa::all()]);
  }

  public function create(Request $request) {
    return view('siswa_create_0333');
  }

  public function edit(Request $request) {
    $findData = Siswa::findOrFail($request->id);
    if ($findData) {
      return view('siswa_edit_0333', ['data' => $findData]);
    } else {
      return redirect()->route('siswa.index');
    }
  }

  public function store(Request $request) {
    Siswa::create([ 'nama' => $request->inputName, 'alamat' => $request->inputAddress ]);
    return redirect()->route('siswa.index');
  }

  public function update(Request $request) {
    Siswa::findOrFail($request->id)->update([ 'nama' => $request->inputName, 'alamat' => $request->inputAddress ]);
    return redirect()->route('siswa.index');
  }

  public function delete(Request $request) {
    Siswa::findOrFail($request->id)->delete();
    return redirect()->route('siswa.index');
  }
}