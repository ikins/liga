
<section class="content-footer">


<!-- Return to TOP -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
</section>

<footer class="main-footer">
    <div class="container text-center">
      <strong>&copy; <?php echo date('Y'); ?></strong> All rights
      reserved. Developed by Liga Indramayu
    </div>
    <!-- /.container -->
</footer>



<script src="<?php echo base_url("assets/"); ?>js/custom.js"></script>
<script defer src="<?php echo base_url("assets/js/"); ?>jquery.flexslider.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
      $('.flexslider').flexslider({
        animation: "slide",
        controlNav: false
      });

      // ===== Scroll to Top ==== 
      $(window).scroll(function() {
          if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
              $('#return-to-top').fadeIn(200);    // Fade in the arrow
          } else {
              $('#return-to-top').fadeOut(200);   // Else fade out the arrow
          }
      });
      $('#return-to-top').click(function() {      // When arrow is clicked
          $('body,html').animate({
              scrollTop : 0                       // Scroll to top of body
          }, 500);
      });

    });
  </script>
</body>
</html>