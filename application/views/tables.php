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
                    foreach($user as $baris){
                  ?>

                    <tr>
                    <td><?php echo $baris->No; ?></td>
                    <td><?php echo $baris->Nama; ?></td>
                    <td><?php echo $baris->NIP; ?></td>
                    <td><?php echo $baris->Pangkat_gol_Rg; ?></td>
                    <td><?php echo $baris->Pangkat_tmt; ?></td>
                    <td><?php echo $baris->Nama_Jabatan; ?></td>
                    <td><?php echo $baris->Th_Jabatan; ?></td>
                    <td> <a href="<?php echo base_url(); ?>Tables/detail/<?php echo $baris->NIP; ?>" class="btn btn-success">Detail</a>
                      <a href="<?php echo base_url(); ?>Tables/edit/<?php echo $baris->NIP; ?>" class="btn btn-warning">Edit</a>
                    <a href="<?php echo base_url(); ?>Tables/hapus/<?php echo $baris->NIP; ?>" class="btn btn-danger">Hapus</a>


                    </td> 
                    </tr>

                    <?php } ?>
                  </tbody>
                </table>

                <a href="<?php echo base_url(); ?>Tables/opentambah/" class="btn btn-primary">Tambah</a>
                <a href="<?php echo base_url(); ?>Tables/simpan/" class="btn btn-danger">Simpan</a>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->