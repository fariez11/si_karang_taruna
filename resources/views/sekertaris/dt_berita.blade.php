@extends('layout.laysek')
    
    @section('menu')

        <ul class="metismenu" id="menu">
            <li>
                <a  href="/sekertaris">
                    <i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label"> Data</li>
            <li>
                <a href="/dataakun" aria-expanded="false">
                    <i class="fas fa-users"></i><span class="nav-text">Data Akun</span>
                </a>
            </li>
            <li class="nav-active">
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
            <div class="row page-titles mx-0">
                <div class="col p-md-0" style="margin-top: 10px;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Berita</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary px-3 ml-4" data-toggle="modal" data-target="#tambahdata"><i class="fa fa-plus-circle"></i> Tambah Berita</button>
                                <!-- <h4 class="card-title">Data Berita</h4> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Judul Berita</th>
                                                <th>penulis_berita</th>
                                                <th>Tgl Posting</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $dat)
                                            <tr>
                                                <td>{{$dat->id}}</td>
                                                <td style="width: 360px;">{{$dat->nama_berita}}</td>
                                                <td style="width: 140px;">{{$dat->penulis_berita}}</td>
                                                <td>{{$dat->tanggal_berita}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#info{{$dat->id}}"><i class="fa fa-info-circle"></i></a>
                                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$dat->id}}"><i class="fa fa-edit"></i></a>
                                                    <a href="/berita:del={{$dat->id}}" class="btn btn-danger" onclick="return(confirm('Anda Yakin ?'));" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="width: 1100px;margin-left: -140px;">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Berita</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button> -->
                    </div>
                    <form action="{{url('/add_berita')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <center>
                                    GAMBAR<br>
                                   <img id="image-preview" style="max-width: 310px; max-height: 150px;margin: 10px 0px 10px 0px;border:1px solid white;"><br>
                                    <input type="file" name="foto" class="form-control" id="image-source" onchange="previewImage();" style="width: 90%;" autocomplete="off"><br><br>
                                </center>
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 120px;">Penulis Berita</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="pen" class="form-control form-control-sm" placeholder="penulis" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Terbit</td>
                                        <td>:</td>
                                        <td>
                                            <input type="date" name="tgl" class="form-control form-control-sm" required="">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-8">
                                <?php if($data == null){ ?>
                                     <input type="hidden" name="idb" value="1" readonly="">
                                <?php }else{?>
                                  @foreach($idb as $id)
                                      <input type="hidden" name="idb" value="{{$id->id+1}}" readonly="">
                                  @endforeach
                                <?php } ?>
                                <style type="text/css">
                                    td{
                                        padding: 5px;
                                    }
                                </style>
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="width: 100px;">Judul Berita</td>
                                        <td style="width: 10px;">:</td>
                                        <td><input type="text" name="judul" class="form-control form-control-sm" placeholder="judul" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Isi Berita</td>
                                        <td>:</td>
                                        <td>
                                            <textarea class="form-control form-control-sm" name="isi" required="" style="width: 100%; height: 370px;resize: none;"></textarea>
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
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="width: 1100px;margin-left: -140px;">
                    <div class="modal-header">
                        <h5 class="modal-title">Detail Berita</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <center><img src="assets/berita/{{$id->foto_berita}}" style="max-width: 100%;"></center>
                                <br>
                                <table style="color:black">
                                    <tr>
                                        <td>Penulis Berita</td>
                                        <td>:</td>
                                        <td>{{$id->penulis_berita}}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Terbit</td>
                                        <td>:</td>
                                        <td>{{$id->tanggal_berita}}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-8">
                                    <h4>{{$id->nama_berita}}</h4><br>
                                    <p style="color:#8B839D;font-size: 14px;text-align: justify;font-family: roboto;white-space: pre-line;">{{$id->isi_berita}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


        @foreach($data as $ed)
        <div class="modal fade" id="edit{{$ed->id}}">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content" style="width: 1100px;margin-left: -140px;">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Berita</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button> -->
                    </div>
                    <?php

                        $edit = $ed->id;
                        $upda = DB::SELECT("select*from tabel_berita where id = '$edit'");

                    ?>
                    @foreach($upda as $upd)
                    <form  action="/berita:upd={{$upd->id}}"  method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                              <!--   <center>
                                    GAMBAR<br>
                                   <img id="image-preview" style="max-width: 310px; max-height: 150px;margin: 10px 0px 10px 0px;border:1px solid white;"><br>
                                    <input type="file" name="foto" class="form-control" id="image-source" onchange="previewImage();" style="width: 90%;" autocomplete="off"><br><br>
                                </center> -->
                                <table style="width: 100%">
                                    <tr>
                                        <td style="width: 120px;">Penulis Berita</td>
                                        <td>:</td>
                                        <td>
                                            <input type="text" name="pen" class="form-control form-control-sm" value="{{$upd->penulis_berita}}" required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Terbit</td>
                                        <td>:</td>
                                        <td>
                                            <input type="date" name="tgl" class="form-control form-control-sm" value="{{$upd->tanggal_berita}}"required="">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 120px;">Foto</td>
                                        <td>:</td>
                                        <td>
                                            <input type="file" name="foto" class="form-control" style="width: 100%;" autocomplete="off">
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-8">
                                <style type="text/css">
                                    td{
                                        padding: 5px;
                                    }
                                </style>
                                <table style="width: 100%;">
                                    <tr>
                                        <td style="width: 100px;">Judul Berita</td>
                                        <td style="width: 10px;">:</td>
                                        <td><input type="text" name="judul" class="form-control form-control-sm" value="{{$upd->nama_berita}}" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Isi Berita</td>
                                        <td>:</td>
                                        <td>
                                            <textarea class="form-control form-control-sm" name="isi" required="" style="width: 100%; height: 370px;resize: none;">{{$upd->isi_berita}}</textarea>
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