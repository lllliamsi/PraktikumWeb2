<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
     // Fungsi untuk menampilkan form
     public function index()
     {
         return view('skill');
     }
     // Fungsi untuk menampilkan hasil
     public function hasil(Request $request)
     {
         $this->validate($request, [
             'nama' => 'required|min:5|max:20',
             'email' => 'required',
             'lokasi' => 'required',
             'jenis_kelamin' => 'required',
             'skill[]' => 'required',
         ]);
         return view('skillhasil', ['data' => $request]);
     }
}
