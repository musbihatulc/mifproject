<div class="container">
		<div class="card">
			<div class="card-header">Edit Data</div>
			<div class="card-body">
			<?php 
			if(validation_errors() != false)
			{
				?>
				<div class="alert alert-danger" role="alert">
					<?php echo validation_errors(); ?>
				</div>
				<?php
			}
			?>

			<form method="post" action="<?php echo base_url(). 'Tables/update'; ?>">
            <?php
            foreach($datane as $datanya) {
            ?>

                <div class="form-group">
					<label for="No">No</label>
					<input type="number" value="<?php echo $datanya->No; ?>" class="form-control" id="No" name="No" readonly>
				</div>

				<div class="form-group">
					<label for="Nama">Nama</label>
					<input type="text" value="<?php echo $datanya->Nama; ?>" class="form-control" id="Nama" name="Nama">
				</div>

                <div class="form-group">
                    <label for="NIP">NIP</label>
					<input type="number" class="form-control" value="<?php echo $datanya->NIP; ?>" id="NIP" name="NIP">
                </div>

                <div class="form-group">
                    <label for="Pangkat_gol_Rg">Pangkat Golongan Rg</label>
                    <input type="text" value="<?php echo $datanya->Pangkat_gol_Rg; ?>" class="form-control" id="Pangkat_gol_Rg" name="Pangkat_gol_Rg">
                </div> 

                <div class="form-group">
                    <label for="Pangkat_tmt">Pangkat tmt</label>
                    <input type="date" class="form-control datepicker" value="<?php echo $datanya->Pangkat_tmt; ?>" id="Pangkat_tmt" name="Pangkat_tmt" > 
                </div> 

                <div class="form-group">
                    <label for="Nama_Jabatan">Nama Jabatan</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Nama_Jabatan; ?>" id="Nama_Jabatan" name="Nama_Jabatan"> 
                </div> 

                <div class="form-group">
                    <label for="Th_Jabatan">Tahun Jabatan</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Th_Jabatan; ?>" id="Th_Jabatan" name="Th_Jabatan"> 
                </div> 

                <div class="form-group">
                    <label for="Th_Masa_Kerja">Tahun Masa Kerja</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Th_Masa_Kerja; ?>" id="Th_Masa_Kerja" name="Th_Masa_Kerja"> 
                </div> 

                <div class="form-group">
                    <label for="Bln_Masa_Kerja">Bulan Masa Kerja</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Bln_Masa_Kerja; ?>" id="Bln_Masa_Kerja" name="Bln_Masa_Kerja"> 
                </div> 
                
                <div class="form-group">
                    <label for="Nama_lt_jabatan">Nama Latihan Jabatan</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Nama_lt_jabatan; ?>" id="Nama_lt_jabatan" name="Nama_lt_jabatan"> 
                </div>

                <div class="form-group">
                    <label for="Bln_thn_lt_jab">Bulan Tahun Latihan Jabatan</label>
                     <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Bln_thn_lt_jab; ?>" id="Bln_thn_lt_jab" name="Bln_thn_lt_jab"> 
                </div> 

                <div class="form-group">
                    <label for="Jml_Jam_lt_jab">Jumlah jam latihan jabatan</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Jml_Jam_lt_jab; ?>" id="Jml_Jam_lt_jab" name="Jml_Jam_lt_jab"> 
                </div> 

                <div class="form-group">
                    <label for="Nama_pend">Nama Pendidikan</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Nama_pend; ?>" id="Nama_pend" name="Nama_pend"> 
                </div> 

                <div class="form-group">
                    <label for="Th_lulus_pend">Tahun Lulus Pendidikan</label>
                     <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Th_lulus_pend; ?>" id="Th_lulus_pend" name="Th_lulus_pend"> 
                </div> 

                <div class="form-group">
                    <label for="Tkt_ijazah_pend">Tingkat ijazah pendidikan</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Tkt_ijazah_pend; ?>" id="Tkt_ijazah_pend" name="Tkt_ijazah_pend"> 
                </div> 

                <div class="form-group">
                    <label for="Usia">Usia</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Usia; ?>" id="Usia" name="Usia"> 
                </div>

                <div class="form-group">
                    <label for="Ctt_mutasi_kepeg">Catatan mutasi kepegawaian</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Ctt_mutasi_kepeg; ?>" id="Ctt_mutasi_kepeg" name="Ctt_mutasi_kepeg"> 
                </div> 

                <div class="form-group">
                    <label for="Ctt_prestasi">Catatan Prestasi</label>
                    <input type="text" class="form-control form-control-user" value="<?php echo $datanya->Ctt_prestasi; ?>" id="Ctt_prestasi" name="Ctt_prestasi"> 
                </div> 
				
				<button type="submit" class="btn btn-primary">Update</button>
                <?php } ?>
			</form>
			</div>
		</div>
	</div>
