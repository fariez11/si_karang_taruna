@extends('layout.layhome')

@section('menu')
    <ul class="navigation clearfix">
        <li><a href="/">Home</a></li>
        <li><a href="/berita">Berita</a></li>
        <li class="current"><a href="/organisasi">Struktur Organisasi</a></li>
        <li><a href="/jadwal">Jadwal Kegiatan</a></li>
        <li><a href="/keuangan">Keuangan</a></li>
        <li><a href="/kritik">Kritik & Saran</a></li>
    </ul>
@endsection


@section('content')
    
    <section class="page-title" style="background: url(assets/img/organization2.jpg);">
        <div class="container">
            <div class="text text-center">
                <h2 style="color:#1761A0;">Struktur Organisasi</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Struktur Organisasi</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="service-section">
        <div class="container">
            <div class="section-title text-center">
                <h3> STRUKTUR ORGANISASI<span> KARANG TARUNA</span></h3>
            </div>
            <!-- <p class="text-center">Berikut adalah beberapa orang yang sudah tardfatar pada organisasi karang taruna</p> -->
            <div class="col-md-12">
                <center>
                    <img src="assets/img/struktur.png" style="width:90%;border-radius: 20px;">
                </center>
            </div>
        </div>
    </section>
    <!--End Service Section-->

    <section class="about-section about-style-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 col-xs-12 company">
                    <div class="section-title">
                        <h3>Beberapa Tugas</h3>
                    </div>
                    <div class="company-tab">
                        <ul class="nav nav-pills nav-justified">
                            <li class="active"><a data-toggle="pill" href="#menu1">Penasihat</a></li>
                            <li class=""><a data-toggle="pill" href="#menu2">Ketua</a></li>
                            <li class=""><a data-toggle="pill" href="#menu3">Wakil_Ketua</a></li>
                            <li class=""><a data-toggle="pill" href="#menu4">Bendahara</a></li>
                            <li class=""><a data-toggle="pill" href="#menu5">Sekretaris</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade active in">
                                <!-- <h3>Berikut beberapa tugas</h3> -->
                                <p style="padding-top: 10px;">Berikut yang merupakan tugas dari Penasihat adalah :</p>
                                <ul class="p0">
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">
                                            Memberikan arah kebijakan, masukan, nasehat dan pertimbangan-pertimbangan dalam suatu ide atau program dalam pengembangan yayasan
                                        </a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">
                                            Sebagai penampung aspirasi dalam usaha-usaha pengembangan yayasan sesuai visi misi
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p style="padding-top: 10px;">Berikut yang merupakan tugas dari Ketua adalah :</p>
                                <ul class="p0">
                                    <li><i class="fa fa-angle-right"></i>
                                        <a>Memimpin dan mengendalikan kegiatan para anggota pengurus</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a>Mengatasi dan bertanggung jawab terhadap segala permasalahan atas pelaksanaan tugas yang dijalankan oleh para pengurus</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Mengadakan evaluasi terhadap semua kegiatan yang telah dilaksanakan oleh pengurus</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <p style="padding-top: 10px;">Berikut yang merupakan tugas dari Wakil Ketua adalah :</p>
                                <ul class="p0">
                                    <li><i class="fa fa-angle-right"></i>
                                        <a>Mengkoordinasikan dan mewakili kepentingan organisasi di seluruh bidang dalam pengurusan.</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a>Mewakili ketua apabila berhalangan untuk setiap aktivitas dalam roda organisasi.</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Merumuskan segala kebijakan di seluruh bidang dalam pengurusan.</a>
                                    </li><li><i class="fa fa-angle-right"></i>
                                        <a href="">Mengawasi seluruh penyelenggaraan program kegiatan di seluruh bidang dalam pengurusan.</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="menu4" class="tab-pane fade">
                                <p style="padding-top: 10px;">Berikut yang merupakan tugas dari Bendahara adalah :</p>
                                <ul class="p0">
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Memegang dan mengelola harta kekayaan, baik berupa uang, barang-barang, maupun tagihan</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Menerima, menyimpan, membukukan keuangan</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Mengeluarkan uang sesuai dengan kebutuhan dan dengan persetujuan ketua</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Melaporkan dan mempertanggung-jawabkan tugasnya kepada ketua</a>
                                    </li>
                                </ul>
                            </div>
                            <div id="menu5" class="tab-pane fade">
                                <p style="padding-top: 10px;">Berikut yang merupakan tugas dari Sekretaris adalah :</p>
                                <ul class="p0">
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Mencatat dan menyusun notelen dalam rapat / pertemuan</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Membuat laporan bulanan / tahunan</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Melakukan surat menyurat</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Membuat bahan presentasi dan proposal</a>
                                    </li>
                                    <li><i class="fa fa-angle-right"></i>
                                        <a href="">Melaporkan dan mempertanggung-jawabkan pelaksanaan tugasnya kepada ketua</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-6 col-sm-6 col-xs-12 company">
                    <div class="section-title">
                        <h3>Seksi Bidang</h3>
                    </div>
                    <div class="accordion-box">
                            <!--Start single accordion box-->
                            <div class="accordion accordion-block" style="margin-top:-40px;">
                                <div class="accord-btn active"><h6>Seksi Keamanan</h6></div>
                                <div class="accord-content collapsed">
                                    <p style="padding-top: 10px;"> Berikut yang merupakan tugas dari Seksi Keamanan adalah :</p>
                                    <li style="margin-top:-20px;text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Koordinator dalam menjaga stabilitas ketertiban dan keamanan warga RT 01 RT 02 dan RT 03 Dkh.Tunjungan khususnya dibidang kepemudaan.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Menjaga keamanan dan ketertiban segala kegiatan organisasi Karang Taruna Dkh. Tunjungan.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Bertanggung jawab kepada Ketua Pemuda.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Memberi laporan pertanggungjawaban kepada Ketua Pemuda.
                                    </li>
                                </div>
                            </div>
                            <div class="accordion accordion-block">
                                <div class="accord-btn"><h6>Seksi Perlengkapan</h6></div>
                                <div class="accord-content">
                                    <p style="padding-top: 10px;"> Berikut yang merupakan tugas dari Seksi Perlengkapan adalah :</p>
                                    <li style="margin-top:-20px;text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Menyusun data yg diperlukan.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Menyiapkan perlenkapan
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Memantau hasil yg di peloreh/ melenkapinya dengan tambahan yg di perlukan
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Membantu sesuatu yang kurang lengkap yg berhubungan dengan perlengkapan yang di perlukan
                                    </li>
                                </div>
                            </div>
                            <div class="accordion accordion-block">
                                <div class="accord-btn"><h6>Seksi Kemasyarakatan </h6></div>
                                <div class="accord-content">
                                    <p style="padding-top: 10px;"> Berikut yang merupakan tugas dari Seksi Kemasyarakatan adalah :</p>
                                    <li style="margin-top:-20px;text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Menjabarkan perintah atasan melalui pengkajian permasalahan dan peraturan perundang-undangan.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Membagi tugas kepada bawahan sesuai lingkup tugasnya serta memberikan arahan dan petunjuk baik secara lisan maupun tertulis guna meningkatkan kelancaran pelaksanaan tugas.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Melaksanakan koordinasi internal maupun eksternal baik secara langsung maupun tidak langsung untuk mendapatkan informasi, masukan, serta dalam rangka sinkronisasi dan harmonisasi pelaksanaan kegiatan.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Mempelajari dan mengkaji peraturan perundang-undangan dan regulasi sektoral terkait lainnya sebagai bahan atau pedoman untuk melaksanakan kegiatan.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Menyiapkan bahan perumusan kebijakan teknis di bidang lembaga kemasyarakatan desa.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Menyiapkan bahan dan menyusun pedoman dan petunjuk teknis pelaksanaan program dan kegiataan di bidang lembaga kemasyarakatan desa.
                                    </li>
                                </div>
                            </div>
                            <div class="accordion accordion-block">
                                <div class="accord-btn"><h6>Seksi Sosial</h6></div>
                                <div class="accord-content">
                                    <p style="padding-top: 10px;"> Berikut yang merupakan tugas dari Seksi Sosial adalah :</p>
                                    <li style="margin-top:-20px;text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Memberikan bimbingan dibidang agama/rohani kepada anggota.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Mengadakan kegiatan positif dibidang rohani ex : pengajian, tadarusan, yasinan, dll.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Membuat rencana/program kerja yang akan datang dan evaluasi yang sudah dikerjakan dalam bentuk laporan tulis dan atau lisan.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Membuat buku laporan kegiatan.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Bertanggung jawab kepada Ketua Pemuda.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Memberi laporan pertanggungjawaban kepada Ketua Pemuda.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Mengumpulkan dana social untuk peduli lingkungan sesuai perintah ketua
                                    </li>
                                </div>
                            </div>
                            <div class="accordion accordion-block">
                                <div class="accord-btn"><h6>Seksi Agama </h6></div>
                                <div class="accord-content">
                                    <p style="padding-top: 10px;"> Berikut yang merupakan tugas dari Seksi Agama adalah :</p>
                                    <li style="margin-top:-20px;text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Menyambut tahun baru Islam dengan mengadakan kegiatan yang islami.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Menyambut tahun baru Islam dengan mengadakan kegiatan yang islami.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Mengadakan pengajian untuk segala usia.
                                    </li>
                                    <li style="text-align: justify;">
                                        <i class="fa fa-angle-right" style="padding-right:10px;"></i>
                                        Menyambut bulan ramadhan dengan membuka buka bersama di masjid terdekat oleh seluruh kampung sumber.
                                    </li>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--End About Section-->

@endsection

