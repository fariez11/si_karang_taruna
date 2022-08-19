<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class kritik extends Model
{
    protected $table = 'tabel_kritik';
    protected $fillable = [
        'id', 'nama', 'rt','pesan','tgl'
    ];

    public static function getId(){
        return $getId = DB::table('tabel_kritik')->orderBy('id','DESC')->take(1)->get();
    }

    public $timestamps = false;
}
