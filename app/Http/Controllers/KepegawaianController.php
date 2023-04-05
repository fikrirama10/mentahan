<?php

namespace App\Http\Controllers;

use App\Helpers\Penilian;
use App\Models\Jabatan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Yajra\DataTables\Facades\DataTables;

class KepegawaianController extends Controller
{
    public function index($aktif = '')
    {
        if ($aktif) {
            $aktifin = 0;
            $title = 'Data Pegawai Non Aktif';
        } else {
            $aktifin = 1;
            $title = 'Data Pegawai Aktif';
        }
        if (request()->ajax()) {
            $data = DB::table('users')
                ->select([
                    'users.*',
                    'tbl_jabatan.jabatan',
                ])
                ->leftJoin('tbl_jabatan', 'users.id_jabatan', '=', 'tbl_jabatan.id')
                ->where('id_jabatan', '!=', 1)->where('aktif', $aktifin);
            return DataTables::query($data)->addColumn('action', function ($data) {
                $html_edit = '<a href="' . route('edit-pegawai', $data->id) . '" class="btn btn-warning btn-xs"><i class=" tf-icons ti ti-edit"></i></a>';
                if ($data->aktif == 1) {
                    $html_delete = '<button onclick="btnDelete(' . $data->id . ')" class="btn btn-danger btn-xs"><i class=" tf-icons ti ti-trash"></i></button>';
                } else {
                    $html_delete = '<button onclick="btnBack(' . $data->id . ')" class="btn btn-info btn-xs"><i class=" tf-icons ti ti-arrow-back-up"></i></button>';
                }

                return $html_edit . ' ' . $html_delete;
            })->rawColumns(['action'])->make(true);
        }
        $noabsen = DB::table('tbl_kode_absen')->get();
        $jabatan = DB::table('tbl_jabatan')->where('id', '!=', 1)->get();
        return view('kepegawaian.index', [
            'title' => $title,
            'id' => 'kepegawaian'
        ], compact('noabsen', 'jabatan'));
    }
    public function aktif($id)
    {
        User::where('id', $id)->update([
            'aktif' => 1
        ]);
        Alert::success('Pegawai berhasil di aktifkan');
        return back();
    }
    public function nonaktif($id)
    {
        User::where('id', $id)->update([
            'aktif' => 0
        ]);
        Alert::success('Pegawai berhasil di non aktifkan');
        return back();
    }
    public function post_tambah(Request $request)
    {
        //return $request->all();
        $random = rand();
        $request->validate([
            "kode_absen" => "required",
            "nama" => "required",
            "alamat" => "required",
            "jenis_kelamin" => "required",
            "jabatan" => "required",
            "pertama_kerja" => "required",
            "pengabdian" => "required",
            "pendidikan" => "required",
            "foto" => "required",
            "email" => "required",
        ]);

        if ($request->hasFile('foto')) {
            $foto = Penilian::upload_foto($request->foto, $random, 'foto_pegawai');
        } else {
            $foto = 'default.jpg';
        }

        $pegawai = User::create([
            'id_jabatan' => $request->jabatan,
            'id_presensi' => $request->kode_absen,
            'name' => $request->nama,
            'foto' => $foto,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'pertama_kerja' => $request->pertama_kerja,
            'email' => $request->email,
            'password' => Hash::make('12345'),
            'pengabdian' => $request->pengabdian,
            'pendidikan' => $request->pendidikan,
            'aktif' => 1,
        ]);
        Alert::success('Data berhasil ditambah');
        return back();
    }

    public function edit_pegawai($id)
    {
        $pegawai = User::where('id', $id)->first();
        $jabatan = Jabatan::get();

        return view('kepegawaian.edit', [
            'title' => 'Edit Pegawai',
            'id' => 'kepegawaian'
        ], compact('pegawai', 'jabatan'));
    }
    public function post_edit(Request $request, $id)
    {
        $email_user = User::where('id', $id)->first();
        if ($request->email != $email_user->email) {
            $user = User::where('email', $request->email)->first();
            if ($user) {
                Alert::error('Gagal Simpan Email Sudah Ada');
                return back();
            }
        }

        User::where('id', $id)->update([
            'name' => $request->nama,
            'alamat' => $request->alamat,
            'jenis_kelamin' => $request->jenis_kelamin,
            'id_jabatan' => $request->jabatan,
            'pendidikan' => $request->pendidikan,
            'pengabdian' => $request->pengabdian,
        ]);
        Alert::success('Data Berhasil di update');
        return redirect(route('kepegawaian'));
    }
    public function post_password(Request $request)
    {
        User::where('id', auth()->user()->id)->update([
            'password' => Hash::make($request->password),
        ]);
        Alert::success('Password Berhasil di ganti');
        return back();
    }
}
