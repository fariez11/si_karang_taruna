<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CoKetua extends Controller
{
    public function home()
    {   
        $data = DB::SELECT("select*from tabel_keuangan where status_keuangan = 'belum verifikasi' and cetak_keuangan = 'tidak' ");

        return view('/ketua/dt_verkeuangan',['data'=>$data]);
    }

    public function verifikasi($id)
    {
        $data = DB::table('tabel_keuangan')->where('id',$id)->update(['status_keuangan'=>'sudah verifikasi',]);
           
        return redirect('ketua')->with('updpet','.');
    }

    public function cetak()
    {   
        $data = DB::SELECT("select*from tabel_keuangan where status_keuangan = 'sudah verifikasi' and cetak_keuangan = 'tidak' ");

        return view('/ketua/dt_cetkeuangan',['data'=>$data]);
    }

    public function updcet($id)
    {
        $data = DB::table('tabel_keuangan')->where('id',$id)->update(['cetak_keuangan'=>'ya']);
           
        return redirect('datacetkeuangan')->with('updpet','.');
    }
}
