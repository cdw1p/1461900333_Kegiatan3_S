<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
  public function index() {
    return view('guru_0333', ['data' => Guru::all()]);
  }

  public function create(Request $request) {
    return view('guru_create_0333');
  }

  public function edit(Request $request) {
    $findData = Guru::findOrFail($request->id);
    if ($findData) {
      return view('guru_edit_0333', ['data' => $findData]);
    } else {
      return redirect()->route('guru.index');
    }
  }

  public function store(Request $request) {
    Guru::create([ 'nama' => $request->inputName, 'mengajar' => $request->inputTech ]);
    return redirect()->route('guru.index');
  }

  public function update(Request $request) {
    Guru::findOrFail($request->id)->update([ 'nama' => $request->inputName, 'mengajar' => $request->inputTech ]);
    return redirect()->route('guru.index');
  }

  public function delete(Request $request) {
    Guru::findOrFail($request->id)->delete();
    return redirect()->route('guru.index');
  }
}