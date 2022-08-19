<table>
    <thead>
        <tr>
            <td colspan="6" style="background-color:#c5c8c9;text-align: center; border: 1px solid #000000;">Data Rekap Keuangan</td>
        </tr>
        <tr style="border: 1px solid #000000;">
            <th style="width: 50px; background-color: #5db9e3; border: 1px solid #000000;">Id</th>
            <th style="width: 50px; background-color: #5db9e3; border: 1px solid #000000;">Pemasukkan</th>
            <th style="width: 50px; background-color: #5db9e3; border: 1px solid #000000;">Pengeluaran</th>
            <th style="width: 50px; background-color: #5db9e3; border: 1px solid #000000;">Tanggal</th>
            <th style="width: 50px; background-color: #5db9e3; border: 1px solid #000000;">Kategori</th>
            <th style="width: 50px; background-color: #5db9e3; border: 1px solid #000000;">Keterangan</th>
        </tr>
    </thead>
    <?php 
        $no = 1;
    ?>
    @foreach($hasil as $dat)
        <tr>
            <td style="border: 1px solid #000000;width: 10px;">{{$no++}}</td>
            <td style="border: 1px solid #000000;width: 30px;"><?php echo "Rp. ".number_format($dat->pemasukkan_keuangan)." ,-"; ?></td>
            <td style="border: 1px solid #000000;width: 30px;"><?php echo "Rp. ".number_format($dat->pengeluaran_keuangan)." ,-"; ?></td>
            <td style="border: 1px solid #000000;width: 30px;"><?= date('d M Y',strtotime($dat->tanggal_keuangan)); ?></td>
            <td style="border: 1px solid #000000;width: 30px;">{{$dat->kategori_keuangan}}</td>
            <td style="border: 1px solid #000000;width: 30px;">{{$dat->keterangan_keuangan}}</td>
        </tr>
    @endforeach
         
</table>
<br>
<table>
    <tr><td></td>
        <td>Saldo Terakhir {{$kat}}</td>
        <td>@foreach($total as $tot) <?php echo "Rp. ".number_format($tot->mas-$tot->kel)." ,-"; ?> @endforeach</td>
    </tr>
</table>

