<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile($nama = "", $npm = "", $kelas = "") {
    $data = [
        'nama' => str_replace('-', ' ', $nama),
        'npm' => $npm,
        'kelas' => $kelas
    ];

    return view('profile', $data);
    }
}