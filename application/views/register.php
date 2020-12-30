<div class="container">

<?php echo validation_errors(); ?>
<?php echo form_open('/basiccrud/User/register'); ?>
<div class="row">    
        <div class="col-md-4 col-md-offset-4">
            <h1 class="text-center"><?= $judul; ?></h1>
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
            <button type="submit" class="btn btn-primary btn-block">Register Now</button>
        </div>
</div>
<?php echo form_close(); ?>
</div>