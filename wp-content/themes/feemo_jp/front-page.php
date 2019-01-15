<?php get_header(); ?>

  <div class="home">
      <h2 class="header center black-text text-lighten-2 feemo wow pulse"><b>THIS IS FEEMO</b></h2>
      <div class="row center">
          <h5 class="header col s12 black-text light fontbanner wow fadeInUp">Design, Create, Innovate</h5>
      </div>
      <br><br>
      <div class="row center">
          <a href="index.html" id="download-button" class="btn-large white-text waves-effect waves-light btn rounded">Get Started</a>
      </div>
  </div>


      <div class="service-bg-index">
         <div class="top2">
             <div class="services"> 
                 <h5 class="black-text">SERVICE</h5>
                 <p> What can we do for your business?</p>
             </div>

             <div class="container service-body wow bounceInDown">
                <center>
                  <div class="row black-text"> 
                    <div class="circle">
                      Web Consulting
                    </div>
                    <div class="gaps">
                    </div>
                    <div class="circle">
                      Web Design
                    </div>
                    <div class="gaps">
                    </div>
                    <div class="circle">
                      Web Developer
                    </div>
                    <div></div>
                    <div class="circle">
                        SEO
                    </div>
                    <div class="gaps">
                    </div>
                    <div class="circle">
                      Article Creation
                    </div>
                      </div>
                </center>
                  <br><br>
                </div>
                  <br><br>
                 <div class="row center service-button">
                     <a href="index.html" id="download-button" class="btn-small white-text waves-effect waves-light btn btnservice">More</a>
                    </div>
                </div>
            </div>

 
 

      
        <!-- end top 2-->
        <!-- top 3 layer -->
           <div class="section top3" style="background-color: white"> 
                <div class="blog">
                  <br>  <br>
                 <h5>BLOG</h5>
                 <p>Be updated with the latest news blogs we got for you.</p>
                  <br><br>    
                  <div class="row">
                        <?php 
                         $reviewArgs = array( 
                        'category' => '2', 
                        'posts_per_page' => 5);
                        $reviews = get_posts( $reviewArgs );
                        foreach ($reviews as $post) :  setup_postdata($post); { ?>
                            <div class="col s12 m4 l4 wow fadeInUp">          
                                    <div class="card">
                                             <div class="image">
                                                    <?php the_post_thumbnail(); ?>
                                             </div>
                                            <div class="text">  
                                                     <div class="square-pink"><?php the_time('j'); ?> 
                                                             <p style="font-size: 10px; line-height: .15"><?php the_time('F'); ?></p>
                                                     </div>
                                                        <a class="permalink" href="<?php the_permalink(); ?>">
                                                            <h5><?php the_title(); ?></h5>
                                                        </a>
                                                        <div class="blog-text-body">
                                                             <?php the_excerpt(); ?>
                                                         </div>               
                                            </div>
                                            <div class="row center">
                                                <a href="<?php the_permalink(); ?>" id="download-button" class="btn-small black-text waves-effect waves-light btn btnreadmore">Read More</a>
                                            </div>   
                                    </div>
                            </div>  
                        <?php }
                             endforeach;  
                        ?>                             
                    </div>
                </div>
             </div>
    <!---end of top 3-->
  
<!--- top 4-->

    <div class="top4">
    <div  class="news-bg  wow slideInUp">
        <div class="news-content">
        <div class="news container-fluid">  
           <h5 class="black-text">NEWS</h5>
           <p>Be updated with the latest news blogs we got for you.</p>
  
          </div>
          
       <center>
       <div class="container">
          <div class="row wow fadeInDown">
                <?php 
                     $reviewArgs = array( 
                     'category' => '3', 
                    'posts_per_page' => 5
                        );
                    $reviews = get_posts( $reviewArgs );
                    foreach ($reviews as $post) :  setup_postdata($post); { ?>
                    <div class="col s12 m10 l10"> 
                         <div class="col s12 m4 l4 black-text">
                            <span style="padding-bottom:40px; font-size: 20px; display: inline-block"></span><b><?php the_time('Y.m.d'); ?></b>
                         </div>
                         <div class="col s12  m4 l3 black-text">
                            <span style="padding-bottom:40px; font-size: 20px"></span> <p class="rectangle2"></p>
                         </div>
                         <div class="col s12 m4 l4 black-text news-title">
                            <p style=" font-size: 13px; display: inline-block">  <a class="permalink" href="<?php the_permalink(); ?>"> <?php the_title(); ?></a></p>
                         </div>     
                     </div>
                     <?php }
                    endforeach;
                    ?>
                </div>   
            </div>  
    </center>
        <br>
        <br>
        </div>
                </div>
  </div>

  <!--end top 4-->
 


  
<?php get_footer(); ?>