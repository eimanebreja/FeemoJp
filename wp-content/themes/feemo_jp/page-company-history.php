<?php get_header(); ?>
 <!--header image-->
 <div  class="company-header">
       
       <div class="container">
         <h2 class="header center white-text text-lighten-2 wow zoomIn">COMPANY</h2>
       
       </div>
       </div>
 <!-- end header image-->
 
 <div class="section">
     <div class="company-body">
         <div class="row">
             <div class="col s12 m4 l3 wow slideInLeft">
               <div class="container">
                 <div class="company-text">
                         <h6 style="font-weight: bold" class="center">COMPANY</h6>
                 </div>



<p class="line"> .............................................................</p>
<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'Company Menu',
  'depth' => 2,
  'container' => false,
  'link_before'  => '<ul class="left company-left-side">
   • ',
  'link_after'  => '<li class="black-text lighten-1">.............................................................</li></ul> ',
  'menu_class' => 'company-left-text-body')
);
?>
      
                     </div>
             </div>
             <div class="col s12 m8 l9">
                 <div class="company-text">
                    <h6 style="font-weight: bold">COMPANY HISTORY</h6>
                </div>
                <div class="container">
                    <div class="center">
                        <br>
                        <div class="wow fade">
                          <img width="150px" height="70px"src="<?php bloginfo('template_url'); ?>/assets/images/navlogo.png">
                        </div>
                        <br>
                        <p class="feemotext"> feemo = feeling + movement</p>
                        <br>
                    </div>
                    <div class="company-history-text wow pulse">
                        <p>Director Chieto Amano established Feemo, Inc. at March 2014 in Shinjuku District, Tokyo, with its aim of enjoying life.</p>
                        <p>In November 2016, the company started the operation of Web Consulting Service. Year after, the company relocated the head office of Feemo Inc. to Shinjuku District, Tokyo and started to open its first branch in Fukuoka prefecture in Hakata District.</p>
                        <p>As part of its growth and altered focus, in December 2017, Feemo Inc, opened another branch in Manila, Philippines, with a growing service offers such as Web Consulting, Web Design, Web Development, SEO, Article Creation and DTP Design.</p>
                        <p>With the company`s mission "To give the best smile in the World". Feemo Inc. assures its high quality and excellent service to the cients and business partners.</p>
                    </div>
                </div>

                </div>
                
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>