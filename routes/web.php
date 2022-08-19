<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});



Route::get('/log_kritik', 'Controller@logkritik');
Route::get('/reg_kritik', 'Controller@regkritik');


Route::get('/actlog', 'Controller@actlog');
Route::get('/register', 'Controller@regis');
Route::get('/regis', 'Controller@register');

Route::get('/berita', 'Controller@berita');
Route::get('/berita:det={id}', 'Controller@detber');
Route::get('/organisasi', 'Controller@organisasi');
Route::get('/jadwal', 'Controller@jadwal');
Route::get('/keuangan', 'Controller@keuangan');
Route::get('/kritik', 'Controller@kritik');
Route::get('/add_kritik', 'Controller@addkri');


Route::get('/ketua', 'CoKetua@home');
Route::get('/verifikasi={id}', 'CoKetua@verifikasi');
Route::get('/datacetkeuangan', 'CoKetua@cetak');
Route::get('/cetak={id}', 'CoKetua@updcet');

Route::get('/sekertaris', 'CoSeker@home');

Route::get('/dataakun', 'CoSeker@dtakun');
Route::post('/add_akun', 'CoSeker@addakun');
Route::get('/akun:upd={id}', 'CoSeker@updakun');
Route::get('/akun:del={id}', 'CoSeker@delakun');

Route::get('/databerita', 'CoSeker@dtberita');
Route::post('/add_berita', 'CoSeker@addber');
Route::post('/berita:upd={id}', 'CoSeker@updber');
Route::get('/berita:del={id}', 'CoSeker@delber');

Route::get('/datajadwal', 'CoSeker@dtjadwal');
Route::post('/add_jadwal', 'CoSeker@addjad');
Route::get('/jadwal:upd={id}', 'CoSeker@updjad');
Route::get('/jadwal:del={id}', 'CoSeker@deljad');




Route::get('/bendahara', 'CoBend@home');

Route::get('/datakeuangan', 'CoBend@dtkeuangan');
Route::post('/add_keuangan', 'CoBend@adduang');
Route::get('/uang:upd={id}', 'CoBend@upduang');
Route::get('/uang:del={id}', 'CoBend@deluang');

Route::get('/datacetakkeuangan', 'CoBend@dtcetkeuangan');
Route::get('/cetakkeuangan', 'CoBend@cetakkeuangan');

Route::get('/statkeuangan', 'CoBend@stkeuangan');


Route::get('/logout', 'Controller@logout');