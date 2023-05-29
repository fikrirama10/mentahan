<?php

namespace App\Helpers;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class Penilian
{
    public static function upload_foto($foto, $kode, $location)
    {
        $filenameWithExt = $foto->getClientOriginalName();
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        $extension = $foto->getClientOriginalExtension();
        $filenameSimpan = $filename . '_' . $kode . '_' . time() . '.' . $extension;
        $path = $foto->storeAs('public/' . $location, $filenameSimpan);
        return $filenameSimpan;
    }
    public static function get_nilai_akhir($nilai,$kriteria){
        $bobot = DB::table('tbl_kriteria')->where('id',$kriteria)->first();
        $tahap1 = 100 - $nilai ;
        $tahap2 = $bobot->bobot / 100;
        $tahap3 = $tahap2 * $tahap1;
        return $tahap3;
    }
    public static function get_total_all($iduser,$bulan,$tahun){
        $kriteria = DB::table('tbl_kriteria')->get();
        $all = 0;
        foreach($kriteria as $kt){
            $nilai = DB::table('tbl_penilaian')->join('tbl_penilaian_total','tbl_penilaian.id','=','tbl_penilaian_total.id_penilaian')->select([
                'tbl_penilaian.*',
                'tbl_penilaian_total.id_kriteria',
                'tbl_penilaian_total.nilai_persen',
            ])->where('tbl_penilaian.id_user',$iduser)->where('tbl_penilaian_total.id_kriteria',$kt->id)->where('tbl_penilaian.tahun',$tahun)->where('tbl_penilaian.bulan',$bulan)->get();
            $total = 0;
            foreach($nilai as $n){
                $total += $n->nilai_persen;
            }
            $all += $total;
        }
        return $all;
    }
    public static function get_total($iduser,$idkriteria,$tahun){
        $nilai = DB::table('tbl_penilaian')->join('tbl_penilaian_total','tbl_penilaian.id','=','tbl_penilaian_total.id_penilaian')->select([
            'tbl_penilaian.*',
            'tbl_penilaian_total.id_kriteria',
            'tbl_penilaian_total.nilai_persen',
        ])->where('tbl_penilaian.id_user',$iduser)->where('tbl_penilaian_total.id_kriteria',$idkriteria)->where('tbl_penilaian.tahun',$tahun)->get();
        $total = 0;
        foreach($nilai as $n){
            $total += $n->nilai_persen;
        }

        return $total;
    }
    public static function get_nilai($iduser,$idkriteria,$bulan,$tahun){
        $nilai = DB::table('tbl_penilaian')->join('tbl_penilaian_total','tbl_penilaian.id','=','tbl_penilaian_total.id_penilaian')->select([
            'tbl_penilaian.*',
            'tbl_penilaian_total.id_kriteria',
            'tbl_penilaian_total.nilai_persen',
        ])->where('tbl_penilaian.id_user',$iduser)->where('tbl_penilaian_total.id_kriteria',$idkriteria)->where('tbl_penilaian.bulan',$bulan)->where('tbl_penilaian.tahun',$tahun)->first();
        if($nilai){
            return $nilai->nilai_persen;
        }else{
            return 0;
        }
        
    }
    public static function hitung_total($id_nilai,$id_user){
        $kriteria = DB::table('tbl_kriteria')->get();
        $total = 0 ;
        $array = array();
        foreach($kriteria as $kr){
            $total_nilai = DB::table('tbl_penilaian_total')->where('id_kriteria',$kr->id)->where('id_penilaian',$id_nilai)->where('id_user',$id_user)->first();
            if($total_nilai){
                if($total_nilai->nilai_persen > 0){
                    $nilainya = $total_nilai->nilai_persen ;
                }else{
                    $nilainya = 0;
                }                
                $total += $nilainya;
                array_push($array,[
                    'kriteria'=>$kr->kriteria,
                    'nilai'=>$nilainya
                ]);
            }
           
        }
        //return $array;
        DB::table('tbl_penilaian')->where('id',$id_nilai)->update([
            'total_nilai'=>$total
        ]);
    }
    //
    public static function cek_total2($id_nilai,$id_user){
        //menampilkan seluruh data penulaian berdasarkan id tidak sama dengan 1 
        $kriteria = DB::table('tbl_kriteria')->where('id','!=',1)->get();
        
        foreach($kriteria as $kr){
           
            $penilaian =DB::table('tbl_penilaian_detail')->where('id_penilaian',$id_nilai)->where('id_kriteria',$kr->id)->where('id_user',$id_user)->get();
            //jika penilaian detail sudah ada atau lebih dari 1
            if(count($penilaian) > 0){
                $nilai = 0 ; $nilai = 0 ;
                foreach($penilaian as $pn){
                    $sub_kriteria = DB::table('tbl_sub_kriteria')->where('id',$pn->id_sub_kriteria)->first();
                        $nilai += $sub_kriteria->bobot_sub;
                }
                $nilai_persen = ($kr->bobot / 100) * $nilai ;
                DB::table('tbl_penilaian_total')->insert([
                    'id_penilaian'=>$id_nilai,
                    'id_user'=>$id_user,
                    'id_kriteria'=>$kr->id,
                    'nilai'=>$nilai,
                    'nilai_persen'=>$nilai_persen,
                ]);
            }else{
                DB::table('tbl_penilaian_total')->insert([
                    'id_penilaian'=>$id_nilai,
                    'id_user'=>$id_user,
                    'id_kriteria'=>$kr->id,
                    'nilai'=>0,
                    'nilai_persen'=>0,
                ]);
            }
        }
    }
    public static function get_total_laporan($tahun,$user){
        $kriteria = DB::table('tbl_kriteria')->get();        
        $total = 0;
        foreach($kriteria as $kr){
            $total_nilai = DB::table('tbl_penilaian_total')->join('tbl_penilaian','tbl_penilaian_total.id_penilaian','=','tbl_penilaian.id')->where('tbl_penilaian.id_user',$user)->where('tbl_penilaian.tahun',$tahun)->where('id_kriteria',$kr->id)->sum('tbl_penilaian_total.nilai_persen');
            $nilai_total = $total_nilai / 12 ;
            $tahap1 = 100 - $nilai_total ;
            $tahap2 = $kr->bobot / 100;
            $tahap3 = $tahap2 * $tahap1;
            $total += $tahap3;
        }
        return  round($total,2);
    }
    public static function get_nilai_laporan($tahun,$kriteria,$user){
        $penilaian = DB::table('tbl_penilaian')->where('tahun',$tahun)->get();
        $total = 0;
        foreach($penilaian as $p){
            $total_nilai = DB::table('tbl_penilaian_total')->where('id_user',$user)->where('id_penilaian',$p->id)->where('id_kriteria',$kriteria)->sum('nilai_persen');
            $total += $total_nilai;
        }
        $total = $total / 12;
        return round($total,2);
    }
    public static function get_laporan_all($tahun,$kode_absen,$limit=null){
        if($limit != null){
            $nilai = DB::table('tbl_penilaian')->leftJoin('users','tbl_penilaian.id_user','=','users.id')->select([
                'tbl_penilaian.*',
                'users.name',
                'users.no_presensi',
                'users.aktif',
            ])->where('tahun',$tahun)->where('users.aktif',1)->where('users.id_presensi',$kode_absen)->groupBy('id_user')->limit(10)->get();
        }else{
            $nilai = DB::table('tbl_penilaian')->leftJoin('users','tbl_penilaian.id_user','=','users.id')->select([
                'tbl_penilaian.*',
                'users.name',
                'users.no_presensi',
                'users.aktif',
            ])->where('tahun',$tahun)->where('users.aktif',1)->where('users.id_presensi',$kode_absen)->groupBy('id_user')->get();
        }
        
        $array_nilai = array();        
        foreach($nilai as $n){
            $kriteria = DB::table('tbl_kriteria')->get();
            $array_kriteria = array();
            foreach($kriteria as $kr){
                array_push($array_kriteria,[
                    'id_kriteria'=>$kr->id,
                    'kriteria'=>$kr->kriteria,
                    'nilai'=>Penilian::get_nilai_laporan($tahun,$kr->id,$n->id_user),
                ]);
            }
            array_push($array_nilai,[
                'id'=>$n->id_user,
                'no_presensi'=>$n->no_presensi,
                'nama'=>$n->name,
                'kriteria'=>$array_kriteria,
                'total'=> Penilian::get_total_laporan($n->tahun,$n->id_user),
                //'rank'=>$no++,
            ]);
        }
        $keys = array_column($array_nilai, 'total');
        array_multisort($keys, SORT_ASC, $array_nilai);

        return $array_nilai;
    }
}