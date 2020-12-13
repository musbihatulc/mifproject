        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

         
          <!-- Content Row -->
          <div class="row">


          <div class="col-xl-3 col-md-6 mb-4 bg-success">
              <div class="card border-left-success ">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="card-body pb-3">
                      <h4 class="card-title font-weight-bold">Jumlah Pegawai</h4>
                      <?php echo $Nama ?>                      
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-friends fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                    <div class="card-body pb-3">
                      <h4 class="card-title font-weight-bold">Tingkat Ijazah Pegawai</h4>
                      <a href="<?php echo base_url(); ?>C_grafik/tingkat/" class="btn btn-primary">Tampilkan Diagram</a>                      
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-id-card-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <!-- <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                        </div>
                        <div class="col">
                          <div class="progress progress-sm mr-2">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <!-- Card content -->
                      <div class="card-body pb-3">
                      <h4 class="card-title font-weight-bold">Pangkat Golongan Rg</h4>
                      <a href="<?php echo base_url(); ?>C_grafik/pangkat/" class="btn btn-primary">Tampilkan Diagram</a>                      
                    </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-star-half-alt fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>

            </div>


        </div>
        <!-- /.container-fluid -->

      
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Tahun Jabatan</div>
                      <form action="" method="post">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" name="th_jabatan" id="datepicker" />
                        <div class="input-group-append">
                            <button class="btn btn-sm btn-outline-primary" type="submit" id="button-addon2">
                              Search
                            </button>
                        </div>
                      </div>
                      </form>
                    </div>
                    <div class="col-auto ml-3">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Content Row -->

          <div class="row">
              <?php if (isset($tm_users)) : ?>
                <?php if ($tm_users) : ?>
                  <?php foreach($tm_users as $user): ?>
                    <div class="col-12 col-lg-4 col-md-6">
                      <!-- Card -->
                      <div class="card weather-card" style="height:170px">

                      <!-- Card content -->
                      <div class="card-body pb-3">

                        <!-- Title -->
                        <h4 class="card-title font-weight-bold"><?= $user->Nama ?></h4>
                        <!-- Text -->
                        <p><i class="fas fa-leaf fa-lg grey-text pr-2"></i><?= $user->NIP ?></p>
                      </div>

                      </div>
                      <!-- Card -->
                    </div>
                  <?php endforeach; ?>
                <?php else: ?>
                  <div class="col-6">
                    <div class="alert alert-danger" role="alert">
                      Data tidak ada
                    </div>
                  </div>
                <?php endif; ?>
              <?php else: ?>
                <div class="col-6">
                  <div class="alert alert-primary" role="alert">
                    Silahkan Pilih tahun jabatan
                  </div>
                </div>
              <?php endif; ?>
          </div>

          <br>
          <div>
              <div class="card shadow h-100 py-2 bg-success">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <!-- Card content -->
                      <div class="card-body pb-3">
                      <h4 class="text-white">VISI, MISI, DAN TUJUAN KEJAKSAAN NEGERI JEMBER</h4>
                      <br>
                          <p class="text-white"> VISI :
                          Visi Kejaksaan Negeri Jember mengacu pada visi Kejaksaan RI. 
                          Visi adalah suatu pandangan jauh kedepan yang akan mengarahkan kita untuk menuju 
                          pada kondisi yang akan dicapai di masa depan. Visi akan diwujudkan oleh seluruh pemangku kepentingan baik 
                          di internal Kejaksaan R.I maupaum pemangku kepentingan di luar Kejaksaan R.I </p>                      
                          <p class="text-white">Visi Kejaksaan R.I. adalah : “MENJADI LEMBAGA PENEGAK HUKUM YANG PROFESIONAL , 
                          PROPORSIONAL DAN AKUNTABEL” </p>
                          <br>
                          <p class="text-white">MISI :
                          Misi Kejaksaan Negeri Jember mengacu pada Misi Kejaksaan RI. Misi Kejaksaan R.I merupakan penjabaran dari cita-cita dan landasan kerja organisasi serta merupakan fondasi dari perencanaan strategi kejaksaan R.I Tahun 2015-2019.Dengan pernyataan misi diharapkan seluruh entitas Kejaksaan R.I dan para pemangku kepentingan dapat mengenal dan mengetahui peran,program/sasaran kerja serta hasil yang akan diperoleh /dicapai oleh Kejaksaan R.I.
                          Dalam  rangka tercapainya Visi tersebut,maka Kejaksaan R.I menetapkan Misi tahun 2015-2019 adalaj sebagai berikut:
                          1. Meningkatkan peran Kejaksaan R.I dalam Program Pencegahan Tindak Pidana;
                          2. Meningkatkan profesionalisme Jaksa dalam Penanganan Perkara Tindak Pidana;
                          3. Meningkatkan peran Jaksa Pengacara Negara dalam penyelesaian Masalah Perdata Dan Tata Usaha Negara
                          4. Mewujudkan upaya Penegakan Hukum yang memenuhi rasa keadilan masyarakat;
                          5. Mempercepat pelaksanaan Reormasi Birokrasi dan Tata Kelola Kejaksaan RI yang bersih dan bebas KKN
                          </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

      </div>
      <!-- End of Main Content -->