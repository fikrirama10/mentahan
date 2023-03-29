<?php

namespace App\Http\Controllers;

use App\Helpers\Penilian;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class LaporanController extends Controller
{
    public function index()
    {
        $kode_absen = DB::table('tbl_kode_absen')->get();
        return view('laporan.index', [
            'title' => 'Laporan',
            'id' => 'laporan'
        ], compact('kode_absen'));
    }
    public function lihat_laporan($tahun, $kode_absen)
    {
        $no =1; $ranking =1;
        $array_nilai = Penilian::get_laporan_all($tahun, $kode_absen);
        //return $array_nilai;
        return view('laporan.report', [
            'title' => 'Laporan',
            'id' => 'laporan'
        ], compact('no', 'array_nilai', 'ranking', 'tahun', 'kode_absen'));
    }
    public function print_laporan(Request $request){
        //return $request->all();
        $tahun = $request->tahun;
        $kode_absen = $request->kode_absen;
        $array_nilai = Penilian::get_laporan_all($tahun, $kode_absen);
        $no =1; $ranking =1;
        $absen = DB::table('tbl_kode_absen')->where('id',$kode_absen)->first();
        $pdf = PDF::loadView('laporan.print-laporan',compact('array_nilai','ranking','no','tahun','absen'))->setPaper('a4', 'landscape');
        return $pdf->stream('laporan_nilai_'.$tahun.'_'.$kode_absen.'.pdf');
    }
}
