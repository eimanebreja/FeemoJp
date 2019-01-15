<?php get_header(); ?>

  <!--parallax image-->
  <div   class="blogs">
       
       <div class="container">
         <h2 class="header center white-text text-lighten-2 wow zoomIn">BLOG</h2>
       
       </div>
       </div>
<!-- end parallaz image-->

<div class="blog-body">
   <div class="row">
   <?php 
   	$paged = (get_query_var( 'paged' )) ? get_query_var( 'paged' ) : 1;
        
                                $args = array(                
                                                    'post_type' => 'post',
                                                    'post_status' => 'publish',
                                                    'category_name' => 'blog',
                                                    'paged' => $paged,
                                                );
                                     
                                                $arr_posts = new WP_Query( $args );
                                                if ( $arr_posts->have_posts() ) :
                                                                    while ( $arr_posts->have_posts() ) :
                                                        $arr_posts->the_post();
                                               
                                                                        ?>
                                                                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                                          
                            <div class="col s12 m4 l4 wow slideInUp">          
                                    <div class="card">
                                             <div class="image">
                                                    <?php the_post_thumbnail(); ?>
                                             </div>
                                            <div class="text">  
                                                     <div class="square-pink"><?php the_time('j'); ?> 
                                                             <p style="font-size: 10px; line-height: .15"><?php the_time('F'); ?></p>
                                                     </div>
                                                        <center><a class="permalink" href="<?php the_permalink(); ?>">
                                                            <h5><?php the_title(); ?></h5>
                                                        </a> </center>
                                                        <div class="blog-text-body">
                                                             <?php the_excerpt(); ?>
                        </div>               
                                            </div>
                                            <div class="row center">
                                                <a href="<?php the_permalink(); ?>" id="download-button" class="btn-small black-text waves-effect waves-light btn btnreadmore">Read More</a>
                                            </div>   
                                    </div>
                            </div>  
                            </article>
                            <?php
41
            endwhile;
42
            wp_pagenavi(
43
                array(
44
                    'query' => $arr_posts,
45
                )
46
            );
47
        endif;
48
        ?>

                      
                               
             

     

                                 
                                 
</div>
<!---<div class="container center">
       <div class="paging">
               <div class="pagination">  
                       <a href="#" class="activee">1</a>
                       <a href="#">2</a>
                       <a href="#">3</a>
                     </div>
                           
         </div>
   </div> -->
</div>


 

<?php get_footer(); ?>