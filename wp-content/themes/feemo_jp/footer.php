<!--footer-->
<footer class="page-footer">
      <div class="container foot">
        <div class="row">
          <div class="col l4 m12 s12">
            <center>
              <a id="logo-container" href="#" class="brand-logo"><img width="190px" height="100px"src="<?php bloginfo('template_url'); ?>/assets/images/navlogo.png"></a>  
            </center>
          </div>
          <div class="col s6 m6 l4">
            <h6 class="black-text">COMPANY</h6>
            <ul>
              <li><a class="grey-text lighten-1" href="company.html">Service</a></li>
              <li><a class="grey-text lighten-1" href="#!">Blog</a></li>
              <li><a class="grey-text lighten-1" href="#!">News</a></li>
              <li><a class="grey-text lighten-1" href="#!">Access</a></li>
              <li><a class="grey-text lighten-1" href="#!">Contact</a></li>
              <li><a class="grey-text lighten-1" href="#!">Site Map</a></li>
            </ul>
          </div>
          <div class="col l4 m6 s6">
            <h6 class="black-text">SUPPORT</h6>
            <ul>
              <li><a class="grey-text lighten-1" href="#!">Privacy</a></li>
              <li><a class="grey-text lighten-1" href="#!">Site Policy</a></li>
              <li><a class="grey-text lighten-1" href="#!">Terms</a></li>
              
            </ul>
          </div>
        </div>
      </div>
    
      <div style="background-color: #eee">
          <div class="container icon-footer">
              <div class="grey-text lighten-1">
                  <a href="#" class="icon-color"> <i class="fa fa-twitter" aria-hidden="true"></i> </a>
                  <a href="#" class="icon-color"> <i class="fa fa-facebook" aria-hidden="true"></i> </a>
                  <a href="#" class="icon-color"> <i class="fa fa-google-plus" aria-hidden="true"></i> </a>
                  <a href="#" class="icon-color"> <i class="fa fa-tumblr" aria-hidden="true"></i> </a>
                  <a href="#" class="icon-color"> <i class="fa fa-pinterest-p" aria-hidden="true"></i> </a>
                  <a href="#" class="icon-color"> <i class="fa fa-linkedin" aria-hidden="true"></i> </a>
                 
              </div>
            <div class="grey-text lighten-1">
          © 2018 Copyright Feemo,Inc. All Rights Reserved.
    
          <a href="#" id="myBtn"  class="scrollToTop opa"><i class="fa fa-long-arrow-up white-text" aria-hidden="true"></i></a>


      
        </div>

        </div>
          </div>
        </div>
    </footer>
  
  
<!--end footer-->

  <!--  Scripts-->
  <script src="<?php bloginfo('template_url'); ?>/assets/js/jquery-2.2.1.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/init.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/materialize.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/materialize.js"></script>


  <script>
       
       $(document).ready(function(){

//Check to see if the window is top if not then display button
$(window).scroll(function(){
    if ($(this).scrollTop() > 100) {
        $('.scrollToTop').fadeIn();
    } else {
        $('.scrollToTop').fadeOut();
    }
});

//Click event to scroll to top
$('.scrollToTop').click(function(){
    $('html, body').animate({scrollTop : 0},800);
    return false;
});

});

      </script>


<script>
  $(document).ready(function(){       
            var scroll_pos = 0;
            $(document).scroll(function() { 
                scroll_pos = $(this).scrollTop();
                if(scroll_pos > 210) {
                    $("nav").css('background-color', '#fafafaue');
                    $("nav a").css('color', 'black');
                   
                } else {
                    $("nav").css('background-color', 'transparent');
                    $("nav a").css('color', 'white');
                    
                }
            });
        });
</script>

<script> 
$(function () {
  $(document).scroll(function () {
	  var $nav = $(".navbar-fixed-top");
	  $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
	});
});
</script>

<script>
$(document).ready(function() {
  $(window).scroll(function() {
  var nav_img = $('.brand-logo img');
  if ($(document).scrollTop() < 50) {
      $('nav').addClass('transparent');
      nav_img.attr("src","<?php bloginfo('template_url'); ?>/assets/images/navlogowhite.png");
  } else {
      $('nav').removeClass('transparent').css('color: black');
      nav_img.attr("src","<?php bloginfo('template_url'); ?>/assets/images/navlogo.png");
  }
  });
});

</script>

<script>
    $(".dropdown-trigger").dropdown();
        </script>

<script src="<?php bloginfo('template_url'); ?>/assets/js/wow.min.js"></script>
<script>
new WOW().init();
</script>

<script>
// main dropdown initialization
$('.dropdown-button.main-menu-item').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrain_width: true, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    belowOrigin: true, // Displays dropdown below the button
    alignment: 'left' // Displays dropdown with edge aligned to the left of button
});
// nested dropdown initialization
$('.dropdown-button.sub-menu-item').dropdown({
    inDuration: 300,
    outDuration: 225,
    constrain_width: false, // Does not change width of dropdown to that of the activator
    hover: true, // Activate on hover
    gutter: ($('.dropdown-content').width() * 3) / 3.05 + 3, // Spacing from edge
    belowOrigin: false, // Displays dropdown below the button
    alignment: 'left' // Displays dropdown with edge aligned to the left of button
});
  </script>

<?php wp_footer(); ?>
  </body>
</html>