@extends('layout.laysek')
    
    @section('menu')

        <ul class="metismenu" id="menu">
            <li >
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
            <li>
                <a href="/databerita" aria-expanded="false">
                    <i class="fas fa-newspaper"></i><span class="nav-text">Data Berita</span>
                </a>
            </li>
            <li class="nav-active">
                <a href="#" aria-expanded="false">
                    <i class="fas fa-calendar-day"></i><span class="nav-text">Data Jadwal Kegiatan</span>
                </a>
            </li>
        </ul>

    @endsection

    <?php 

        $lev = array('anggota','sekertaris','bendahara');

    ?>

    @section('content')
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0" style="margin-top: 10px;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Jadwal Kegiatan</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary px-3 ml-4" data-toggle="modal" data-target="#tambahdata"><i class="fa fa-plus-circle"></i> Tambah Jadwal Kegiatan</button>
                                <!-- <h4 class="card-title">Data Akun</h4> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Kegiatan</th>
                                                <th>Tanggal </th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $dat)
                                            <tr>
                                                <td>{{$dat->id}}</td>
                                                <td>{{$dat->nama_kegiatan}}</td>
                                                <td>{{$dat->tanggal_kegiatan}}</td>
                                                <td style="width: 110px;">
                                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#edit{{$dat->id}}"><i class="fa fa-edit"></i></a>
                                                    <a href="/jadwal:del={{$dat->id}}" class="btn btn-danger" onclick="return(confirm('Anda Yakin ?'));" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
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
                        <h5 class="modal-title">Tambah Jadwal Kegiatan</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                        </button> -->
                    </div>
                    <form action="{{url('/add_jadwal')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <style type="text/css">
                                table tr td{
                                    padding-bottom: 10px;
                                }
                            </style>
                            <div class="col-md-12">
                                  @foreach($idj as $id)
                                      <input type="hidden" name="idj" value="{{$id->id+1}}" readonly="">
                                  @endforeach
                                <table style="width: 100%;">
                                    <tr>
                                        <td>Nama Kegiatan</td>
                                        <td>:</td>
                                        <td><input type="text" name="keg" class="form-control" placeholder="kegiatan" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pelaksanaan</td>
                                        <td>:</td>
                                        <td><input type="date" name="tgl" class="form-control" placeholder="tanggal" required=""></td>
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
                        $upda = DB::SELECT("select*from tabel_kegiatan where id = '$edit'");
                    ?>
                    @foreach($upda as $upd)
                    <form action="/jadwal:upd={{$upd->id}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <table style="width: 100%;">
                                        <td>Nama Kegiatan</td>
                                        <td>:</td>
                                        <td><input type="text" name="keg" class="form-control form-control-md" value="{{$upd->nama_kegiatan}}" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pelaksanaan</td>
                                        <td>:</td>
                                        <td><input type="date" name="tgl" class="form-control form-control-md" value="{{$upd->tanggal_kegiatan}}" required=""></td>
                                    </tr>
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