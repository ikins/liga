<div class="content-wrapper">
    <div class="container">

    <div class="login-box">
    <div class="login-logo">
      <center><a href="<?php echo base_url() ?>" title="Liga Indramayu"><img class="logo" src="<?php echo base_url("assets/images/"); ?>liga-logo-l.png"/>
          </a></center>
      <p>
        Administrator Login</a>
      </p>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <?php echo validation_errors('<p class="login-box-msg text-red">'); ?>
      <?php if (isset($error)){ ?>
        <p class="login-box-msg text-red"><?php echo $error; ?></p>
      <?php } ?>
      <?php echo form_open('valid-login-admin'); ?>
        <div class="form-group has-feedback">
          <input type="email" name="email" class="form-control" placeholder="Email" data-validation="required" data-validation-error-msg="Ini adalah kolom yang harus diisi">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password"  data-validation="required" data-validation-error-msg="Ini adalah kolom yang harus diisi">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <!-- <div class="form-group has-feedback">
          <input type="checkbox"> Ingatkan saya
        </div> -->
        <div class="row">
          <!-- <div class="col-xs-8">
            <a href="<?php //echo base_url(); ?>lupa-password">Lupa Password</a>
          </div> -->
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      

    </div>
    
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->

    </div>
</div>
