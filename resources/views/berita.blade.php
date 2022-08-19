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
    
 
    <section class="page-title" style="background: url(assets/img/berita.jpg);">
        <div class="container">
            <div class="text text-center">
                <h2 style="color:#1761A0;">Daftar Berita</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li>Daftar Berita</li>
                </ul>
            </div>
        </div>
    </section>
    

    <section class="blog-section style-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-sm-12 col-xs-12">
                    <div class="left-side">

                        <form action="/berita">
                            <div class="row ">
                                <div class="col-md-11 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                    <!-- <select class="form-control" placeholder="Nama Lengkap " name="cari" required="" style="padding: 10px;height: 46px;">
                                        <option></option>
                                        @foreach($dber as $ber)
                                        <option>{{$ber->nama_berita}}</option>
                                        @endforeach
                                    </select> -->
                                    <input type="text" class="form-control" name="cari" placeholder="nama berita *"  style="padding: 10px;height: 46px;" autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-md-1 col-sm-12 col-xs-12">
                                    <div class="form-group">
                                        <button class="btn-primary" type="submit" style="padding:10px 20px 10px 20px; border-radius:6px;"><i class="fa fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>

                        <?php if(Session::get('kosong')){ ?>
                            <div class="alert" style="color: #155724;background-color: #d4edda;border-color: #c3e6cb;margin-bottom: 0px;">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                                mohon maaf nama berita yang anda cari tidak ada  !!!
                            </div>
                        <?php }else{

                        }?>

                        @foreach($data as $ber)
                        <div class="item-holder">
                            <div class="image-box">
                                <figure>
                                    <img src="assets/berita/{{$ber->foto_berita}}" alt="">
                                </figure>
                            </div>
                            <div class="images-text">
                                <h6>{{$ber->nama_berita}}</h6>
                                <p>Diposting <span><?= date('d M Y',strtotime($ber->tanggal_berita));?></span> by <a href="#"> {{$ber->penulis_berita}} </a></p>
                                <p style="text-align:justify;">{{$ber->isi}} <a href="/berita:det={{$ber->id}}">[ Read more ]</a></p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- <div class="styled-pagination">
                        <ul>
                            <li><a href="#"><span class="fa fa-angle-left" aria-hidden="true"></span></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#"><span class="fa fa-angle-right" aria-hidden="true"></span></a></li>
                        </ul>
                    </div>      -->                  
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
    
   @endsection