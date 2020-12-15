<!DOCTYPE html>
<html>
<head>
    <title>Grafik Jumlah Pangkat Golongan RG</title>
    <!-- Load file plugin Chart.js -->
    <script src="<?php echo base_url()?>/assets/Chart.js/Chart.min.js"></script>
</head>
<body>
<br>

<a href="<?php echo base_url(); ?>Home" class="btn btn-primary">Kembali</a>
<a href="<?php echo base_url(); ?>C_grafik/simpanpangkat" class="btn btn-primary">Simpan Grafik</a>
<h1 style="text-align:center">Grafik Jumlah Pangkat Golongan RG</h1>
<canvas id="myChart"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $pangkat_gol= "";
    $jumlah=null;
    foreach ($hasil as $item)
    {
        $pangkat=$item->Pangkat_gol_Rg;
        $pangkat_gol .= "'$pangkat'". ", ";
        $jum=$item->total;
        $jumlah .= "$jum". ", ";
    }
    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $pangkat_gol; ?>],
            datasets: [{
                label:'Grafik Lingkaran',
                backgroundColor: ['rgb(138, 43, 226)' ,'rgb(210, 105, 30)','rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)', 'rgb(128, 0, 0)', 'rgb(128, 128, 0)', 'rgb(255, 255, 0)', 'RGB(233, 150, 122)', 'RGB(0, 0, 128)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>

<!-- <script>
		 window.print();
</script>

 <style type="text/css" media="print">
 @page { size: auto; }
</style> -->
</body>
</html>