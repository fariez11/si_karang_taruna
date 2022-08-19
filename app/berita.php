<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class berita extends Model
{
    protected $table = 'tabel_berita';
    protected $fillable = [
        'id', 'nama_berita','isi_berita', 'foto_berita','tanggal_berita','penulis_berita'
    ];

    public static function getId(){
        return $getId = DB::table('tabel_berita')->orderBy('id','DESC')->take(1)->get();
    }

    public $timestamps = false;
}
