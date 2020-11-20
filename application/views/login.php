<?php echo form_open('user/login'); ?>
     <div class="row justify-content-center">
         <div class="col-lg-4">
             <h1 class="text-center"><?php echo $title; ?></h1>
             <div class="form-group">
                 <input type="text" name="username" class="form-control" placeholder="Enter Username" required autofocus>
             </div>
             <div class="form-group">
                 <input type="password" name="password" class="form-control" placeholder="Enter Password" required autofocus>
             </div>
             <button type="submit" class="btn btn-success btn-block">Masuk</button>
             <br>
             <a href="<?php echo base_url(); ?>User/register" class="btn btn-primary">Daftar</a>
             <br>
                   <?php echo $this->session->flashdata('login_failed'); ?>
             
         </div>

        <h2></h2> 
     </div>

<?php echo form_close(); ?>