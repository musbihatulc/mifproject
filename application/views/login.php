<?php echo form_open('user/login'); ?>
     <div class="row justify-content-center">
         <div class="col-lg-4">
             <h1 class="text-center"><?php echo $title; ?></h1>
             <?php echo $this->session->flashdata('message'); ?>
             <div class="form-group">
                 <input type="text" name="username" class="form-control" value="<?php echo set_value('username'); ?>" placeholder="Enter Username" autofocus>
                 <?php echo form_error('username', '<p class="text-danger mt-2">', '</p>'); ?>
             </div>
             <div class="form-group">
                 <input type="password" name="password" class="form-control" placeholder="Enter Password" autofocus>
                 <?php echo form_error('password', '<p class="text-danger mt-2">', '</p>'); ?>
             </div>
             <button type="submit" class="btn btn-success btn-block">Masuk</button>
             <br>
             <a href="<?php echo base_url(); ?>User/register" class="btn btn-primary">Daftar</a>
             <br>
             
         </div>

        <h2></h2> 
     </div>

<?php echo form_close(); ?>