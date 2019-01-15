<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,minimum-scale=1, maximum-scale=1, initial-scale=1" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">
    <title>
        <?php bloginfo('name'); ?> |
    <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
  <link rel="icon" href="assets/images/icon.png">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?php bloginfo('template_url'); ?>/assets/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url'); ?>/assets/css/mystyle.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="<?php bloginfo('template_url'); ?>/assets/css/animate.min.css" type="text/css" rel="stylesheet" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" rel="stylesheet" />
  <script src="<?php bloginfo('template_url'); ?>"></script>
  
  <?php wp_head();?>
</head>
<body>



<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'Main Menu Dropdown',
  'theme_location'=>'Primary',
  'depth' => 2,
  'container' => false,
  'menu_id' => 'dropdown1',
  'menu_class' => 'dropdown-content',
  //Process nav menu using our custom nav walker
  'walker' => new wp_materialize_navwalker())
);
?>

<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'Main Menu Dropdown',
  'theme_location'=>'Primary',
  'depth' => 2,
  'container' => false,
  'menu_id' => 'dropdown2',
  'menu_class' => 'dropdown-content',
  //Process nav menu using our custom nav walker
  )
);
?>


    
    <ul id="dropdown2" class="dropdown-content">
          <li><a href="company.html" class="black-text">COMPANY</a></li>
          <li class="divider"></li>
          <li><a href="access.html" class="black-text">ACCESS</a></li>
    </ul>
    <nav role="navigation" class="navbar-fixed-top">
        <div class="navbar ">
          <a id="logo-container" href="#" class="brand-logo"><img width="120px" height="60px"src="<?php bloginfo('template_url'); ?>/assets/images/navlogowhite.png"></a>
     
          <ul class="right hide-on-med-and-down">
           
           <li><a class="dropdown-trigger nav-link" href="#!" data-target="dropdown1">ABOUT</a></li>
          
         </ul>   
  <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'Main Menu',
  'depth' => 2,
  'theme_location'=>'Primary',
  'container' => false,
  'menu_id' => 'nav-link',
  'menu_class' => 'right hide-on-med-and-down',
  //Process nav menu using our custom nav walker
  'walker' => new wp_materialize_navwalker())
);
?>

<?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'Main Menu',
  'theme_location'=>'Primary',
  'depth' => 2,
  'items_wrap' => my_nav_wrap(),
  'container' => false,
  'menu_id' => 'nav-mobile',
  'menu_class' => 'sidenav',
  //Process nav menu using our custom nav walker
)
);

?>


  
         <ul id="nav-mobile" class="sidenav">
            
            <li><a class="dropdown-trigger nav-link" href="#!" data-target="dropdown2">COMPANY</a></li>
           
          </ul>
          <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
         </div>
      </nav>