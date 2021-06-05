<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
  public function index() {
    return view('welcome_0333');
  }

  public function find(Request $request) {
    $query = Siswa::where('nama', $request->inputName)->first();
    if ($query) {
      return view('welcome_find_0333', ['data' => $query]);
    } else {
      return view('welcome_0333');
    }
  }
}