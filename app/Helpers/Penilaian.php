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
    public static function cek_total2($id_nilai,$id_user){
        $kriteria = DB::table('tbl_kriteria')->where('id','!=',1)->get();
        
        foreach($kriteria as $kr){
           
            $penilaian =DB::table('tbl_penilaian_detail')->where('id_penilaian',$id_nilai)->where('id_kriteria',$kr->id)->where('id_user',$id_user)->get();
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
    // public static function cek_total($id_nilai,$id_user){
    //     $disiplin = DB::table('tbl_penilaian_detail')->where('id_penilaian',$id_nilai)->where('id_kriteria',2)->where('id_user',$id_user)->get();
    //     $sikap = DB::table('tbl_penilaian_detail')->where('id_penilaian',$id_nilai)->where('id_kriteria',3)->where('id_user',$id_user)->get();
    //     $kualitas = DB::table('tbl_penilaian_detail')->where('id_penilaian',$id_nilai)->where('id_kriteria',4)->where('id_user',$id_user)->get();

    //     if(count($disiplin) > 0){
    //         $nilai_disiplin = 0;
           
    //         $kriteria = DB::table('tbl_kriteria')->where('id',2)->first();
    //         foreach($disiplin as $ds)
    //         {                
    //             $sub_kriteria = DB::table('tbl_sub_kriteria')->where('id',$ds->id_sub_kriteria)->first();
    //             $nilai_disiplin += $sub_kriteria->bobot_sub;
    //         }
    //         $nilai_disiplin_persen = ($kriteria->bobot / 100) * $nilai_disiplin;
    //         DB::table('tbl_penilaian_total')->insert([
    //             'id_penilaian'=>$id_nilai,
    //             'id_user'=>$id_user,
    //             'id_kriteria'=>2,
    //             'nilai'=>$nilai_disiplin,
    //             'nilai_persen'=>$nilai_disiplin_persen,
    //         ]);
    //     }else{
    //         DB::table('tbl_penilaian_total')->insert([
    //             'id_penilaian'=>$id_nilai,
    //             'id_user'=>$id_user,
    //             'id_kriteria'=>2,
    //             'nilai'=>0,
    //             'nilai_persen'=>0,
    //         ]);
    //     }
    // }
}