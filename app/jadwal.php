<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class jadwal extends Model
{
    protected $table = 'tabel_kegiatan';
    protected $fillable = [
        'id','nama_kegiatan', 'tanggal_kegiatan'
    ];

    public static function getId(){
        return $getId = DB::table('tabel_kegiatan')->orderBy('id','DESC')->take(1)->get();
    }

    public $timestamps = false;
}
