<div class="top-cood">
    <div class="container">
      <div class="row">
        <div class="col-md-3 text-center">
          <a href="<?php echo base_url() ?>" title="Liga"><img class="logo" src="<?php echo base_url("assets/images/"); ?>logo.png"/>
          </a>
        </div>
        <div class="col-md-9 text-center pull-right">
          <div class="nav-service">
            <ul>
                <li><a href="#"> <i class="fa fa-check"></i> Melon FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Grape FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Anggur FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Apple FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Yellow FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Avocado FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Blueberry FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Cherry FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Cacao FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Duku FC</a></li>

                <li><a href="#"> <i class="fa fa-check"></i> Durian FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Salak FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Jeruk FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Mangga FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Belimbing FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Guava FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Coconut FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Pepaya FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Kiwi FC</a></li>
                <li><a href="#"> <i class="fa fa-check"></i> Pisang FC</a></li>
              </ul>   
          </div>
        </div>
      </div>
    </div>
</div>

<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if($this->uri->segment(1)=="liga-indramayu"){echo "active";}?>">
              <a href="<?php echo base_url() ?>">Liga Indramayu</a>
            </li>
            <li class="<?php if($this->uri->segment(1)=="klub"){echo "active";}?>">
              <a href="<?php echo base_url() ?>">Klub</a>
            </li>
          </ul>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li><a href="https://www.twitter.com/webcood"><i class="fa fa-twitter color-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/webcood"><i class="fa fa-facebook color-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/webcood"><i class="fa fa-instagram color-instagram"></i></a></li>
            <?php if (!isset($nama)) { ?>
              <li class="<?php if(($this->uri->segment(1)=="register") || ($this->uri->segment(1)=="login")){echo "active";}?>">
              <a href="<?php echo base_url(); ?>login" class="bg-green"><i class="fa fa-sign-in"></i> Login</a>

              </li>
              <?php if($this->session->userdata('is_admin_cood')) : ?>
              <li>
                <a href="<?php echo base_url(); ?>cood-admin">Admin Page</a>
              </li>
              <?php endif; ?>
            <?php } else { ?>
              <li class="dropdown user user-menu bg-green <?php if($this->uri->segment(1)=="users"){echo "active";}?>">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <i class="fa fa-user"></i>
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Hi, <?php echo $nama; ?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <p>
                      <?php echo $nama; ?>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?php echo base_url(); ?>dashboard" class="btn btn-default btn-flat">Dashboard</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?php echo base_url(); ?>portal/logout" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            <?php } ?>  
          </ul>
        </div>
      </div>
    </nav>
  </header>