<div class="col-xl-6 col-md-6 mb-6 bg-success mx-auto d-block"> 
<div class="col-lg-11 mx-auto d-block"> 
<div class="p-3 ">
<div class= "card"> 
<div class="card-body">
<div class="text-center">  
    <h1 class="h4 text-gray-900 mb-4">Tambah User</h1>
</div>  
<form action="<?php echo base_url('Tables/opentambah') ?>" method="post" class="user"> 
    <div class="form-group">
    <input type="number" class="form-control form-control-user" value="<?php echo set_value('No'); ?>" id="No" name="No" 
    placeholder="No" > 
    <?php echo form_error('No', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Nama'); ?>" id="Nama" name="Nama" 
    placeholder="Nama Maximal 100 Character" >
    <?php echo form_error('Nama', '<p class="text-danger mt-2">', '</p>'); ?> 
    </div> 
    <div class="form-group">
    <input type="number" class="form-control form-control-user" value="<?php echo set_value('NIP'); ?>" id="NIP" name="NIP" 
    placeholder="NIP Maximal 30 Character"> 
    <?php echo form_error('NIP', '<p class="text-danger mt-2">', '</p>'); ?>
    </div>
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Pangkat_gol_Rg'); ?>" id="Pangkat_gol_Rg" name="Pangkat_gol_Rg" 
    placeholder="Pangkat_gol_Rg Maximal 10 Character"> 
    <?php echo form_error('Pangkat_gol_Rg', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="date" class="form-control form-control-user" value="<?php echo set_value('Pangkat_tmt'); ?>" id="Pangkat_tmt" name="Pangkat_tmt" 
    placeholder="Pangkat_tmt Maximal 10 Character"> 
    <?php echo form_error('Pangkat_tmt', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Nama_Jabatan'); ?>" id="Nama_Jabatan" name="Nama_Jabatan" 
    placeholder="Nama_Jabatan Maximal 30 Character"> 
    <?php echo form_error('Nama_Jabatan', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Th_Jabatan'); ?>" id="Th_Jabatan" name="Th_Jabatan" 
    placeholder="Th_Jabatan Maximal 4 Character">
    <?php echo form_error('Th_Jabatan', '<p class="text-danger mt-2">', '</p>'); ?> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Th_Masa_Kerja'); ?>" id="Th_Masa_Kerja" name="Th_Masa_Kerja" 
    placeholder="Th_Masa_Kerja Maximal 4 Character"> 
    <?php echo form_error('Th_Masa_Kerja', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Bln_Masa_Kerja'); ?>" id="Bln_Masa_Kerja" name="Bln_Masa_Kerja" 
    placeholder="Bln_Masa_Kerja Maximal 10 Character"> 
    <?php echo form_error('Bln_Masa_Kerja', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Nama_lt_jabatan'); ?>" id="Nama_lt_jabatan" name="Nama_lt_jabatan" 
    placeholder="Latihan jabatan Maximal 30 Character"> 
    <?php echo form_error('Nama_lt_jabatan', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Bln_thn_lt_jab'); ?>" id="Bln_thn_lt_jab" name="Bln_thn_lt_jab" 
    placeholder="Bln_thn_lt_jab Maximal 4 Character"> 
    <?php echo form_error('Bln_thn_lt_jab', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Jml_Jam_lt_jab'); ?>" id="Jml_Jam_lt_jab" name="Jml_Jam_lt_jab" 
    placeholder="Jml_Jam_lt_jab"> 
    <?php echo form_error('Jml_Jam_lt_jab', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Nama_pend'); ?>" id="Nama_pend" name="Nama_pend" 
    placeholder="Nama pendidikan Maximal 50 Character"> 
    <?php echo form_error('Nama_pend', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Th_lulus_pend'); ?>" id="Th_lulus_pend" name="Th_lulus_pend" 
    placeholder="Th_lulus_pend Maximal 4 Character"> 
    <?php echo form_error('Th_lulus_pend', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Tkt_ijazah_pend'); ?>" id="Tkt_ijazah_pend" name="Tkt_ijazah_pend" 
    placeholder="Tkt_ijazah_pend Maximal 20 Character"> 
    <?php echo form_error('Tkt_ijazah_pend', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Usia'); ?>" id="Usia" name="Usia" 
    placeholder="Usia Maximal 10 Character"> 
    <?php echo form_error('Usia', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Ctt_mutasi_kepeg'); ?>" id="Ctt_mutasi_kepeg" name="Ctt_mutasi_kepeg" 
    placeholder="Ctt_mutasi_kepeg Maximal 30 Character"> 
    <?php echo form_error('Ctt_mutasi_kepeg', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" value="<?php echo set_value('Ctt_prestasi'); ?>" id="Ctt_prestasi" name="Ctt_prestasi" 
    placeholder="Ctt_prestasi Maximal 30 Character"> 
    <?php echo form_error('Ctt_prestasi', '<p class="text-danger mt-2">', '</p>'); ?>
    </div> 

            <input type="submit" class="btn btn-success" name="submit" value="Tambah"> 
            </form><hr> 
            <div class="text-right"> 
                <a href="<?php echo base_url('Tables'); ?>" class="btn btn-primary">Kembali</a> 
            </div>
            </div></div></div>
<div>
</div>