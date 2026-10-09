<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Throwable;

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
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        try {
            $user = new UserModel();
            $user->nama = $validated['nama'];
            $user->npm = $validated['npm'];
            $user->kelas_id = $validated['kelas_id'];
            $user->save();

            return redirect()->route('user.index')
                ->with('success', 'Data pengguna berhasil ditambahkan.');
        } catch (Throwable $e) {
            Log::error('Gagal menambahkan pengguna: ' . $e->getMessage());

            return back()->withInput()
                ->with('error', 'Data pengguna gagal ditambahkan.');
        }
    }

    public function index()
    {
        $userModel = new UserModel();
        $users = $userModel->getUser();

        return view('list_user', compact('users'));
    }

    public function edit(string $id)
    {
        $user = UserModel::findOrFail($id);

        $kelasModel = new Kelas();
        $kelas = $kelasModel->getKelas();

        $title = 'Edit Pengguna';

        return view('edit_user', compact('user', 'kelas', 'title'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        try {
            $user = UserModel::findOrFail($id);
            $user->nama = $validated['nama'];
            $user->npm = $validated['npm'];
            $user->kelas_id = $validated['kelas_id'];
            $user->save();

            return redirect()->route('user.index')
                ->with('success', 'Data pengguna berhasil diperbarui.');
        } catch (Throwable $e) {
            Log::error('Gagal memperbarui pengguna: ' . $e->getMessage());

            return back()->withInput()
                ->with('error', 'Data pengguna gagal diperbarui.');
        }
    }

    public function destroy(string $id)
    {
        try {
            $user = UserModel::findOrFail($id);
            $user->delete();

            return redirect()->route('user.index')
                ->with('success', 'Data pengguna berhasil dihapus.');
        } catch (Throwable $e) {
            Log::error('Gagal menghapus pengguna: ' . $e->getMessage());

            return redirect()->route('user.index')
                ->with('error', 'Data pengguna gagal dihapus.');
        }
    }
}