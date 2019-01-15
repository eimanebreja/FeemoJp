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


<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'Company Menu',
  'depth' => 2,
  'container' => false,
  'link_before'  => '<ul class="left company-left-side">
  <li class="black-text lighten-1">.............................................................</li> • ',
  'link_after'  => '</ul> ',
  'menu_class' => 'company-left-text-body')
);
?>
<p>
      
                     </div>
             </div>
             <div class="col s12 m8 l9" style=" position: relative;
             z-index: -1">
                  <div class="company-text">
                         <h6 style="font-weight: bold">CORPORATE PHILOSOPHY</h6>
                 </div>
                 <center>
                     <div class="company-body-right">
                         <div class="row black-text"> 
                            <div class="company-circle wow bounceInDown">
                              To give the best smile in the world.
                            </div>
                          
                            <div></div>
                            <div class="company-circle-center wow zoomIn">
                                PHILOSOPHY
                             </div>
                            <div></div>
                             <div class="company-circle wow bounceInDown">
                               Continue to please those involved.
                             </div>
                             <div class="company-circle-gaps">
                             </div>
                             <div class="company-circle wow bounceInDown">
                               While enjoying life, increase people involved.
                             </div>
                           </div>
                         </div>
                        </center>
             </div>
         </div>
     </div>
 </div>
<?php get_footer(); ?>