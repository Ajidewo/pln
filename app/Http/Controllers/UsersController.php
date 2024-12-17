<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users; // Gunakan nama model User sesuai konvensi

class UsersController extends Controller
{
    public function index()
    {
        $users = Users::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_email' => 'required|email|unique:tb_users',
            'user_password' => 'required|min:8',
            'user_nama' => 'required|string|max:100',
            'user_alamat' => 'required|string',
            'user_hp' => 'required|string|max:25',
            'user_role' => 'required|integer',
            'user_aktif' => 'required|in:Y,N',
        ]);

        Users::create([
            'user_email' => $request->user_email,
            'user_password' => bcrypt($request->user_password),
            'user_nama' => $request->user_nama,
            'user_alamat' => $request->user_alamat,
            'user_hp' => $request->user_hp,
            'user_role' => $request->user_role,
            'user_aktif' => $request->user_aktif,
        ]);

        return redirect()->route('users.index')->with('success', 'Data user berhasil ditambahkan');
    }

    public function edit($id)
    {
        $users = Users::findOrFail($id);
        return view('users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_email' => 'required|email|unique:tb_users,user_email,' . $id . ',user_id',
            'user_nama' => 'required|string|max:100',
            'user_alamat' => 'required|string',
            'user_hp' => 'required|string|max:25',
            'user_role' => 'required|integer',
            'user_aktif' => 'required|in:Y,N',
        ]);

        $users = Users::findOrFail($id);
        $users->update($request->all());

        return redirect()->route('users.index')->with('success', 'Data user berhasil diperbarui');
    }

    public function destroy($id)
    {
        $users = Users::findOrFail($id);
        $users->delete();

        return redirect()->route('users.index')->with('success', 'Data user berhasil dihapus');
    }
}
