<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


use Session;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\akun;
use App\kritik;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
      return view('/sekertaris/home');

    }

    public function berita(Request $request)
    {
        $cari = $request->cari;

        if($cari == null){
            $data = DB::SELECT("select*, LEFT(isi_berita,150) as isi from tabel_berita order by tanggal_berita desc");
        }else{
            $data = DB::SELECT("select*, LEFT(isi_berita,150) as isi from tabel_berita where nama_berita like '%$cari%'");
        }

        $dber = DB::SELECT("select*from tabel_berita order by tanggal_berita desc limit 5");

        if($data == null){
            return view('berita',['data'=>$data,'dber'=>$dber])->with('kosong','.');
        }else{
            return view('berita',['data'=>$data,'dber'=>$dber]); 

        }
    }

    public function detber($id)
    {
        $data = DB::SELECT("select*from tabel_berita where id = '$id'");
        $dber = DB::SELECT("select*from tabel_berita order by tanggal_berita desc limit 5");

        return view('det_berita',['data'=>$data,'dber'=>$dber]);    
    }

    public function jadwal()
    {

        $data = DB::SELECT("select*from tabel_kegiatan where status_kegiatan = 'umum' order by tanggal_kegiatan desc ");

        return view('jadwal',['data'=>$data]); 
    }

    public function organisasi()
    {
        return view('organisasi'); 
    }

    public function keuangan(Request $request)
    {
        $cbthn = $request->tahun;
        $bbthn = DB::SELECT("SELECT YEAR(tanggal_keuangan) as tahun FROM tabel_keuangan GROUP BY tahun");

        $tahun = date('Y');

        if($cbthn == null){

            $data1 = DB::SELECT("SELECT YEAR(tanggal_keuangan) as tahun, SUM(pemasukkan_keuangan) as msk1, SUM(pengeluaran_keuangan) as klr1, (SUM(pemasukkan_keuangan) - SUM(pengeluaran_keuangan)) as khas1  FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$tahun'  GROUP BY tahun");

            $data2 = DB::SELECT("SELECT kategori_keuangan as kat, SUM(pemasukkan_keuangan) as msk2, SUM(pengeluaran_keuangan) as klr2  FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$tahun' GROUP BY kat");

            $data3 = DB::SELECT("SELECT keterangan_keuangan as ket, pemasukkan_keuangan as msk3 FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$tahun' GROUP BY ket");

            $data4 = DB::SELECT("SELECT MONTHNAME(tanggal_keuangan) as bulan,(SELECT SUM(pemasukkan_keuangan) FROM tabel_keuangan WHERE kategori_keuangan = 'uang iuran' and MONTHNAME(tanggal_keuangan) = bulan) as iuran,(SELECT SUM(pemasukkan_keuangan) FROM tabel_keuangan WHERE kategori_keuangan = 'uang kas' and MONTHNAME(tanggal_keuangan) = bulan) as khas FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$tahun' GROUP BY bulan");

            $data5 = DB::SELECT("SELECT keterangan_keuangan as ket, pengeluaran_keuangan as klr5 FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$tahun' GROUP BY ket");

            $data6 = DB::SELECT("SELECT MONTHNAME(tanggal_keuangan) as bulan,(SELECT SUM(pengeluaran_keuangan) FROM tabel_keuangan WHERE kategori_keuangan = 'uang iuran' and MONTHNAME(tanggal_keuangan) = bulan) as iuran,(SELECT SUM(pengeluaran_keuangan) FROM tabel_keuangan WHERE kategori_keuangan = 'uang kas' and MONTHNAME(tanggal_keuangan) = bulan) as khas FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$tahun' GROUP BY bulan");
        }else{

            $data1 = DB::SELECT("SELECT YEAR(tanggal_keuangan) as tahun, SUM(pemasukkan_keuangan) as msk1, SUM(pengeluaran_keuangan) as klr1, (SUM(pemasukkan_keuangan) - SUM(pengeluaran_keuangan)) as khas1  FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$cbthn'  GROUP BY tahun");

            $data2 = DB::SELECT("SELECT kategori_keuangan as kat, SUM(pemasukkan_keuangan) as msk2, SUM(pengeluaran_keuangan) as klr2  FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$cbthn' GROUP BY kat");

            $data3 = DB::SELECT("SELECT keterangan_keuangan as ket, pemasukkan_keuangan as msk3 FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$cbthn' GROUP BY ket");

            $data4 = DB::SELECT("SELECT MONTHNAME(tanggal_keuangan) as bulan,(SELECT SUM(pemasukkan_keuangan) FROM tabel_keuangan WHERE kategori_keuangan = 'uang iuran' and MONTHNAME(tanggal_keuangan) = bulan) as iuran,(SELECT SUM(pemasukkan_keuangan) FROM tabel_keuangan WHERE kategori_keuangan = 'uang kas' and MONTHNAME(tanggal_keuangan) = bulan) as khas FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$cbthn' GROUP BY bulan");

            $data5 = DB::SELECT("SELECT keterangan_keuangan as ket, pengeluaran_keuangan as klr5 FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$cbthn' GROUP BY ket");

            $data6 = DB::SELECT("SELECT MONTHNAME(tanggal_keuangan) as bulan,(SELECT SUM(pengeluaran_keuangan) FROM tabel_keuangan WHERE kategori_keuangan = 'uang iuran' and MONTHNAME(tanggal_keuangan) = bulan) as iuran,(SELECT SUM(pengeluaran_keuangan) FROM tabel_keuangan WHERE kategori_keuangan = 'uang kas' and MONTHNAME(tanggal_keuangan) = bulan) as khas FROM tabel_keuangan WHERE YEAR(tanggal_keuangan) = '$cbthn' GROUP BY bulan");

        }

        
        return view('keuangan',['bbthn'=>$bbthn,'data1'=>$data1,'data2'=>$data2,'data3'=>$data3,'data4'=>$data4,'data5'=>$data5,'data6'=>$data6,'cbthn'=>$cbthn]); 
    }

    public function regkritik(Request $request)
    {
        $id = $request->idu;
        $na = $request->nama;
        $us = $request->user;
        $pa = $request->pass;
        $rt = $request->nort;
        $no = $request->no;

        $data = new akun();

            $data->id = $id;
            $data->nama_lengkap_pengguna = ucfirst($na);
            $data->nomor_rukun_tetangga_pengguna = $rt;
            $data->nama_pengguna = $us;
            $data->sandi_pengguna = $pa;
            $data->nomor_ponsel_pengguna = $no;
            $data->tingkat_pengguna = 'guest';
            $data->save();

        return redirect('kritik')->with('regis','.');
    }

    public function logkritik(Request $request){
        $username = $request->user;
        $password = $request->pass;
        
        Session::flush();
        $data = DB::table('tabel_pengguna')->where([['nama_pengguna',$username],['sandi_pengguna',$password]])->get();
        foreach ($data as $key) {
            $nama = $key->nama_pengguna;
            $level = $key->tingkat_pengguna;
        };

        if (count($data) == 0){
            return redirect('/login')->with('gagal','.');
        }else{
            $na = DB::SELECT("select LEFT(nama_lengkap_pengguna,20) as nama from tabel_pengguna where nama_pengguna like '$nama'");
            foreach ($na as $nam) {
                Session::put('nama_pengguna',$nama);
                Session::put('nama',$nam->nama);
            }

            return redirect('/kritik');
        }
        

    }

    public function kritik()
    {
        $idk = kritik::getId();
        $ida = akun::getId();
        
        return view('kritik',['idk'=>$idk,'ida'=>$ida]); 
    }

    public function addkri(Request $request)
    {

        $id = $request->idk;
        $na = $request->nama;
        $no = $request->nort;
        $kr = $request->kritik;
        $tg = date('Y-m-d H:i:s');

        $data = new kritik();
            if($id == null){
                $data->id = 1;
            }else{
                $data->id = $id;
            }

            $data->nama = $na;
            $data->rt = $no;
            $data->pesan = $kr;
            $data->tgl = $tg;
            $data->save();

        Session::flush();
        return redirect('kritik')->with('addkri','.');
        
    }


    public function actlog(Request $request){
        $username = $request->user;
        $password = $request->pass;
        
        Session::flush();
        $data = DB::table('tabel_pengguna')->where([['nama_pengguna',$username],['sandi_pengguna',$password]])->get();
        foreach ($data as $key) {
            $nama = $key->nama_pengguna;
            $level = $key->tingkat_pengguna;
        };

        if (count($data) == 0){
            return redirect('/login')->with('gagal','.');
        }
        if($level == 'ketua') {
        	$na = DB::SELECT("select LEFT(nama_lengkap_pengguna,20) as nama from tabel_pengguna where nama_pengguna like '$nama'");
        	foreach ($na as $nam) {
        		Session::put('nama_pengguna',$nama);
        		Session::put('nama',$nam->nama);
        	}

            return redirect('/ketua');
        }
        else if($level == 'sekretaris') {
            $na = DB::SELECT("select LEFT(nama_lengkap_pengguna,20) as nama from tabel_pengguna where nama_pengguna like '$nama'");
            foreach ($na as $nam) {
                Session::put('nama_pengguna',$nama);
                Session::put('nama',$nam->nama);
            }

            return redirect('/sekertaris');
        }
        else if($level == 'bendahara') {

            $na = DB::SELECT("select LEFT(nama_lengkap_pengguna,20) as nama from tabel_pengguna where nama_pengguna like '$nama'");
        	foreach ($na as $nam) {
        		Session::put('nama_pengguna',$nama);
        		Session::put('nama',$nam->nama);
        	}

            return redirect('/bendahara');

        }
        else {
            return redirect('/login')->with('error','.');
        }

    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
