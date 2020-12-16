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
            <?php foreach($detail as $a) { ?>
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            
                                <div class="card-body">
                                    <h3 class="card-header text-center" style="background:#fff; color:black;"><b>DATA DIRI PEGAWAI</b></h3> <br>
                                    <div class="row">
                                        <div class="col-md-5 col-xs-12" style="margin-left: 10px;">
                                            <h5 class="">DATA DIRI PEGAWAI</h5><br>
                                            <div class="" style="margin-left: 15px">
                                                <div class="form-group2 row">
                                                    <label for="fname" class="col-sm-6 col-xs-5 col-md-6 control-label col-form-label">1. Nama </label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $a->Nama ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">2. NIP</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $a->NIP ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">3. Alamat</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $a->Alamat ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">4. Tempat / Tanggal Lahir</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $a->TTL ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">5. Status</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $a->Status ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">6. No. Telepon</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $a->No_telp ?></label>
                                                    </div>
                                                </div>

                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">7. Jabatan</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $a->Nama_Jabatan ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">8. Jenis Kelamin</label>
                                                    <div class="col-sm-6 col-xs-4 col-md-6">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $a->Jenis_kelamin ?></label>
                                                    </div>
                                                </div>
                                                <div class="form-group2 row">
                                                    <label for="lname" class="col-sm-6 col-xs-5 col-md-6  control-label col-form-label">9. Agama</label>
                                                    <div class="col-sm-6 col-md-6 col-xs-4">
                                                        <label for="fname" class=" control-label col-form-label">: <?= $a->Agama ?></label>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                
                                                <br>
                                                <div class="text-right">
                                                    <img src="<?= base_url('assets/img/'.$a->Gambar) ?>" width="300px !important" height="400px">
                                                    
                                                </div>

                                            </div><br>
                                        </div>

                                        

                                    </div>
                                    </div>

    
    </div>
    </div>
    </div>
            <?php } ?>

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