@extends('layout.laysek')
    
    @section('menu')

        <ul class="metismenu" id="menu">
            <li class="nav-active">
                <a>
                    <i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label"> Data</li>
            <li>
                <a href="/dataakun" aria-expanded="false">
                    <i class="fas fa-users"></i><span class="nav-text">Data Akun</span>
                </a>
            </li>
            <li>
                <a href="/databerita" aria-expanded="false">
                    <i class="fas fa-newspaper"></i><span class="nav-text">Data Berita</span>
                </a>
            </li>
            <li>
                <a href="/datajadwal" aria-expanded="false">
                    <i class="fas fa-calendar-day"></i><span class="nav-text">Data Jadwal Kegiatan</span>
                </a>
            </li>
        </ul>

    @endsection

    @section('content')
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">

                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body gradient-4" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fas fa-users"></i></span>
                                    <div class="media-body">
                                        <h3 class="card-widget__title">@foreach($jpeng as $peng) {{$peng->jum}} Pengguna @endforeach</h3>
                                        <h5 class="card-widget__subtitle">Jumlah pengguna</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body gradient-4" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fas fa-newspaper"></i></span>
                                    <div class="media-body">
                                        <h4 class="card-widget__title">@foreach($jber as $ber) {{$ber->jum}} berita @endforeach</h4>
                                        <h5 class="card-widget__subtitle">Jumlah Berita</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body gradient-4" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fas fa-running"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">@foreach($jkeg as $keg) {{$keg->jum}} Kegiatan @endforeach</h2>
                                        <h5 class="card-widget__subtitle">Jumlah Kegiatan</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    @endsection