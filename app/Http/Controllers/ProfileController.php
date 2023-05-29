<?php

namespace App\Http\Controllers;

use App\Helpers\Penilian;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    public function index(){
        $user = User::where('id',auth()->user()->id)->first();
        return view('profil.index',[
            'title'=>'Profil',
            'id'=>'profil',
        ],compact('user'));
    }
    public function update_profil(Request $request,$id){
        if ($request->hasFile('foto')) {
            $random = rand();
            $foto = Penilian::upload_foto($request->foto, $random, 'foto_pegawai');
            User::where('id',$id)->update([
                'foto'=>$foto
            ]);
            return redirect(route('home'));
        } else {
            Alert::error('Gambar tidak kosong' );
            return back();
        }
        
    }
    public function ganti_password(){
        return view('profil.ganti-password',[
            'title'=>'Ganti Password',
            'id'=>'profil'
        ]);
    }
}
