<?php

namespace App\Http\Controllers;

use Session;
use File;
use Illuminate\Http\Request;
use App\Http\Requests;
use Authenticate;
use DB;
use App\akun;
use App\berita;
use App\jadwal;
use App\aktivitas;

class CoSeker extends Controller
{
    public function home()
    {
        $jpeng = DB::SELECT("SELECT COUNT(*) as jum FROM tabel_pengguna where hapus = 'tidak' and tingkat_pengguna NOT LIKE 'guest'");
        $jber = DB::SELECT("SELECT COUNT(*) as jum FROM tabel_berita");
        $jkeg = DB::SELECT("SELECT COUNT(*) as jum FROM tabel_kegiatan");

        return view('/sekertaris/home',['jpeng'=>$jpeng,'jber'=>$jber,'jkeg'=>$jkeg]);
    }

    public function dtakun()
    {

        $ida = akun::getId();
    	$data = DB::SELECT("select*from tabel_pengguna where hapus = 'tidak' and tingkat_pengguna NOT LIKE 'guest'");

        return view('/sekertaris/dt_akun',['ida'=>$ida,'data'=>$data]);

    }

    public function addakun(Request $request)
    {

        $id = $request->ida;
        $na = $request->nama;
        $em = $request->email;
        $us = $request->user;
        $pa = $request->pass;
        $no = $request->no;
        $le = $request->level;
        $gambar = $request->file('foto');

        if($gambar ==null){
            $foto = 'defaultprofile.png';
        }else{
            $foto = $gambar->getClientOriginalName();
            $request->file('foto')->move("assets/foto/", $foto);
        }

        $cek = DB::SELECT("select*from tabel_pengguna where nama_pengguna = '$us' and sandi_pengguna = '$pa'");
        if (count($cek) == 1){
            return redirect('/dataakun')->with('error','.');
        }else{

        $data = new akun();
            $data->id = $id;
            $data->nama_lengkap_pengguna = ucfirst($na);
            $data->nomor_rukun_tetangga_pengguna = $em;
            $data->nama_pengguna = $us;
            $data->sandi_pengguna = $pa;
            $data->nomor_ponsel_pengguna = $no;
            $data->tingkat_pengguna = $le;
            $data->foto_pengguna = $foto;
            $data->save();

        return redirect('dataakun')->with('addpet','.');
        }
    
    }

    public function updakun(Request $request,$id)
    {
        $na = $request->nama;
        $em = $request->email;
        $us = $request->user;
        $pa = $request->pass;
        $no = $request->no;
        $le = $request->level;
        $gambar = $request->file('foto');


        if($request->file('foto')==null){

            $data = DB::table('tabel_pengguna')->where('id',$id)->update(['nama_lengkap_pengguna'=>ucfirst($na),'nomor_rukun_tentangga_pengguna'=>$em,'nama_pengguna'=>$us,'sandi_pengguna'=>$pa,'nomor_ponsel_pengguna'=>$no,'tingkat_pengguna'=>$le]);

        }else{
            $gam = DB::SELECT("select*from tabel_pengguna where id = '$id'");
            foreach ($gam as $key) {
               if($key->foto == 'defaultprofile.png'){

                }else{
                    $image_path = "assets/foto/$key->foto_pengguna";
                    if(File::exists($image_path)) {
                    File::delete($image_path);
                    }
                }
            }
                $photo_path=$request->file('foto');
                $m_path=$photo_path->getClientOriginalName();
                $photo_path->move('assets/foto/',$m_path);

            $data = DB::table('tabel_pengguna')->where('id',$id)->update(['nama_lengkap_pengguna'=>ucfirst($na),'nomor_rukun_tetangga_pengguna'=>$em,'nama_pengguna'=>$us,'sandi_pengguna'=>$pa,'nomor_ponsel_pengguna'=>$no,'tingkat_pengguna'=>$le,'foto_pengguna'=>"$m_path"]);
        }

        return redirect('dataakun')->with('updpet','.');
    }

    public function delakun($id){
        $gam = DB::SELECT("select*from tabel_pengguna where id = '$id'");
        foreach ($gam as $key) {
            if($key->foto_pengguna == 'defaultprofile.png'){

            }else{
                $image_path = "assets/foto/$key->foto_pengguna";
                if(File::exists($image_path)) {
                File::delete($image_path);
                }
            }
        }

        $data = DB::table('tabel_pengguna')->where('id',$id)->update(['hapus'=>'ya']);

        // DB::table('tabel_pengguna')->where('id',$id)->delete();

        return redirect('dataakun')->with('delpet','.');
    }

    public function dtberita()
    {

        $idb = berita::getId();
        $data = DB::SELECT("select*from tabel_berita");

        return view('/sekertaris/dt_berita',['idb'=>$idb,'data'=>$data]);

    }

    public function addber(Request $request)
    {

        $id = $request->idb;
        $ju = $request->judul;
        $is = $request->isi;
        $pe = $request->pen;
        $tg = $request->tgl;
        $ga = $request->file('foto');

        if($ga ==null){
            $foto = 'defaultimage.png';
        }else{
            $foto = $ga->getClientOriginalName();
            $request->file('foto')->move("assets/berita/", $foto);
        }

        $cek = DB::SELECT("select*from tabel_berita where nama_berita = '$ju'");
        if (count($cek) == 1){
            return redirect('/databerita')->with('error','.');
        }else{

        $data = new berita();
            $data->id = $id;
            $data->nama_berita = ucfirst($ju);
            $data->isi_berita = $is;
            $data->foto_berita = $foto;
            $data->tanggal_berita = $tg;
            $data->penulis_berita = $pe;
            $data->save();

        return redirect('databerita')->with('addpet','.');
        }
    
    }

    public function updber(Request $request,$id)
    {
        $ju = $request->judul;
        $is = $request->isi;
        $pe = $request->pen;
        $tg = $request->tgl;
        $ga = $request->foto;

        if($ga == null){

           $data = DB::table('tabel_berita')->where('id',$id)->update(['nama_berita'=>ucfirst($ju),'isi_berita'=>$is,'penulis_berita'=>$pe,'tanggal_berita'=>$tg]);
        }else{

            $gam = DB::SELECT("select*from tabel_berita where id = '$id'");
            foreach ($gam as $key) {
               if($key->foto_berita == 'defaultimage.png'){

                }else{
                    $image_path = "assets/berita/$key->foto_berita";
                    if(File::exists($image_path)) {
                    File::delete($image_path);
                    }
                }
            }

                $photo_path=$request->file('foto');
                $m_path=$photo_path->getClientOriginalName();
                $photo_path->move('assets/berita/',$m_path);

            $data = DB::table('tabel_berita')->where('id',$id)->update(['nama_berita'=>ucfirst($ju),'isi_berita'=>$is,'penulis_berita'=>$pe,'tanggal_berita'=>$tg,'foto_berita'=>"$m_path"]);      
        }

        

        return redirect('databerita')->with('updpet','.');
    }

    public function delber($id){
        $gam = DB::SELECT("select*from tabel_berita where id = '$id'");
        foreach ($gam as $key) {
            if($key->foto_berita == 'defaultimage.png'){

            }else{
                $image_path = "assets/berita/$key->foto_berita";
                if(File::exists($image_path)) {
                File::delete($image_path);
                }
            }
        }

        DB::table('tabel_berita')->where('id',$id)->delete();

        return redirect('databerita')->with('delpet','.');
    }

    public function dtjadwal()
    {

        $idj = jadwal::getId();
        $data = DB::SELECT("select*from tabel_kegiatan  ");
        $peng = DB::SELECT("select*from tabel_pengguna");

        return view('/sekertaris/dt_jadwal',['idj'=>$idj,'data'=>$data,'peng'=>$peng]);

    }


    public function addjad(Request $request)
    {

        $id = $request->idj;
        $ke = $request->keg;
        $tg = $request->tgl;

        $data = new jadwal();
            if($id == null){
                $data->id = 1;
            }else{
                $data->id = $id;
            }
            $data->nama_kegiatan = $ke;
            $data->tanggal_kegiatan = $tg;
            $data->save();

        return redirect('datajadwal')->with('addpet','.');
    }

    public function updjad(Request $request,$id)
    {
        $na = $request->nama;
        $ke = $request->keg;
        $tg = $request->tgl;

        $data = DB::table('tabel_kegiatan')->where('id',$id)->update(['pengguna_id'=>$na,'nama_kegiatan'=>$ke,'tanggal_kegiatan'=>$tg]);

        return redirect('datajadwal')->with('updpet','.');
    }

    public function deljad($id){

        DB::table('tabel_kegiatan')->where('id',$id)->delete();

        return redirect('datajadwal')->with('delpet','.');
    }


}
