<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KriteriaController extends Controller
{
    public function index(){
        $kriteria = DB::table('tbl_kriteria')->get();
        $kriteria_sum = DB::table('tbl_kriteria')->sum('bobot');
        $array_kriteria = array();
        foreach($kriteria as $kr){
            $subkriteria = DB::table('tbl_sub_kriteria')->where('id_kriteria',$kr->id)->get();
            $array_sub = array();
            foreach($subkriteria as $sk){
                array_push($array_sub,[
                    'id_sub_kriteria'=>$sk->id,
                    'sub_kriteria'=>$sk->sub_kriteria,
                    'bobot_sub'=>$sk->bobot_sub
                ]);
            }
            array_push($array_kriteria,[
                'id_kriteria'=>$kr->id,
                'kriteria'=>$kr->kriteria,
                'bobot'=>$kr->bobot,
                'sub_kriteria'=>$array_sub
            ]);
        }
        return view('kriteria.index',[
            'title'=>'Kriteria',
            'id'=>'kriteria'
        ],compact('array_kriteria','kriteria_sum'));
    }
    public function edit($id){
        $kriteria = DB::table('tbl_kriteria')->where('id',$id)->first();
        $sub_kriteria = DB::table('tbl_sub_kriteria')->where('id_kriteria',$id)->get();
        return view('kriteria.edit',[
            'title'=>'Edit Kriteria',
            'id'=>'kriteria'
        ],compact('kriteria','sub_kriteria'));
    }

    public function post_edit(Request $request ,$id){
        $data = [
            'kriteria'=>$request->kriteria,
            'bobot'=>$request->bobot,
        ];
        DB::table('tbl_kriteria')->where('id',$id)->update($data);
        Alert::success('Data Berhasil di update');
        return redirect(route('kriteria'));
    }
}
