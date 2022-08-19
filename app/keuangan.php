<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class keuangan extends Model
{
    protected $table = 'tabel_keuangan';
    protected $fillable = [
        'id', 'total_pemasukkan','total_pengeluaran', 'tanggal','keterangan_keuangan','status_keuangan','cetak_keuangan'
    ];

    public static function getId(){
        return $getId = DB::table('tabel_keuangan')->orderBy('id','DESC')->take(1)->get();
    }

    public $timestamps = false;
}
