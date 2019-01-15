<?php get_header(); ?>


 <!--header image-->
 <div  class="service-header">
       
       <div class="container">
         <h2 class="header center white-text text-lighten-2 wow zoomIn">SERVICE</h2>
       
       </div>
       </div>

  <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'Service Menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'ul topnav',
 )
);
?>
 <!-- end header image-->
<div class="service-body">
<div class="">
<div class="row">
<?php 
                         $reviewArgs = array( 
                        'category' => '9', 
                        'posts_per_page' => 5);
                        $reviews = get_posts( $reviewArgs );
                        foreach ($reviews as $post) :  setup_postdata($post); { ?>
 <div class="col s12 m4 l4 wow slideInUp">
    <div class="card">
      <div class="card-image">
      <?php the_post_thumbnail(); ?>
      </div>
      <a class="permalink" href="<?php the_permalink(); ?>">
       <h6 class="card-title"><?php the_title(); ?></h6>
      </a>
      <div class="card-content">
        <div class="service-text-body"> <?php the_excerpt(); ?>
                        </div>
      </div>
    </div>
  </div>
  <?php }
                             endforeach;  
                        ?>  
</div>
</div>

<div  class="service-footer  wow slideInUp">
       
        <div class="container">
          <p class="header center black-text text-lighten-2"><b>WHY CHOOSE US?</b></p>
          <br>
          <p>
            Feemo, Inc. committed to helping its clients reach their goals and prividing an excellent 
            service in innovation. We provide everything you need to get your business off the ground 
            and work at our hardest to commit in every project we handle at the highest level.
          </p>
          <p>
            With our management philosophy "continue to please those involved", Feemo, Inc. assures 
            its clients and business partners to give nothing but the best service that we can offer.
            Thus, we are constantly working to improve our service by investing in the latest trend and technology.
          </p>
        
        </div>
        </div>

        <?php get_footer(); ?>