<?php get_header(); ?>

 
        <!-- end top 2-->
        <!-- top 3 layer -->
           <div class="section top3" style="background-color: white"> 
                <div class="single-blog">
                  <br>  <br>
                 <div class="container">
                    <div class="row">
                        <?php if(have_posts()) : ?>
                            <?php while(have_posts()) : the_post(); ?>
                        <div class="col s12 m12 l12">
                            <center>
                             <div class="image-banner materialboxed">
                                  <?php if(has_post_thumbnail()) : ?>
                                      <?php the_post_thumbnail(); ?>
                                 <?php endif; ?>
                             </div>
                            </center>
                             <div class="container">
                                 <h4><?php the_title(); ?></h4> 
                                 <?php the_time('F j, Y'); ?>
                                 <div class="content-text">      
                                         <?php the_content(); ?> 
                                 </div>
                                </div>
                       </div> 
                       <?php endwhile; ?>
                            <?php else : ?>
                              <p> <?php __("NO PPOST FOUND"); ?> </p>
                            <?php endif; ?>

                    <div> 
                </div>
            </div>
        </div>
                             
    <!---end of top 3-->
  
<!--- top 4-->



  
<?php get_footer(); ?>