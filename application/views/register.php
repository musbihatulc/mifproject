<div class="container">

<?php echo form_open('user/register'); ?>
<?php echo validation_errors(); ?>    
<div class="row justify-content-center">    
        <div class="col-md-4">
            <h1 class="text-center"><?= $title; ?></h1>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" class="form-control" name="password2" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-success btn-block">Daftar Sekarang</button>
            <br>
            <a href="<?php echo base_url(); ?>User/login" class="btn btn-danger">Masuk</a>
        </div>
</div>
<?php echo form_close(); ?>
</div>