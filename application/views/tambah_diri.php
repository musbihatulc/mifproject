        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Diri Pegawai</h1>
          <!-- <p class="mb-4">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->
            
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember</h6>
            </div> -->
            <div class="col-md-8" style="margin: 17px">
            <form action="<?php echo base_url('Datadiri/tambahdiri') ?>" method="post" enctype="multipart/form-data" class="user"> 
    <div class="form-group">
    <select name="NIP" class="form-control">
        <?php $db = $this->db->query("SELECT tm_user.NIP, tm_user.Nama, tm_user.Nama_Jabatan FROM `tm_user` WHERE tm_user.NIP NOT IN (SELECT data_diri.NIP FROM data_diri)")->result();
        foreach($db as $d) { ?>
        <option value="<?= $d->NIP ?>"><?= $d->Nama ?> <?= $d->Nama_Jabatan ?></option>
        <?php } ?>  
    </select>
    <?php echo form_error('No', '<p class="text-danger mt-2">', '</p>'); ?>
    </div>
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Alamat'); ?>" id="Alamat" name="Alamat" 
    placeholder="Alamat" >
    <?php echo form_error('Alamat', '<p class="text-danger mt-2">', '</p>'); ?> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('TTL'); ?>" id="TTL" name="TTL" 
    placeholder="TTL"> 
    <?php echo form_error('TTL', '<p class="text-danger mt-2">', '</p>'); ?>
    </div>
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Status_pernikahan'); ?>" id="Status_pernikahan" name="Status_pernikahan" 
    placeholder="Status"> 
    <?php echo form_error('Status_pernikahan', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('No_telp'); ?>" id="No_telp" name="No_telp" 
    placeholder="No_telp"> 
    <?php echo form_error('No_telp', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <select name="Jenis_kelamin" class="form-control">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Agama'); ?>" id="Agama" name="Agama" 
    placeholder="Agama">
    <?php echo form_error('Agama', '<p class="text-danger mt-2">', '</p>'); ?> 
    <input type="file" class="form-control"  style="margin-top: 10px;" id="Agama" name="Gambar" 
    >
    </div>  

            <input type="submit" class="btn btn-success" name="submit" value="Tambah"> 
            <a href="<?php echo base_url('Tables'); ?>" class="btn btn-primary">Kembali</a> 
            </form><hr> 
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
