<div class="container">

<?php echo form_open('user/register'); ?>
<div class="row justify-content-center">    
        <div class="col-md-4">
            <h1 class="text-center"><?= $title; ?></h1>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo set_value('nama'); ?>" placeholder="Nama">
                <?php echo form_error('nama', '<p class="text-danger mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email">
                <?php echo form_error('email', '<p class="text-danger mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" placeholder="Username">
                <?php echo form_error('username', '<p class="text-danger mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
                <?php echo form_error('password', '<p class="text-danger mt-2">', '</p>'); ?>
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
                <?php echo form_error('password2', '<p class="text-danger mt-2">', '</p>'); ?>
            </div>
            <button type="submit" class="btn btn-success btn-block">Daftar Sekarang</button>
            <br>
            <a href="<?php echo base_url(); ?>User/login" class="btn btn-danger">Masuk</a>
        </div>
</div>
<?php echo form_close(); ?>
</div>