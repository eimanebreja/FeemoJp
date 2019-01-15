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
              <div class="container">
                 <div class="company-text">
                    <h6 style="font-weight: bold">COMPANY PROFILE</h6>
                </div>
                <div class="row">
                  <div class="col s6 m5 l4">
                    <p class="company-category"> Company Name</p>
                  </div>
                  <div class="col s6 m7 l8">
                      <p class="company-category-info"> Feemo Co. Ltd</p>
                  </div>
                  <div class="col s6 m5 l4">
                      <p class="company-category"> Philippine Name</p>
                    </div>
                    <div class="col s6 m7 l8">
                        <p class="company-category-info">Feemo Global Solutions Philippines, Inc.</p>
                    </div>
                    <div class="col s6 m5 l4">
                        <p class="company-category"> Business Description</p>
                      </div>
                      <div class="col s6 m7 l8">
                          <p class="company-category-info">Web Consulting
                            <br>Web Development
                            <br>Web Design
                            <br>SEO
                            <br>Article Creation
                            <br>Animation
                            <br>Vector Design
                            <br>Video Editing
                            <br>DTP Design
                            <br>Calligraphy
                            <br>Translation
                            <br>Online English Teaching

                          </p>
                      </div>
                      <div class="col s6 m5 l4">
                          <p class="company-category"> Establishment</p>
                        </div>
                        <div class="col s6 m7 l8">
                            <p class="company-category-info"> March 26, 2014</p>
                        </div>
                        <div class="col s6 m5 l4">
                            <p class="company-category"> CEO </p>
                          </div>
                          <div class="col s6 m7 l8">
                              <p class="company-category-info"> Chieto Amano</p>
                          </div>
                          <div class="col s6 m5 l4">
                              <p class="company-category">Location</p>
                            </div>
                            <div class="col s6 m7 l8">
                                <p class="company-category-info"> <b>Main Office</b>
                                    <br> KDX Shinjuku 6th Bldg.9F,
                                    <br> 6-24-20 Shinjuku,  Shinjuku, Tokyo
                                    <br>160-0022, Japan
                                    <br>Phone

                                </p>
                               
                                <p class="company-category-info"> <b>Fukouka Branch</b>
                                        <br>810-0041
                                        <br> No.2 Prince Building_5f
                                        <br>2-9-29 Daimyo, Chuo, Fukuoka, Fukuoka
                                </p>
                               
                              
                          
                                <p class="company-category-info"><b> Makati Branch </b>
                                <br>4F Makati Skyplaza,  6788 Ayala Avenue
                                <br>Makati City, Philippines
                            </p>
                        
                            </div>
                            <div class="col s6 m5 l4">
                                <p class="company-category"> Contact </p>
                              </div>
                              <div class="col s6 m7 l8">
                                  <p class="company-category-info"> 03-6273-8003</p>
                              </div>
                              <div class="col s6 m5 l4">
                                  <p class="company-category"> E-mail </p>
                                </div>
                                <div class="col s6 m7 l8">
                                    <p class="company-category-info"> info@feemo.jp</p>
                                </div>
                                <div class="col s6 m5 l4">
                                    <p class="company-category"> Website </p>
                                  </div>
                                  <div class="col s6 m7 l8">
                                      <p class="company-category-info"> <a href="feemo.ph"><i>feemo.jp</i></a>
                                    <br> <a href="feemo.jp"><i>feemo.jp</i></a>
                                </p>
                                     
                                  </div>
                </div>
                
              </div>
                </div>
                
            </div>
        </div>
    </div>
</div>



<?php get_footer(); ?>