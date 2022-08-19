@extends('layout.laybend')
    
    @section('menu')

        <ul class="metismenu" id="menu">
            <li >
                <a  href="/bendahara">
                    <i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label"> Data</li>
            <li class="nav-active">
                <a href="#" aria-expanded="false">
                    <i class="fas fa-wallet"></i><span class="nav-text">Data Keuangan</span>
                </a>
            </li>
            <li>
                <a href="/datacetakkeuangan" aria-expanded="false">
                    <i class="fas fa-print"></i><span class="nav-text">Cetak Keuangan</span>
                </a>
            </li>
            <li>
                <a href="/statkeuangan" aria-expanded="false">
                    <i class="fas fa-chart-line"></i><span class="nav-text">Statistik Keuangan</span>
                </a>
            </li>
        </ul>

    @endsection
    <?php 

        $kat = array('uang kas','uang iuran');

    ?>
    @section('content')
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0" style="margin-top: 10px;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Keuangan</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button class="btn btn-primary px-3 ml-4" data-toggle="modal" data-target="#tambahmasuk"><i class="fa fa-plus-circle"></i> Tambah Pemasukkan</button>
                                <button class="btn btn-primary px-3 ml-4" data-toggle="modal" data-target="#tambahkeluar"><i class="fa fa-plus-circle"></i> Tambah Pengeluaran</button>
                                <!-- <h4 class="card-title">Data Akun</h4> -->
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Pemasukkan</th>
                                                <th>Pengeluaran</th>
                                                <th>Kategori</th>
                                                <th>Keterangan</th>
                                                <th>Tanggal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $dat)
                                            <tr>
                                                <td>{{$dat->id}}</td>
                                                <td><?php echo "Rp. ".number_format($dat->pemasukkan_keuangan)." ,-"; ?></td>
                                                <td><?php echo "Rp. ".number_format($dat->pengeluaran_keuangan)." ,-"; ?></td>
                                                <td>{{$dat->kategori_keuangan}}</td>
                                                <td>{{$dat->keterangan_keuangan}}</td>
                                                <td><?= date('d M Y',strtotime($dat->tanggal_keuangan)); ?></td>
                                                <td>
                                                    <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#edituang{{$dat->id}}"><i class="fa fa-edit"></i></a>
                                                    <a href="/uang:del={{$dat->id}}" class="btn btn-danger" onclick="return(confirm('Anda Yakin ?'));" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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

        <div class="modal fade" id="tambahmasuk">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Pemasukkan</h5>
                    </div>
                    <form action="{{url('/add_keuangan')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if($data == null){ ?>
                                     <input type="hidden" name="idk" value="1" readonly="">
                                <?php }else{?>
                                  @foreach($idk as $id)
                                      <input type="hidden" name="idk" value="{{$id->id+1}}" readonly="">
                                      <input type="hidden" name="saldo" value="{{$id->saldo_keuangan}}" required="">
                                  @endforeach
                                <?php } ?>
                                <style type="text/css">
                                    table tr td{
                                        padding: 5px;
                                    }
                                </style>
                                <table style="width: 100%;">
                                    <tr>
                                        <td>Nominal Pemasukkan</td>
                                        <td>:</td>
                                        <td><input type="number" name="masuk" class="form-control form-control-sm" placeholder="pemasukkan" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Kategori</td>
                                        <td>:</td>
                                        <td>
                                            <select class="form-control" name="kat" required="">
                                                <option></option>
                                                @foreach($kat as $ka)
                                                <option>{{$ka}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td><input type="text" name="ket" class="form-control form-control-sm" placeholder="Keterangan" required="" autocomplete="off"></td>
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


        <div class="modal fade" id="tambahkeluar">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Tambah Keluar</h5>
                    </div>
                    <form action="{{url('/add_keuangan')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <?php if($data == null){ ?>
                                     <input type="hidden" name="idk" value="1" readonly="">
                                <?php }else{?>
                                  @foreach($idk as $id)
                                      <input type="hidden" name="idk" value="{{$id->id+1}}" readonly="">
                                      <input type="hidden" name="saldo" value="{{$id->saldo_keuangan}}" required="">
                                  @endforeach
                                <?php } ?>
                                <style type="text/css">
                                    table tr td{
                                        padding: 5px;
                                    }
                                </style>
                                <table style="width: 100%;">
                                    <tr>
                                        <td>Nominal Pengeluaran</td>
                                        <td>:</td>
                                        <td><input type="number" name="keluar" class="form-control form-control-sm" placeholder="pengeluaran" required=""></td>
                                    </tr>
                                    <tr>
                                        <td>Kategori</td>
                                        <td>:</td>
                                        <td>
                                            <select class="form-control" name="kat" required="">
                                                <option></option>
                                                @foreach($kat as $ka)
                                                <option>{{$ka}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td><input type="text" name="ket" class="form-control form-control-sm" placeholder="Keterangan" required="" autocomplete="off"></td>
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
        <div class="modal fade" id="edituang{{$ed->id}}">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Keuangan</h5>
                    </div>
                        <?php 
                            $id = $ed->id;
                            $upd = DB::SELECT("select*from tabel_keuangan where id = '$id'");
                        ?>
                        @foreach($upd as $upd)
                    <form action="/uang:upd={{$upd->id}}" enctype="multipart/form-data">
                        {{csrf_field()}}

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <style type="text/css">
                                    table tr td{
                                        padding: 5px;
                                    }
                                </style>
                                    @foreach($idk as $id)
                                        <input type="hidden" name="saldo" value="{{$id->saldo_keuangan}}" required="">
                                    @endforeach
                                <table style="width: 100%;">
                                    <!-- <?php 
                                        if($upd->pengeluaran_keuangan == '0'){
                                    ?>
                                        <tr>
                                            <td>Nominal Pemasukkan</td>
                                            <td>:</td>
                                            <td><input type="number" name="keluar" class="form-control form-control-sm" value="{{$upd->pemasukkan_keuangan}}" required=""></td>
                                        </tr>
                                    <?php }else{ ?>
                                        <tr>
                                            <td>Nominal Pengeluaran</td>
                                            <td>:</td>
                                            <td><input type="number" name="keluar" class="form-control form-control-sm" value="{{$upd->pengeluaran_keuangan}}" required=""></td>
                                        </tr>
                                    <?php } ?> -->
                                    <tr>
                                        <td>Kategori</td>
                                        <td>:</td>
                                        <td>
                                            <select name="kat" class="form-control form-control-sm" required="">
                                                @foreach($kat as $ka)
                                                  <?php if ($ka == $upd->kategori_keuangan){ ?>
                                                       <option selected="">{{$ka}}</option>
                                                    <?php }else{ ?>
                                                      <option>{{$ka}}</option>
                                                    <?php }?>
                                                @endforeach
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td><input type="text" name="ket" class="form-control form-control-sm" value="{{$upd->keterangan_keuangan}}" required=""></td>
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