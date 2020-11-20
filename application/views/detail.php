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
            <td></td>
            <td></td>
            <td>
                <!-- <a href="mailto: <?php //echo $user->email; ?>" class="btn btn-danger">
                <i class="glyphicon glyphicon-envelope"></i>Kirim Email</a>
                <a href="<?php //echo base_url('ListUser') ?>" class="btn btn-danger ">
                <span class="icon text-white-50">
                  <i class="fas fa-reply"></i>
                </span>
                <span class="text">Kembali</span> -->
            </td>
        </tr>
        <?php endforeach;?>
    </table>
</div>