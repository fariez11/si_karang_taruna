<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class akun extends Model
{
    protected $table = 'tabel_pengguna';
    protected $fillable = [
        'id', 'nama_lengkap_pengguna', 'nama_pengguna','sandi_pengguna','nomor_rukun_tetangga_pengguna','nomor_ponsel_pengguna','tingkat_pengguna','foto_pengguna','hapus'
    ];

    public static function getId(){
        return $getId = DB::table('tabel_pengguna')->orderBy('id','DESC')->take(1)->get();
    }

    public $timestamps = false;
}
