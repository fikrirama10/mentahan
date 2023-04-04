<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $user = User::where('id',auth()->user()->id)->first();
        return view('profil.index',[
            'title'=>'Profil',
            'id'=>'profil',
        ],compact('user'));
    }
    public function ganti_password(){
        return view('profil.ganti-password',[
            'title'=>'Ganti Password',
            'id'=>'profil'
        ]);
    }
}
