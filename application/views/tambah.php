<div class="row"> 
<div class="col-lg-7"> 
<div class="p-5"> 
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
    <input type="text" class="form-control form-control-user" id="Nama" name="Nama" 
    placeholder="Nama Maximal 100 Character" > 
    </div> 
    <div class="form-group">
    <input type="number" class="form-control form-control-user" id="NIP" name="NIP" 
    placeholder="NIP Maximal 30 Character"> 
    </div>
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Pangkat_gol_Rg" name="Pangkat_gol_Rg" 
    placeholder="Pangkat_gol_Rg Maximal 10 Character"> 
    </div> 
    <div class="form-group">
    <input type="date" class="form-control form-control-user" id="Pangkat_tmt" name="Pangkat_tmt" 
    placeholder="Pangkat_tmt Maximal 10 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Nama_Jabatan" name="Nama_Jabatan" 
    placeholder="Nama_Jabatan Maximal 30 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Th_Jabatan" name="Th_Jabatan" 
    placeholder="Th_Jabatan Maximal 4 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Th_Masa_Kerja" name="Th_Masa_Kerja" 
    placeholder="Th_Masa_Kerja Maximal 4 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Bln_Masa_Kerja" name="Bln_Masa_Kerja" 
    placeholder="Bln_Masa_Kerja Maximal 10 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Nama_lt_jabatan" name="Nama_lt_jabatan" 
    placeholder="Nama_lt_jabatan Maximal 30 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Bln_thn_lt_jab" name="Bln_thn_lt_jab" 
    placeholder="Bln_thn_lt_jab Maximal 4 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Jml_Jam_lt_jab" name="Jml_Jam_lt_jab" 
    placeholder="Jml_Jam_lt_jab"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Nama_pend" name="Nama_pend" 
    placeholder="Nama_pend Maximal 50 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Th_lulus_pend" name="Th_lulus_pend" 
    placeholder="Th_lulus_pend Maximal 4 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Tkt_ijazah_pend" name="Tkt_ijazah_pend" 
    placeholder="Tkt_ijazah_pend Maximal 20 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Usia" name="Usia" 
    placeholder="Usia Maximal 10 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Ctt_mutasi_kepeg" name="Ctt_mutasi_kepeg" 
    placeholder="Ctt_mutasi_kepeg Maximal 30 Character"> 
    </div> 
    <div class="form-group">
    <input type="text" class="form-control form-control-user" id="Ctt_prestasi" name="Ctt_prestasi" 
    placeholder="Ctt_prestasi Maximal 30 Character"> 
    </div> 

            <input type="submit" class="btn btn-success btn-icon-split" name="submit" value="Tambah"> 
            </form><hr> 
            <div class="text-center"> 
                <a href="<?php echo base_url('Tables'); ?>" class="small">Kembali</a> 
            </div>
            </div></div></div>