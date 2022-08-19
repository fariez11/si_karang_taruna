@extends('layout.layhome')
    
    @section('menu')
        <ul class="navigation clearfix">
            <li><a href="/">Home</a></li>
            <li><a href="/berita">Berita</a></li>
            <li><a href="/organisasi">Struktur Organisasi</a></li>
            <li><a href="/jadwal">Jadwal Kegiatan</a></li>
            <li class="current"><a href="#">Keuangan</a></li>
        <li><a href="/kritik">Kritik & Saran</a></li>
        </ul>
    @endsection



    @section('content')
    
    <section class="page-title" style="background: url(assets/img/keuangan.jpg);">
        <div class="container">
            <div class="text text-center">
                <h2 style="color:#1761A0;">Riwayat Keuangan</h2>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li>/</li>
                    <li>Riwayat Keuangan</li>
                </ul>
            </div>
        </div>
    </section>
    
    <!--Pricing Section-->
    <section class="pricing-section" style="background: url(images/background/4.jpg) no-repeat; background-size: cover;">
        <div class="container">
            <div class="section-title text-center">
                <h3 style="color:black;">Riwayat <span>Keuangan</span></h3>
                <p class="text-center" style="color:black;">Beberapa daftar total keuangan disamping diambil berdasarkan kategori yang dukumpulkan dari beberapa setiap kegiatan masyarakat.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    
                    <form action="/keuangan">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <select class="form-control" name="tahun" required=""  style="padding:10px;height: 46px;">
                                        <option></option>
                                        <option value="2020">tahun 2020</option>
                                        @foreach($bbthn as $dat)
                                        <option value="{{$dat->tahun}}">tahun {{$dat->tahun}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1">
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" style="padding:10px 20px 10px 20px; border-radius:6px;"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                            <div class="col-md-4"></div>
                        </div>
                    </form>
                    <br>
                </div>
                <!-- <div class="col-sm-6 col-md-4">
                    <div class="pricing text-center">
                        <div class="price-title pricing-bg active">
                            <h1><small>$</small>19<small>/Month</small></h1>
                            <span class="text-uppercase">PEMASUKKAN</span>
                        </div>
                    </div>
                </div> -->
                
                <div class="col-sm-6 col-md-4">
                    <div class="pricing text-center">
                        <div class="price-title pricing-bg active">
                            <h2 style="color: white;">@foreach($data1 as $dat)<?php echo "Rp. ".number_format($dat->msk1)." ,-"; ?>
                @endforeach</h2><br>
                            <span class="text-uppercase">TOTAL PEMASUKKAN</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="pricing text-center">
                        <div class="price-title pricing-bg active">
                            <h2 style="color: white;">@foreach($data1 as $dat)<?php echo "Rp. ".number_format($dat->klr1)." ,-"; ?>
                @endforeach</h2><br>
                            <span class="text-uppercase">TOTAL PENGELUARAN</span>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="pricing text-center">
                        <div class="price-title pricing-bg">
                            <h2 style="color: black;">@foreach($data1 as $dat)<?php echo "Rp. ".number_format($dat->khas1)." ,-"; ?>
                @endforeach</h2><br>
                            <span class="text-uppercase">TOTAL KAS</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="about-section about-style-2" style="margin-top:-50px;">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">TABEL DANA KEUANGAN TAHUN {{$cbthn}}</h4>
                            <hr>
                        </div>

                            <table class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Dana</th>
                                        <th>Jumlah</th>
                                        <th style="text-align:center;">Persen</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Pemasukkan</td>
                                        <td>
                                            @foreach($data1 as $dat) 
                                                <?php echo "Rp. ".number_format($dat->msk1)." ,-"; ?>
                                            @endforeach
                                        </td>
                                        <td style="text-align:center;">100%</td>
                                    </tr>
                                    <tr>
                                        <td>Pengeluaran</td>
                                        <td>
                                            @foreach($data1 as $dat) 
                                                <?php echo "Rp. ".number_format($dat->klr1)." ,-"; ?>
                                            @endforeach
                                        </td>
                                        <td style="text-align:center;"> 
                                            @foreach($data1 as $dat) 
                                                <?= (round($dat->klr1 / $dat->msk1 * 100 ,2)) ;?>%
                                            @endforeach
                                        </td>                               
                                    </tr>
                                    <tr>
                                        <td>Kas</td>
                                        <td>
                                            @foreach($data1 as $dat) 
                                                <?php echo "Rp. ".number_format($dat->khas1)." ,-"; ?>
                                            @endforeach
                                        </td>
                                        <td style="text-align:center;">
                                            @foreach($data1 as $dat) 
                                                <?= (round($dat->khas1 / $dat->msk1 * 100,2)) ;?>%
                                            @endforeach
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">GRAFIK DANA KEUANGAN TAHUN {{$cbthn}}</h4>
                            <hr>
                        </div>
                            <canvas id="grafik1" width="400" height="170"></canvas>
                    </div>
                </div>





                <div class="col-lg-6 col-sm-6 col-xs-12" style="margin-top:50px;">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">TABEL DANA BERDASARKAN KATEGORI TAHUN {{$cbthn}}</h4>
                            <hr>
                        </div>

                            <table class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Total Pemasukkan</th>
                                        <th>Total Pengeluaran</th>
                                    </tr>
                                </thead>
                                <?php 
                                    $jmsk2 = 0;
                                    $jklr2 = 0;
                                ?> 
                                <tbody>
                                    @foreach($data2 as $dat) 
                                    <tr>
                                        <td>{{$dat->kat}}</td>
                                        <td><?php echo "Rp. ".number_format($dat->msk2)." ,-"; ?></td>
                                        <td><?php echo "Rp. ".number_format($dat->klr2)." ,-"; ?></td>
                                    </tr>
                                        <?php 
                                            $jmsk2 += $dat->msk2;
                                            $jklr2 += $dat->klr2;
                                        ?>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td style="font-weight:bold;text-align: center;">TOTAL</td>
                                        <td><?php echo "Rp. ".number_format($jmsk2)." ,-"; ?></td>
                                        <td><?php echo "Rp. ".number_format($jklr2)." ,-"; ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12" style="margin-top:50px;">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">GRAFIK DANA BERDASARKAN KATEGORI TAHUN {{$cbthn}}</h4>
                            <hr>
                        </div>
                            <canvas id="grafik2" width="400" height="170"></canvas>
                    </div>
                </div>



                <div class="col-lg-12 col-sm-6 col-xs-12" style="margin-top:70px;">
                    <div class="content-text">
                        <div class="section-title">
                            <h3>INFOGRAFIS DANA PEMASUKKAN TAHUN {{$cbthn}}</h3>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">TABEL BERDASARKAN KETERANGAN</h4>
                            <hr>
                        </div>

                            <table class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Total Pemasukkan</th>
                                    </tr>
                                </thead>
                                <?php 
                                    $jmsk3 = 0;
                                ?> 
                                <tbody>
                                    @foreach($data3 as $dat) 
                                    <tr>
                                        <td>{{$dat->ket}}</td>
                                        <td><?php echo "Rp. ".number_format($dat->msk3)." ,-"; ?></td>
                                    </tr>
                                        <?php 
                                            $jmsk3 += $dat->msk3;
                                        ?>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td style="font-weight:bold;">TOTAL</td>
                                        <td><?php echo "Rp. ".number_format($jmsk3)." ,-"; ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">GRAFIK BERDASARKAN KETERANGAN</h4>
                            <hr>
                        </div>
                            <canvas id="grafik3" width="400" height="180"></canvas>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">

                <div class="col-lg-6 col-sm-6 col-xs-12" style="margin-top:50px;">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">TABEL BERDASARKAN BULAN</h4>
                            <hr>
                        </div>

                            <table class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Bulan</th>
                                        <th>Total Iuran</th>
                                        <th>Total Kas</th>
                                    </tr>
                                </thead>
                                <?php 
                                    $jiuran = 0;
                                    $jkhas = 0;
                                ?> 
                                <tbody>
                                    @foreach($data4 as $dat) 
                                    <tr>
                                        <td>{{$dat->bulan}}</td>
                                        <td><?php echo "Rp. ".number_format($dat->iuran)." ,-"; ?></td>
                                        <td><?php echo "Rp. ".number_format($dat->khas)." ,-"; ?></td>
                                    </tr>
                                        <?php 
                                            $jiuran += $dat->iuran;
                                            $jkhas += $dat->khas;
                                        ?>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td style="font-weight:bold;">TOTAL</td>
                                        <td><?php echo "Rp. ".number_format($jiuran)." ,-"; ?></td>
                                        <td><?php echo "Rp. ".number_format($jkhas)." ,-"; ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12" style="margin-top:50px;">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">GRAFIK BERDASARKAN BULAN</h4>
                            <hr>
                        </div>
                            <canvas id="grafik4" width="400" height="180"></canvas>
                    </div>
                </div>







                <div class="col-lg-12 col-sm-6 col-xs-12" style="margin-top:70px;">
                    <div class="content-text">
                        <div class="section-title">
                            <h3>INFOGRAFIS DANA PENGELUARAN TAHUN {{$cbthn}}</h3>
                        </div>
                    </div>
                </div>
                


                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">TABEL BERDASARKAN KETERANGAN</h4>
                            <hr>
                        </div>

                            <table class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Keterangan</th>
                                        <th>Total Pengeluaran</th>
                                    </tr>
                                </thead>
                                <?php 
                                    $jklr5 = 0;
                                ?> 
                                <tbody>
                                    @foreach($data5 as $dat) 
                                    <tr>
                                        <td>{{$dat->ket}}</td>
                                        <td><?php echo "Rp. ".number_format($dat->klr5)." ,-"; ?></td>
                                    </tr>
                                        <?php 
                                            $jklr5 += $dat->klr5;
                                        ?>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td style="font-weight:bold;">TOTAL</td>
                                        <td><?php echo "Rp. ".number_format($jklr5)." ,-"; ?></td>
                                    </tr>
                                </tfoot>
                            </table>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">GRAFIK BERDASARKAN KETERANGAN</h4>
                            <hr>
                        </div>
                            <canvas id="grafik5" width="400" height="190"></canvas>
                    </div>
                </div>
            </div>

            <div class="row">
                

                <div class="col-lg-6 col-sm-6 col-xs-12" style="margin-top:50px;">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">TABEL BERDASARKAN BULAN</h4>
                            <hr>
                        </div>

                        <table class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Bulan</th>
                                    <th>Total Iuran</th>
                                    <th>Total Kas</th>
                                </tr>
                            </thead>
                            <?php 
                                $jiuran = 0;
                                $jkhas = 0;
                            ?> 
                            <tbody>
                                @foreach($data6 as $dat) 
                                <tr>
                                    <td>{{$dat->bulan}}</td>
                                    <td><?php echo "Rp. ".number_format($dat->iuran)." ,-"; ?></td>
                                    <td><?php echo "Rp. ".number_format($dat->khas)." ,-"; ?></td>
                                </tr>
                                    <?php 
                                        $jiuran += $dat->iuran;
                                        $jkhas += $dat->khas;
                                    ?>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td style="font-weight:bold;">TOTAL</td>
                                    <td><?php echo "Rp. ".number_format($jiuran)." ,-"; ?></td>
                                    <td><?php echo "Rp. ".number_format($jkhas)." ,-"; ?></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-6 col-xs-12" style="margin-top:50px;">
                    <div class="content-text">
                        <div class="text-title" style="color: black;">
                            <h4 style="font-family: sans-serif;">GRAFIK BERDASARKAN BULAN</h4>
                            <hr>
                        </div>
                            <canvas id="grafik6" width="400" height="180"></canvas>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>

            var ctx = document.getElementById('grafik1').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php foreach ($data1 as $dat){ ?>'<?php echo $dat->tahun; ?>', <?php }?>],
                    datasets: [{
                        label: 'Total pemasukkan',
                        data: [ 
                                <?php foreach ($data1 as $dat){ ?>'<?php echo $dat->msk1; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    },{
                        label: 'Total pengeluaran',
                        data: [ 
                                <?php foreach ($data1 as $dat){ ?>'<?php echo $dat->klr1; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    },{
                        label: 'Total Kas',
                        data: [ 
                                <?php foreach ($data1 as $dat){ ?>'<?php echo $dat->khas1; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
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


            var ctx = document.getElementById('grafik2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [<?php foreach ($data2 as $dat){ ?>'<?php echo $dat->kat; ?>', <?php }?>],
                    datasets: [{
                        label: 'Total pemasukkan',
                        data: [ 
                                <?php foreach ($data2 as $dat){ ?>'<?php echo $dat->msk2; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    },{
                        label: 'Total pengeluaran',
                        data: [ 
                                <?php foreach ($data2 as $dat){ ?>'<?php echo $dat->klr2; ?>', <?php }?>, 
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


            var ctx = document.getElementById('grafik3').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php foreach ($data3 as $dat){ ?>'<?php echo $dat->ket; ?>', <?php }?>],
                    datasets: [{
                        label: 'Total pemasukkan',
                        data: [ 
                                <?php foreach ($data3 as $dat){ ?>'<?php echo $dat->msk3; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
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


            var ctx = document.getElementById('grafik4').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php foreach ($data4 as $dat){ ?>'<?php echo $dat->bulan; ?>', <?php }?>],
                    datasets: [{
                        label: 'Total Iuran',
                        data: [ 
                                <?php foreach ($data4 as $dat){ ?>'<?php echo $dat->iuran; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(54, 162, 235, 0.2)',
                        ],
                        borderColor: [
                            'rgba(54, 162, 235, 1)',
                        ],
                        borderWidth: 1
                    },{
                        label: 'Total Kas',
                        data: [ 
                                <?php foreach ($data4 as $dat){ ?>'<?php echo $dat->khas; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(75, 192, 192, 0.2)',
                        ],
                        borderColor: [
                            'rgba(75, 192, 192, 1)',
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


            var ctx = document.getElementById('grafik5').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php foreach ($data5 as $dat){ ?>'<?php echo $dat->ket; ?>', <?php }?>],
                    datasets: [{
                        label: 'Total Pengeluaran',
                        data: [ 
                                <?php foreach ($data5 as $dat){ ?>'<?php echo $dat->klr5; ?>', <?php }?>, 
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


            var ctx = document.getElementById('grafik6').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [<?php foreach ($data6 as $dat){ ?>'<?php echo $dat->bulan; ?>', <?php }?>],
                    datasets: [{
                        label: 'Total Iuran',
                        data: [ 
                                <?php foreach ($data6 as $dat){ ?>'<?php echo $dat->iuran; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                        ],
                        borderWidth: 1
                    },{
                        label: 'Total Kas',
                        data: [ 
                                <?php foreach ($data6 as $dat){ ?>'<?php echo $dat->khas; ?>', <?php }?>, 
                              ],
                        backgroundColor: [
                            'rgba(255, 159, 64, 0.2)',
                        ],
                        borderColor: [
                            'rgba(255, 159, 64, 1)',
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