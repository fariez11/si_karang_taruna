@extends('layout.layhome')
    
    @section('menu')
        <ul class="navigation clearfix">
            <li><a href="/">Home</a></li>
            <li><a href="/berita">Berita</a></li>
            <li><a href="/organisasi">Struktur Organisasi</a></li>
            <li class="current"><a href="/jadwal">Jadwal Kegiatan</a></li>
            <li><a href="/keuangan">Keuangan</a></li>
        <li><a href="/kritik">Kritik & Saran</a></li>
        </ul>
    @endsection



    @section('content')
    
    <section class="page-title" style="background: url(assets/img/jadwal2.jpg);">
        <div class="container">
            <div class="text text-center">
                <h2 style="color:#1761A0;">Jadwal Kegiatan</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>/</li>
                    <li>Jadwal Kegiatan</li>
                </ul>
            </div>
        </div>
    </section>
    
    <!--About Section-->
    <section class="about-section about-style-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="content-text">
                        <div class="section-title">
                            <h3>Kegiatan</h3>
                        </div>
                        <!-- <h4>We offer a full range of Digital marketing services.</h4><br> -->
                        <p style="text-align:justify;">Beberapa jadwal disamping merupakan bagian dari kegiatan-kegiatan yang sering dilakukan warga dalam setiap bulan dan setiap tahun yang bertujuan untuk menjaga keakraban dan keaktifan dari setiap warga.</p>
                        <br>
                       <!--  <div class="link-btn">
                            <a href="#" class="btn-one">Learn More</a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12 company">
                    <div class="section-title">
                        <h3>Jadwal Kegiatan</h3>
                    </div>
                    <div class="col-md-12">
                        <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>nama kegiatan</th>
                                    <th>tanggal</th>
                                </tr>
                            </thead>
                            <?php $no = 1;?>
                            <tbody>
                                @foreach($data as $dat)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$dat->nama_kegiatan}}</td>
                                    <td><?= date('d M Y',strtotime($dat->tanggal_kegiatan)); ?></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

    
    
   @endsection