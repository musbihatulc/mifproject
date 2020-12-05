<div class="well well-lg">
    <div class="container">
        <h2>Detail</h2>
    </div>
</div>
<div class ="container">
    <table class ="well table table-bordered">
    <?php foreach ($detail as $detail):?>
        <tr>
            <td width="200">
                Nama
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Nama']?></p>
            </td>
        </tr>

        <tr>
            <td width="200">
                NIP
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['NIP']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Pangkat Golongan RG
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Pangkat_gol_Rg']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Pangkat TMT
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Pangkat_tmt']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Nama Jabatan
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Nama_Jabatan']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Tahun Jabatan
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Th_Jabatan']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Tahun Masa Kerja
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Th_Masa_Kerja']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Bulan Masa Kerja
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Bln_Masa_Kerja']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Nama Latihan Jabatan
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Nama_lt_jabatan']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Bulan Tahun Latihan Jabatan
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Bln_thn_lt_jab']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Jumlah Jam Latihan Jabatan
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Jml_Jam_lt_jab']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Nama Pendidikan
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Nama_pend']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Tahun Lulus Pendidikan
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Th_lulus_pend']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Tingkat Ijazah Pendidikan
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Tkt_ijazah_pend']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Usia
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Usia']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Catatan Mutasi Kepegawaian
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Ctt_mutasi_kepeg']?></p>
            </td>
        </tr>

        <tr>
        <td width="200">
                Catatan Prestasi
            </td>
            <td width="1">:</td>
            <td>
                <?= $detail['Ctt_prestasi']?></p>
            </td>
        </tr>
        <?php endforeach;?>
    </table>
    <div class="row"> 
    <a href="<?php echo base_url('Tables'); ?>" class="col-2 btn btn-success btn-icon-split">Kembali</a>
</div>