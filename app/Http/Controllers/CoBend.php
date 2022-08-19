<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Exports\KeuanganExport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Authenticate;
use DB;
use App\keuangan;
use Carbon\Carbon;


class CoBend extends Controller
{
    public function home()
    {   
        
        $totiuran = DB::SELECT("SELECT (SELECT saldo_keuangan FROM tabel_keuangan ORDER BY id DESC limit 1) as total, SUM(pemasukkan_keuangan) mas, SUM(pengeluaran_keuangan) kel FROM tabel_keuangan WHERE kategori_keuangan = 'uang iuran' AND status_keuangan = 'sudah verifikasi'");

        $totkas = DB::SELECT("SELECT (SELECT saldo_keuangan FROM tabel_keuangan ORDER BY id DESC limit 1) as total, SUM(pemasukkan_keuangan) mas, SUM(pengeluaran_keuangan) kel FROM tabel_keuangan WHERE kategori_keuangan = 'uang kas' AND status_keuangan = 'sudah verifikasi'");


        $datiuran = DB::SELECT("SELECT tanggal_keuangan, SUM(pemasukkan_keuangan) as mas , SUM(pengeluaran_keuangan) as kel FROM tabel_keuangan WHERE kategori_keuangan = 'uang iuran' AND status_keuangan = 'sudah verifikasi' GROUP BY tanggal_keuangan ORDER BY tanggal_keuangan DESC limit 10");
        
        $datkas = DB::SELECT("SELECT tanggal_keuangan, SUM(pemasukkan_keuangan) as mas , SUM(pengeluaran_keuangan) as kel FROM tabel_keuangan WHERE kategori_keuangan = 'uang kas' AND status_keuangan = 'sudah verifikasi' GROUP BY tanggal_keuangan ORDER BY tanggal_keuangan DESC limit 10");
   

        return view('/bendahara/home',['datiuran'=>$datiuran,'datkas'=>$datkas,'iuran'=> $totiuran,'kas'=> $totkas]);
    }

    public function dtkeuangan()
    {

        $idk = keuangan::getId();
    	$data = DB::SELECT("select*from tabel_keuangan where cetak_keuangan = 'tidak'");

        return view('/bendahara/dt_keuangan',['idk'=>$idk,'data'=>$data]);

    }

    public function adduang(Request $request)
    {

        $id = $request->idk;
        $sa = $request->saldo;
        $ma = $request->masuk;
        $ke = $request->keluar;
        $tg = date('Y-m-d');
        $ka = $request->kat;
        $kt = $request->ket;


        $data = new keuangan();
            $data->id = $id;
            if($ma == null){

                $data->pemasukkan_keuangan = 0;
                $data->pengeluaran_keuangan = $ke;
                $data->saldo_keuangan = $sa - $ke;

            }else if($ke == null){

                $data->pemasukkan_keuangan = $ma;
                $data->pengeluaran_keuangan = 0;
                $data->saldo_keuangan = $sa + $ma;

            }
            $data->tanggal_keuangan = $tg;
            $data->kategori_keuangan = $kt;
            $data->keterangan_keuangan = $kt;
            $data->status_keuangan = 'belum verifikasi';
            $data->save();

        return redirect('datakeuangan')->with('addpet','.');
        
    }

    public function upduang(Request $request,$id)
    {
        $sa = $request->saldo;
        $ma = $request->masuk;
        $ke = $request->keluar;
        $tg = date('Y-m-d');
        $ka = $request->kat;
        $kt = $request->ket;
        $st = $request->sta;

            if($ma == '0'){
                $data = DB::table('tabel_keuangan')->where('id',$id)->update(['pengeluaran_keuangan'=>$ke,'kategori_keuangan'=>$ka,'keterangan_keuangan'=>$kt]);
            }else{
                $data = DB::table('tabel_keuangan')->where('id',$id)->update(['pemasukkan_keuangan'=>$ke,'kategori_keuangan'=>$ka,'keterangan_keuangan'=>$kt]);
            }


        return redirect('datakeuangan')->with('updpet','.');
    }

    public function deluang($id){

        DB::table('tabel_keuangan')->where('id',$id)->delete();

        return redirect('datakeuangan')->with('delpet','.');
    }

    public function dtcetkeuangan(){

        $data = DB::SELECT("select*from tabel_keuangan where status_keuangan = 'sudah verifikasi' and cetak_keuangan = 'ya' ");
        

        return view('/bendahara/dt_cetakkeuangan',['data'=>$data]);

    }

    public function cetakkeuangan(Request $request)
    {
        $kat = $request->kat;
        $tglm = $request->tgm;
        $tgla = $request->tga;

        if ($tglm == null && $tgla == null){
            $hasil = DB::SELECT("select*from tabel_keuangan where status_keuangan = 'sudah verifikasi' and cetak_keuangan = 'ya' and kategori_keuangan = '$kat'");
            $total = DB::SELECT("SELECT (SELECT saldo_keuangan FROM tabel_keuangan ORDER BY id DESC limit 1) as total, SUM(pemasukkan_keuangan) mas, SUM(pengeluaran_keuangan) kel FROM tabel_keuangan WHERE kategori_keuangan = '$kat' AND status_keuangan = 'sudah verifikasi' and cetak_keuangan = 'ya' ");

        }else{

            $hasil = DB::SELECT("select*from tabel_keuangan where status_keuangan = 'sudah verifikasi' and cetak_keuangan = 'ya' and tanggal_keuangan between '$tglm' and '$tgla' and kategori_keuangan = '$kat'");

            $total = DB::SELECT("SELECT (SELECT saldo_keuangan FROM tabel_keuangan ORDER BY id DESC limit 1) as total, SUM(pemasukkan_keuangan) mas, SUM(pengeluaran_keuangan) kel FROM tabel_keuangan WHERE kategori_keuangan = '$kat' AND status_keuangan = 'sudah verifikasi' and cetak_keuangan = 'ya' and tanggal_keuangan between '$tglm' and '$tgla'");
        }

        return Excel::download(new KeuanganExport($hasil,$total,$kat), 'data_keuangan.xlsx');
    }


    public function stkeuangan()
    {

        $data = DB::SELECT("SELECT MONTHNAME(tanggal_keuangan) as bln, SUM(pemasukkan_keuangan) as mas , SUM(pengeluaran_keuangan) as kel FROM tabel_keuangan GROUP BY MONTH(tanggal_keuangan)");

        return view('/bendahara/st_keuangan',['data'=>$data]);

    }


}
