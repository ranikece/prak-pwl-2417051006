<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;

class UserController extends Controller
{
    public function create()
    {
        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $title = 'Buat Pengguna Baru';

        return view('create_user', compact('kelas', 'title'));
    }

    public function store(Request $request)
    {
        $user = new UserModel();

        $user->nama = $request->nama;
        $user->npm = $request->npm;
        $user->kelas_id = $request->kelas_id;

        $user->save();

        return redirect('/user');
    }

    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getUser();

        return view('list_user', compact('users'));
    }
}