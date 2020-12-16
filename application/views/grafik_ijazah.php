<div class="card-body" style="max-width: 1500px;">
<h1 style="text-align:center">Grafik Tingkat Ijazah</h1>
<canvas id="myChart1"></canvas>
    <?php
    //Inisialisasi nilai variabel awal
    $tingkat_ijazah= "";
    $jumlah=null;
    foreach ($total as $buah)
    {
        $tingkat=$buah->Tkt_ijazah_pend;
        $tingkat_ijazah .= "'$tingkat'". ", ";
        $jum=$buah->jumlahs;
        $jumlah .= "$jum". ", ";
    }
    ?>
<script>
    var ctx = document.getElementById('myChart1').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'pie',
        // The data for our dataset
        data: {
            labels: [<?php echo $tingkat_ijazah; ?>],
            datasets: [{
                label:'Grafik',
                backgroundColor: ['rgb(138, 43, 226)' ,'rgb(210, 105, 30)','rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)', 'rgb(128, 0, 0)', 'rgb(128, 128, 0)', 'rgb(255, 255, 0)', 'RGB(233, 150, 122)', 'RGB(0, 0, 128)'],
                borderColor: ['rgb(255, 99, 132)'],
                data: [<?php echo $jumlah; ?>]
            }]
        },
        // Configuration options go here
        options: {
            scales: {
                Axes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>

</div>
