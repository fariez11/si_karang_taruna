@extends('layout.layhome')
    
    @section('menu')
        <ul class="navigation clearfix">
            <li><a href="/">Home</a></li>
            <li><a href="/berita">Berita</a></li>
            <li><a href="/organisasi">Struktur Organisasi</a></li>
            <li><a href="/jadwal">Jadwal Kegiatan</a></li>
            <li><a href="/keuangan">Keuangan</a></li>
            <li class="current"><a href="/kritik">Kritik & Saran</a></li>
        </ul>
    @endsection



    @section('content')
    
    <!--Page Title-->
    <section class="page-title" style="background: url(assets/img/kritik.jpg);">
        <div class="container">
            <div class="text text-center">
                <h2 style="color:#1761A0;">Kritik & Saran</h2>
                <ul>
                    <li><a href="/" style="color:#1761A0;">Home</a></li>
                    <li style="color:white;">/</li>
                    <li style="color:white;">Kritik & Saran</li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->

    <!-- Contact Info -->
    <section class="contact-info">
        <div class="container">
            <h3 class="hidden">Contact info</h3>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item text-center">
                        <div class="icon-box">
                            <i class="flaticon-signs"></i>
                        </div>
                        <p>DUSUN GROJOGAN KECAMATAN WATES</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item text-center">
                        <div class="icon-box">
                            <i class="flaticon-technology-2"></i>
                        </div>
                        <p>+(62)85-850-171-979</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="item text-center">
                        <div class="icon-box">
                            <i class="flaticon-message"></i>
                        </div>
                        <p>grojogankartar@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info -->


    <!-- Contact Page -->
    <div class="contact-page" style="margin-top: -60px;">
        <div class="container">
            <h3 class="hidden">Kritik & Saran</h3>

            <?php if(Session::get('addkri')){ ?>
                <div class="alert" style="color: #155724;background-color: #d4edda;border-color: #c3e6cb;margin-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                     Kritik dan saran  anda telah terkirim , terima kasih atas kritik dan sarannya !!!
                </div>
            <?php }elseif(Session::get('berhasil')){ ?>
                <div class="alert" style=" color: #004085; background-color: #cce5ff; border-color: #b8daff;margin-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                     silahkan mengisi kritik dan saran !!!
                </div>
            <?php }elseif(Session::get('regis')){ ?>
                <div class="alert" style=" color: #004085; background-color: #cce5ff; border-color: #b8daff;margin-bottom: 0px;">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span></button>
                     akun anda telah terdaftar silahkan login terlebih dahulu !!!
                </div>
            <?php }else{

            }?>
            <br>
            
            <?php if(Session::get('nama') == null){?>
                <div class="row">
                    <div class="col-md-5" style="border: 3px solid lightgrey;border-radius: 15px;text-align: center;padding: 30px;">
                        <h4 style="font-family: roboto;">Jika anda sudah memiliki akun silahkan Login dibawah ini</h4>
                        <br><br>
                        <button class="btn btn-primary btn-lg px-3 ml-4" data-toggle="modal" data-target="#login">
                            <i class="fa fa-sign-in-alt"></i> Login 
                        </button>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5" style="border: 3px solid lightgrey;border-radius: 15px;text-align: center;padding: 30px;">
                        <h4 style="font-family: roboto;">Jika anda belum memiliki akun silahkan Daftar dibawah ini</h4>
                        <br><br>
                        <button class="btn btn-primary btn-lg px-3 ml-4" data-toggle="modal" data-target="#register">
                            <i class="fa fa-user-plus"></i> Daftar 
                        </button>
                    </div>
                </div>
                
            <?php }else{?>
                <form id="contact_form" name="contact_form" action="{{url('/add_kritik')}}">
                    <div class="row clearfix">
                        @foreach($idk as $id)
                        <input type="hidden" class="form-control"  name="idk" value="{{$id->id+1}}" readonly="">
                        @endforeach
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" id="cf-name" name="nama" class="form-control" placeholder="Nama Lengkap" autocomplete="off" required="">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="number" id="cf-name" name="nort" class="form-control" max="99" autocomplete="off" placeholder="Nomor RT" required="">
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <textarea id="cf-message" name="kritik" class="form-control required" placeholder="Tinggalkan Saran dan Kritik"></textarea>
                            </div>
                            <div class="form-group form-bottom">
                                <button class="btn-one" type="submit" id="cf-submit" name="submit" data-loading-text="Please wait...">send message</button>
                            </div>
                        </div>
                    </div>
                </form>
            <?php }?>
            
        </div>
    </div>

    <div class="modal fade" id="login">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content" style="margin-top:100px;">
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                    </div>
                    <form action="{{url('/log_kritik')}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <style>
                                    table tr td{
                                        padding: 10px;
                                    }
                                </style>    
                                <table style="width: 100%;">
                                    <tr>
                                        <!-- <td>Username</td>
                                        <td>:</td> -->
                                        <td>
                                            <input type="text" name="user" class="form-control" placeholder="username" autocomplete="off" required="" style="height:50px;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <!-- <td>Password</td>
                                        <td>:</td> -->
                                        <td>
                                            <input type="text" name="pass" class="form-control" placeholder="password" autocomplete="off" required="" style="height:50px;">
                                        </td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Batal</button>
                        <button class="btn btn-primary"><i class="fa fa-sign-in-alt"></i> Masuk</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>


        <div class="modal fade" id="register">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content" style="margin-top:100px;">
                    <div class="modal-header">
                        <h5 class="modal-title">Daftar</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button> -->
                    </div>
                    <form action="{{url('/reg_kritik')}}" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">

                                <style>
                                    table tr td{
                                        padding: 10px;
                                    }
                                </style>
                                @foreach($ida as $id)
                                    <input type="hidden" name="ida" value="{{$id->id+1}}" readonly="">
                                @endforeach
                                <table style="width: 100%;">
                                    <tr>
                                        <td>Nama Pengguna</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama" class="form-control" placeholder="nama lengkap" autocomplete="off" required="" style="height:50px;"></td>
                                    </tr>
                                    <tr>
                                        <td>Nomor Rukun Tetangga</td>
                                        <td>:</td>
                                        <td><input type="number" name="nort" class="form-control" placeholder="nomor RT" autocomplete="off" required="" style="height:50px;"></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><input type="text" name="user" class="form-control" placeholder="username" autocomplete="off" required="" style="height:50px;"></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:</td>
                                        <td><input type="text" name="pass" class="form-control" placeholder="password" autocomplete="off" required="" style="height:50px;"></td>
                                    </tr>
                                    <tr>
                                        <td>No Ponsel</td>
                                        <td>:</td>
                                        <td><input type="number" name="no" class="form-control" placeholder="nomor ponsel" autocomplete="off" required="" style="height:50px;"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                        <button class="btn btn-primary"><i class="fa fa-plus-circle"></i> Daftar</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
  

    
    
   @endsection