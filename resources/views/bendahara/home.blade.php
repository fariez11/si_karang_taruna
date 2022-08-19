@extends('layout.laybend')
    
    @section('menu')

        <ul class="metismenu" id="menu">
            <li class="nav-active">
                <a>
                    <i class="fas fa-tachometer-alt"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-label"> Data</li>
            <li>
                <a href="/datakeuangan" aria-expanded="false">
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

    @section('content')
        <div class="content-body">
            <div class="row page-titles mx-0">
                <div class="col p-md-0" style="margin-top: 10px;">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <!-- <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Keuangan</a></li> -->
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row"><!-- 
                    <div class="col-3">
                        <div class="card card-widget">
                            <div class="card-body gradient-3" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="icon-home"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title">520</h2>
                                        <h5 class="card-widget__subtitle">All Properties</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    @foreach($iuran as $tot)
                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body gradient-4" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fas fa-sign-in-alt"></i></span>
                                    <div class="media-body">
                                        <h3 class="card-widget__title"><?php echo "Rp. ".number_format($tot->mas)." ,-"; ?></h3>
                                        <h5 class="card-widget__subtitle">Total Pemasukkan Iuran</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body gradient-4" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fas fa-sign-out-alt"></i></span>
                                    <div class="media-body">
                                        <h4 class="card-widget__title"><?php echo "Rp. ".number_format($tot->kel)." ,-"; ?></h4>
                                        <h5 class="card-widget__subtitle">Total Pengeluaran iuran</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body gradient-9" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fas fa-balance-scale"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title"><?php echo "Rp. ".number_format($tot->mas-$tot->kel)." ,-"; ?></h2>
                                        <h5 class="card-widget__subtitle">Saldo Terakhir iuran</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    @foreach($kas as $tot)
                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body gradient-4" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fas fa-sign-in-alt"></i></span>
                                    <div class="media-body">
                                        <h3 class="card-widget__title"><?php echo "Rp. ".number_format($tot->mas)." ,-"; ?></h3>
                                        <h5 class="card-widget__subtitle">Total Pemasukkan Kas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body gradient-4" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fas fa-sign-out-alt"></i></span>
                                    <div class="media-body">
                                        <h4 class="card-widget__title"><?php echo "Rp. ".number_format($tot->kel)." ,-"; ?></h4>
                                        <h5 class="card-widget__subtitle">Total Pengeluaran Kas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="card card-widget">
                            <div class="card-body gradient-9" style="border-radius: 10px;">
                                <div class="media">
                                    <span class="card-widget__icon"><i class="fas fa-balance-scale"></i></span>
                                    <div class="media-body">
                                        <h2 class="card-widget__title"><?php echo "Rp. ".number_format($tot->mas-$tot->kel)." ,-"; ?></h2>
                                        <h5 class="card-widget__subtitle">Saldo Terakhir Kas</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"> Grafik Dana Iuran</div>
                            <div class="card-body">
                                <canvas id="myChart" width="400" height="170"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-header"> Grafik Dana Kas</div>
                            <div class="card-body">
                                <canvas id="myChart2" width="400" height="170"></canvas>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php foreach ($datiuran as $dat){ ?>'<?= date('d M Y',strtotime($dat->tanggal_keuangan));?>', <?php }?>],
                    datasets: [{
                        label: 'Jumlah pemasukkan iuran ',
                        data: [ 
                                <?php foreach ($datiuran as $dat){ ?>'<?php echo $dat->mas; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    },{
                        label: 'Jumlah pengeluaran iuran',
                        data: [ 
                                <?php foreach ($datiuran as $dat){ ?>'<?php echo $dat->kel; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });


            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php foreach ($datkas as $dat){ ?>'<?= date('d M Y',strtotime($dat->tanggal_keuangan));?>', <?php }?>],
                    datasets: [{
                        label: 'Jumlah pemasukkan kas ',
                        data: [ 
                                <?php foreach ($datkas as $dat){ ?>'<?php echo $dat->mas; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    },{
                        label: 'Jumlah pengeluaran kas',
                        data: [ 
                                <?php foreach ($datkas as $dat){ ?>'<?php echo $dat->kel; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endsection