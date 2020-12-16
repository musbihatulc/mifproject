<<<<<<< HEAD


<div class="card-body" style="max-width: 1500px;">
<h1 style="text-align:center">Grafik Jumlah Pangkat Golongan RG</h1>
<canvas id="myChart"></canvas>
    <?php
=======
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Grafik</h1>
          <!-- <p class="mb-4">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember</h6>
            </div> -->
            <div class="col-md-10" style="margin: 17px">
            <canvas id="myChart"></canvas>
            <?php
>>>>>>> a7bf15a4a92632a572b8aaa40bc4280e47695882
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
    <a href="<?php echo base_url(); ?>Home" class="btn btn-primary">Kembali</a>
<a href="<?php echo base_url(); ?>C_grafik/simpanpangkat" class="btn btn-success">Simpan Grafik</a>

</div>
</div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->


<!-- Modal: modalAbandonedCart-->
<div class="modal fade right" id="modalAbandonedCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h5 class="heading text-danger">Hapus data</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">

        <div class="row">
          <div class="col-3">
            <p></p>
            <p class="text-center"><i class="text-danger fas fa-trash fa-4x"></i></p>
          </div>

          <div class="col-9">
            <p>Apakah anda yakin ingin menghapus data ini?</p>
            <a href="<?php echo base_url(); ?>Tables/hapus/<?php echo $baris->NIP; ?>" type="button" class="text-secondary btn btn-outline-danger">Hapus</a>
            <a type="button" class="text-white btn btn-secondary waves-effect" data-dismiss="modal">Tidak</a>
          </div>
        </div>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- Modal: modalAbandonedCart-->

    <!-- Load file plugin Chart.js -->
    <script src="<?php echo base_url()?>/assets/Chart.js/Chart.min.js"></script>

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

<<<<<<< HEAD
</div>
=======
<!-- <script>
		 window.print();
</script>

 <style type="text/css" media="print">
 @page { size: auto; }
</style> -->
>>>>>>> a7bf15a4a92632a572b8aaa40bc4280e47695882
