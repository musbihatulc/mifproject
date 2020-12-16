        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember</h1>
          <!-- <p class="mb-4">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
            <a href="<?= base_url('Datadiri/tambah'); ?>" class="btn btn-info btn-lg" style="margin:10px">Tambah </a>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember</h6>
            </div> -->
            <div class="row" style="margin: 17px">
 <?php 
 foreach($user as $s) { ?>
  <div class="col-sm-6" style="margin-bottom: 15px">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title"><?= $s->Nama ?></h3>
        <h4 class="card-text"><?= $s->NIP ?></h4p>
        <h5 class="card-text"><?= $s->Nama_Jabatan ?></h5>
        <a href="<?= base_url('Datadiri/detail/'.$s->NIP) ?>" class="btn btn-primary">Detail</a>
        <a href="<?= base_url('Datadiri/editdiri/'.$s->NIP) ?>" class="btn btn-warning">Edit</a>
        <a href="<?= base_url('Datadiri/hapus/'.$s->NIP) ?>" onclick="return confirm('Apakah anda yakin ingin melakukan Hapus?')"  class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
 <?php } ?>
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