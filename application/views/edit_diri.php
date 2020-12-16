        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Data Diri Pegawai</h1>
          <!-- <p class="mb-4">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember</h6>
            </div> -->
            <?php foreach ($dataku as $dataku) { ?>
              <div class="col-md-8" style="margin: 17px">
                <form action="<?php echo base_url('Datadiri/edit/'.$dataku->NIP) ?>" method="post" enctype="multipart/form-data" class="user">
                  <div class="form-group">
                    <input type="hidden" class="form-control form-control-user" value="<?php echo $dataku->NIP; ?>" id="Alamat" name="NIP" placeholder="Alamat">
                    <input type="text" class="form-control form-control-user" value="<?php echo $dataku->Alamat; ?>" id="Alamat" name="Alamat" placeholder="Alamat">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" value="<?php echo $dataku->TTL; ?>" id="TTL" name="TTL" placeholder="TTL">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" value="<?php echo $dataku->Status_pernikahan; ?>" id="Status_pernikahan" name="Status_pernikahan" placeholder="Status">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" value="<?php echo $dataku->No_telp; ?>" id="No_telp" name="No_telp" placeholder="No_telp">
                  </div>
                  <div class="form-group">
                    <select name="Jenis_kelamin" class="form-control">
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-user" value="<?php echo $dataku->Agama; ?>" id="Agama" name="Agama" placeholder="Agama">
                    <input type="file" class="form-control" style="margin-top: 10px;" id="Gambar" name="Gambar">
                    <input type="hidden" class="form-control" style="margin-top: 10px;" value="<?= $dataku->Gambar ?>" id="Gambar" name="oldfoto">
                    <img width="300" height="300" src="<?= base_url('assets/img/' . $dataku->Gambar) ?>">
                  </div>
                  <input type="submit" class="btn btn-warning" name="submit" value="Edit">
                  <a href="<?php echo base_url('Tables'); ?>" class="btn btn-primary">Kembali</a>
                </form>
                <hr>
              </div>
          </div>
        <?php } ?>
        </div>

        </div>

        </div>


        <!-- Modal: modalAbandonedCart-->
        <div class="modal fade right" id="modalAbandonedCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="false">
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
