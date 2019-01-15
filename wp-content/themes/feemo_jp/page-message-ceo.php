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
                    <h6 style="font-weight: bold">MESSAGE FROM THE CEO</h6>
                </div>
                <div class="container">
                    <div class="center">
                        <br>
                          <img width="250px" height="250px"src="<?php bloginfo('template_url'); ?>/assets/images/ceo-image.jpg">
                        <br>
                      
                    </div>
                    <div class="company-history-text wow slideInUp">
                        <br>
                        <p>Greetings and thank you for visiting our website!</p>
                        <p>I am Chieto Amano, President and CEO of Feemo Global Solutions Philippines, Inc.</p>
                        <p>We at Feemo, Inc. assures that we will always be committed to every step that we take. Hence, we will continue to please everyone, especially those people who work with our 
                            company, our business partners and our customers.
                        </p>
                        <p><b><i>"You Think. We Create." </i></b> is the bottomline in our business. We give execution in your drafts and ideas.</p>
                        <p>Excellency is what we and look forward and aim for. We strive our best to give the outstanding 
                            work that we can offer. Creating a successful business and wonderful partneship must be 
                            one of Feemo`s stategic priorities.
                        </p>
                        <p>To all of our supporters and friends, I would like to thank you for all the endless supporter
                            and interest for Feemo, Inc.
                        </p>
                        <p> In return, we assure you to give the best quality of service in our business and keep people 
                            around the world smile!
                        </p>
                        <br>
                        <br>
                        <br>
                        <p style="text-align: right">Chieto Amano <br>
                       <i>President & CEO</i> 
                        </p>
                    </div>
                </div>

                </div>
                
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>