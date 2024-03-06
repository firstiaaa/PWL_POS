<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

//    $user = UserModel::find(1);
//     $user = UserModel::firstWhere('level_id', 1);
        $user = UserModel::findOr(20, ['username','nama'], function(){
        });
        return view('user', ['data' => $user]);
    }
}
