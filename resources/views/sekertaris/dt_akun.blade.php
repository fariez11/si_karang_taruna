@extends('layout.laysek')
    
    @section('menu')

        <ul class="metismenu" id="menu">
            <li >
                <a  href="/sekertaris">
                    <i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label"> Data</li>
            <li class="nav-active">
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

    <?php 

        $lev = array('ketua','anggota','sekretaris','bendahara');

    ?>

    @section('content')
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0" style="margin-top: 10px;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Akun</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary px-3 ml-4" data-toggle="modal" data-target="#tambahdata"><i class="fa fa-plus-circle"></i> Tambah Akun</button>
                                <!-- <h4 class="card-title">Data Akun</h4> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Nama</th>
                                                <th>RT</th>
                                                <th>Username</th>
                                                <th>Level</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $dat)
                                            <tr>
                                                <td>{{$dat->id}}</td>
                                                <td>{{$dat->nama_lengkap_pengguna}}</td>
                                                <td>{{$dat->nomor_rukun_tetangga_pengguna}}</td>
                                                <td>{{$dat->nama_pengguna}}</td>
                                                <td>{{$dat->tingkat_pengguna}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#info{{$dat->id}}"><i class="fa fa-info-circle"></i></a>
                                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$dat->id}}"><i class="fa fa-edit"></i></a>
                                                    <a href="/akun:del={{$dat->id}}" class="btn btn-danger" onclick="return(confirm('Anda Yakin ?'));" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tambahdata">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Akun</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button> -->
                    </div>
                    <form action="{{url('/add_akun')}}" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <center>
                                    FOTO<br>
                                   <img id="image-preview" style="width: 120px; height: 120px;margin: 10px 0px 10px 0px;border:1px solid white;border-radius: 100px;"><br>
                                    <input type="file" name="foto" class="form-control" id="image-source" onchange="previewImage();" style="width: 90%;" autocomplete="off"><br><br>
                                </center>
                            </div>
                            <div class="col-md-8">
                                <?php if($data == null){ ?>
                                     <input type="hidden" name="ida" value="1" readonly="">
                                <?php }else{?>
                                  @foreach($ida as $id)
                                      <input type="hidden" name="ida" value="{{$id->id+1}}" readonly="">
                                  @endforeach
                                <?php } ?>
                                <table style="width: 100%;">
                                    <tr>
                                        <td>Nama Pengguna</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama" class="form-control form-control-sm" placeholder="nama" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>No RT Pengguna</td>
                                        <td>:</td>
                                        <td><input type="number" name="email" class="form-control form-control-sm" placeholder="email" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><input type="text" name="user" class="form-control form-control-sm" placeholder="nama_pengguna" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:</td>
                                        <td><input type="text" name="pass" class="form-control form-control-sm" placeholder="password" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>No Ponsel</td>
                                        <td>:</td>
                                        <td><input type="number" name="no" class="form-control form-control-sm" placeholder="no ponsel" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Level</td>
                                        <td>:</td>
                                        <td>
                                            <select name="level" class="form-control form-control-sm" >
                                                <option></option>
                                                @foreach($lev as $le)
                                                <option>{{$le}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                        <button class="btn btn-primary"><i class="fa fa-check-circle"></i> Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        @foreach($data as $id)
        <div class="modal fade" id="info{{$id->id}}">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Akun</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img src="assets/foto/{{$id->foto_pengguna}}" style="width: 100%; margin-left: 10px; border-radius: 100%;">
                            </div>
                            <div class="col-md-9">
                                 <style type="text/css">
                                    table tr td{
                                        padding: 5px; 
                                    }
                                </style>
                                <table>
                                    <tr>
                                        <td width="150">Nama Pengguna</td>
                                        <td>:</td>
                                        <td>{{$id->nama_lengkap_pengguna}}</td>
                                    </tr>
                                    <tr>
                                        <td>No RT Pengguna</td>
                                        <td>:</td>
                                        <td>{{$id->nomor_rukun_tetangga_pengguna}}</td>
                                    </tr>
                                    <tr>
                                        <td >nama_pengguna</td>
                                        <td>:</td>
                                        <td>{{$id->nama_pengguna}}</td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:</td>
                                        <td>{{$id->sandi_pengguna}}</td>
                                    </tr>
                                    <tr>
                                        <td>No Ponsel</td>
                                        <td>:</td>
                                        <td>{{$id->nomor_ponsel_pengguna}}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        @foreach($data as $ed)
        <div class="modal fade" id="edit{{$ed->id}}">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Akun</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button> -->
                    </div>

                    <?php
                        $edit = $ed->id;
                        $upda = DB::SELECT("select*from tabel_pengguna where id = '$edit'");
                    ?>
                    @foreach($upda as $upd)
                    <form action="/akun:upd={{$upd->id}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <center>
                                    FOTO<br>
                                    <input type="file" name="foto" class="form-control" id="image-source" style="width: 90%;" autocomplete="off"><br><br>
                                </center>
                            </div>
                            <div class="col-md-8">
                                <table style="width: 100%;">
                                    <tr>
                                        <td>Nama Pengguna</td>
                                        <td>:</td>
                                        <td><input type="text" name="nama" class="form-control form-control-sm" value="{{$upd->nama_lengkap_pengguna}}" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>No RT Pengguna</td>
                                        <td>:</td>
                                        <td><input type="number" name="email" class="form-control form-control-sm" value="{{$upd->nomor_rukun_tetangga_pengguna}}" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Username</td>
                                        <td>:</td>
                                        <td><input type="text" name="user" class="form-control form-control-sm" value="{{$upd->nama_pengguna}}" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td>:</td>
                                        <td><input type="text" name="pass" class="form-control form-control-sm" value="{{$upd->sandi_pengguna}}" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>No Ponsel</td>
                                        <td>:</td>
                                        <td><input type="number" name="no" class="form-control form-control-sm" value="{{$upd->nomor_ponsel_pengguna}}" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Level</td>
                                        <td>:</td>
                                        <td>
                                            <select name="level" class="form-control form-control-sm" >
                                                @foreach($lev as $le)
                                                  <?php if ($le == $upd->tingkat_pengguna){ ?>
                                                       <option selected="">{{$le}}</option>
                                                    <?php }else{ ?>
                                                      <option>{{$le}}</option>
                                                    <?php }?>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                        <button class="btn btn-primary"><i class="fa fa-check-circle"></i> Simpan</button>
                    </div>
                    </form>
                    @endforeach
                </div>
            </div>
        </div>
        @endforeach
                    
    @endsection