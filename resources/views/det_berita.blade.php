@extends('layout.layhome')
    
    @section('menu')

        <ul class="navigation clearfix">
            <li><a href="/">Home</a></li>
            <li class="current"><a href="/berita">Berita</a></li>
            <li><a href="/organisasi">Struktur Organisasi</a></li>
            <li><a href="/jadwal">Jadwal Kegiatan</a></li>
            <li><a href="/keuangan">Keuangan</a></li>
        <li><a href="/kritik">Kritik & Saran</a></li>
        </ul>

    @endsection



    @section('content')

        <!--Page Title-->
    <section class="page-title" style="background: url(assets/img/berita.jpg);">
        <div class="container">
            <div class="text text-center">
                <h2>Berita </h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li>Berita</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
    

    <!--Blog Section-->
    <section class="blog-section blog-single">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12 col-xs-12">
                    <div class="left-side">
                        <div class="item-holder">
                            @foreach($data as $ber)
                            <div class="image-box">
                                <figure>
                                    <img src="assets/berita/{{$ber->foto_berita}}" alt="">
                                </figure>
                            </div>
                            <div class="images-text">
                                <h6>{{$ber->nama_berita}}</h6>
                                <p>Diposting <span><?= date('d M Y',strtotime($ber->tanggal_berita));?></span> by <a href="#"> {{$ber->penulis_berita}} </a></p>
                                <p style="color:#838694;font-size: 16px;text-align: justify;font-family: roboto;white-space: pre-line;">{{$ber->isi_berita}}</p>
                            </div>
                            @endforeach                               
                        </div>
                        
                    </div>                      
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12">
                    <div class="right-side">
                        <div class="side-blog">
                            <div class="sec-title">
                                <h6>Recent Posts</h6>
                            </div>
                            @foreach($dber as $lber)
                            <div class="item">
                                <div class="image-box">
                                    <figure>
                                        <img src="assets/berita/{{$lber->foto_berita}}" alt="">
                                    </figure>
                                </div>
                                <div class="image-text">
                                    <h6>{{$lber->nama_berita}}</h6>
                                    <span>by {{$lber->penulis_berita}}</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>                    
        </div>
    </section>
    <!--End Blog Section-->

    @endsection
