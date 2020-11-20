<!DOCTYPE html>
<html>
<head>
    <title>Grafik Jumlah Pangkat Golongan RG</title>
    <!-- Load file plugin Chart.js -->
    <script src="<?php echo base_url()?>/assets/Chart.js/Chart.min.js"></script>
</head>
<body>
<br>

<h1>Grafik Jumlah Pangkat Golongan RG</h1>
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
                label:'Grafik',
                backgroundColor: ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)', 'rgb(128, 0, 0)', 'rgb(128, 128, 0)', 'rgb(255, 255, 0)', 'RGB(233, 150, 122)', 'RGB(0, 0, 128)'],
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

<!-- <div id="chartContainer" style="float: left; height: 400px; width: 100%;">
<script src="&lt;?php echo base_url(); ?&gt;assets/js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="&lt;?php echo base_url(); ?&gt;assets/jqwidgets/jqxcore.js" type="text/javascript"></script>
<script src="&lt;?php echo base_url(); ?&gt;assets/jqwidgets/jqxdraw.js" type="text/javascript"></script>
<script src="&lt;?php echo base_url(); ?&gt;assets/jqwidgets/jqxchart.core.js" type="text/javascript"></script>
<script src="&lt;?php echo base_url(); ?&gt;assets/jqwidgets/jqxdata.js" type="text/javascript"></script>        
<script type="text/javascript">
$(document).ready(function () {
// memanggil data array dengan JSON
var source =
     {
         datatype: "json",
         datafields: [
                { name: 'hasil' },
                { name: 'total' }
         ],
         url: '<?php echo base_url() ?>mifproject/C_grafik'
     };
var dataAdapter = new $.jqx.dataAdapter(source, { async: false, autoBind: true, loadError: function (xhr, status, error) { alert('Error loading "' + source.url + '" : ' + error); } });
// pengaturan jqxChart
    var settings = {
        title: "Survey Framework terbaik",
        description: "",
        enableAnimations: true,
        showLegend: true,
        showBorderLine: true,
        legendLayout: { left: 10, top: 160, width: 300, height: 200, flow: 'vertical' },
        padding: { left: 5, top: 5, right: 5, bottom: 5 },
        titlePadding: { left: 0, top: 0, right: 0, bottom: 10 },
        source: dataAdapter,
        colorScheme: 'scheme03',
        seriesGroups:
           [
            {
              type: 'pie',
              showLabels: true,
              series:
                [
                  { 
                     dataField: 'total',
                     displayText: 'hasil',
                     labelRadius: 170,
                     initialAngle: 15,
                     radius: 145,
                     centerOffset: 0,
                     formatFunction: function (value) {
                                        if (isNaN(value))
                                            return value;
                                            return parseFloat(value);
                                        },
                  }
                ]
             }
           ]
         };
       // Menampilkan Chart
      $('#chartContainer').jqxChart(settings);
   });
</script>    
</div>  -->
</body>
</html>