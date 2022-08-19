@extends('layout.layketua')
    
    @section('menu')

        <ul class="metismenu" id="menu">
            <li>
                <a  href="/bendahara">
                    <i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label"> Data</li>
            <li>
                <a href="/ketua" aria-expanded="false">
                    <i class="fas fa-wallet"></i><span class="nav-text">Data Verifikasi Keuangan</span>
                </a>
            </li>
            <li class="nav-active">
                <a href="#" aria-expanded="false">
                    <i class="fas fa-print"></i><span class="nav-text">Data Cetak Keuagan</span>
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Cetak Keuangan</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Pemasukkan</th>
                                                <th>Pengeluaran</th>
                                                <th>Tanggal</th>
                                                <th>Keterangan</th>
                                                <th>Status</th>
                                                <th>Etc</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $dat)
                                            <tr>
                                                <td>{{$dat->id}}</td>
                                                <td> <?php echo "Rp. ".number_format($dat->pemasukkan_keuangan)." ,-"; ?></td>
                                                <td><?php echo "Rp. ".number_format($dat->pengeluaran_keuangan)." ,-"; ?></td>
                                                <td><?= date('d M Y',strtotime($dat->tanggal_keuangan)); ?></td>
                                                <td>{{$dat->keterangan_keuangan}}</td>
                                                <td>{{$dat->status_keuangan}}</td>
                                                <td>
                                                    <a href="/cetak={{$dat->id}}" class="btn btn-success" style="color: white;"><i class="fa fa-check-circle"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </table>
                                </div>
                            </div>
                            <br>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
                   
    @endsection