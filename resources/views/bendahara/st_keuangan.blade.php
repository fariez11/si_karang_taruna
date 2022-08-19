@extends('layout.laybend')
    
    @section('menu')

        <ul class="metismenu" id="menu">
            <li >
                <a  href="/bendahara">
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
            <li class="nav-active">
                <a href="#" aria-expanded="false">
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
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Keuangan</a></li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="myChart" width="400" height="170"></canvas>
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
                type: 'bar',
                data: {
                    labels: [<?php foreach ($data as $dat){ ?>'<?php echo $dat->bln; ?>', <?php }?>],
                    datasets: [{
                        label: 'Jumlah pemasukkan',
                        data: [ 
                                <?php foreach ($data as $dat){ ?>'<?php echo $dat->mas; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    },{
                        label: 'Jumlah pengeluaran',
                        data: [ 
                                <?php foreach ($data as $dat){ ?>'<?php echo $dat->kel; ?>', <?php }?>, 
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