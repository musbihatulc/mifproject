
<!-- Page Heading -->

<h1 style="text-align:center">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember yang <?php echo $judul ?></h1>
          <!-- <p class="mb-4">Data Urut Kepangkatan Pegawai Negeri Sipil Kejaksaan Negeri Jember<a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

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
                      <th>Tahun Masa Kerja</th>
                      <th>Bulan Masa Kerja</th>
                      <th>Nama Latihan Jabatan</th>
                      <th>Bln Th Latihan Jabatan</th>
                      <th>Jml Jam Lt Jabatan</th>
                      <th>Nama Pendidikan</th>
                      <th>Th Lulus Pendidikan</th>
                      <th>Tingkat Ijazah</th>
                      <th>Usia</th>
                      <th>Catatan Mutasi Kepeg</th>
                      <th>Catatan Prestasi</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                 
                    foreach($report as $baris){
                  ?>

                    <tr>
                    <td><?php echo $baris->No; ?></td>
                    <td><?php echo $baris->Nama; ?></td>
                    <td><?php echo $baris->NIP; ?></td>
                    <td><?php echo $baris->Pangkat_gol_Rg; ?></td>
                    <td><?php echo $baris->Pangkat_tmt; ?></td>
                    <td><?php echo $baris->Nama_Jabatan; ?></td>
                    <td><?php echo $baris->Th_Jabatan; ?></td>
                    <td><?php echo $baris->Th_Masa_Kerja; ?></td>
                    <td><?php echo $baris->Bln_Masa_Kerja; ?></td>
                    <td><?php echo $baris->Nama_lt_jabatan; ?></td>
                    <td><?php echo $baris->Bln_thn_lt_jab; ?></td>
                    <td><?php echo $baris->Jml_Jam_lt_jab; ?></td>
                    <td><?php echo $baris->Nama_pend; ?></td>
                    <td><?php echo $baris->Th_lulus_pend; ?></td>
                    <td><?php echo $baris->Tkt_ijazah_pend; ?></td>
                    <td><?php echo $baris->Usia; ?></td>
                    <td><?php echo $baris->Ctt_mutasi_kepeg; ?></td>
                    <td><?php echo $baris->Ctt_prestasi; ?></td>
                    </tr>

                    <?php } ?>
                  </tbody>
                </table>
                <script>
		              window.print();
	            </script>

                <style type="text/css" media="print">
                @page { size: auto; }
                </style>
              </div>
            </div>