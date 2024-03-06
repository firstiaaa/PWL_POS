<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = UserModel::all();
        $jumlahPengguna = UserModel::count(); // Menghitung jumlah total pengguna
        return view('user', ['users' => $users, 'jumlahPengguna' => $jumlahPengguna]);
    }
}
