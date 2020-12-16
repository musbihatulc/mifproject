        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember</h1>
          <!-- <p class="mb-4">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <!-- <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember</h6>
            </div> -->
            
            <div class="card-body">
                <div class="col-md-6" style="margin-bottom: 10px;">
                    <form action="<?= base_url('Report'); ?>" method="post">
                    <select name="jenis" class="form-control col-md-3 d-inline">
                        <option value="Tidak Aktif">Mutasi</option>
                        <option value="Aktif">Masuk</option>
                    </select>
                    <select name="tahun" class="form-control col-md-3 d-inline">
                        <option value="All">Semua</option>
                        <option value="3">3 Tahun Terakhir</option>
                        <option value="5">5 Tahun Terakhir</option>
                        <option value="10">10 Tahun Terakhir</option>
                    </select>
                    <button class="btn btn-info" type="submit">Filter</button>
                    </form>

                </div>
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Pangkat Gol Rg</th>
                        <th>Pangkat TMT</th>
                        <th>Nama Jabatan</th>
                        <th>Tahun Jabatan</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                    $no=1;
                      foreach($report as $baris){
                    ?>

                      <tr>
                      <td><?php echo $no++; ?> </td>
                      <td><?php echo $baris->Nama; ?></td>
                      <td><?php echo $baris->NIP; ?></td>
                      <td><?php echo $baris->Pangkat_gol_Rg; ?></td>
                      <td><?php echo $baris->Pangkat_tmt; ?></td>
                      <td><?php echo $baris->Nama_Jabatan; ?></td>
                      <td><?php echo $baris->Th_Jabatan; ?></td>
                      <td>
                        <div class="row">
                            <?php if($baris->status == 'Tidak Aktif'){  ?>
                          <a href="<?php echo base_url(); ?>Tables/restore/<?php echo $baris->NIP; ?>" type="button" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')">Restore</a>
                          <?php }else{ ?>
                            <p>Data Aktif</p>
                            <?php } ?>
                        </div>
                      </td> 
                      </tr>

                      <?php } ?>
                    </tbody>
                  </table>
                  <div class="mt-3">
                      <a href="<?php echo base_url(); ?>Tables/opentambah/" class="btn btn-primary">Tambah</a>
                      <a href="<?php echo base_url(); ?>Tables/simpan/" class="btn btn-danger">Simpan</a>
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