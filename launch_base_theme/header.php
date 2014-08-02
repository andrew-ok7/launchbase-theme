<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php wp_title(''); ?></title>
<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen">

<!-- Switcher Only -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="<?php echo get_template_directory_uri(); ?>/switcher/css/switcher.css" media="all" />
<!-- END Switcher Styles -->

<!-- Demo Examples (For Module #3) -->
    <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/switcher/css/blue.css" title="blue" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/switcher/css/green.css" title="green" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/switcher/css/red.css" title="red" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/switcher/css/grey.css" title="grey" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/switcher/css/dark.css" title="dark" media="all" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/switcher/css/light.css" title="light" media="all" />
<!-- END Demo Examples -->

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<style>

</style>
<!-- Font Awesome Icons -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body>
<!-- Start Switcher -->
<div class="demo_changer">
  <div class="demo-icon">
    <i class="fa fa-cog fa-2x"></i>
  </div><!-- end opener icon -->
  <div class="form_holder">
    <div class="row">
        <div class="col-sm-12 col-xs-12">
          <div class="predefined_styles"> 
            <h4>Patterns</h4>
            <!-- MODULE #2 -->
            <div class="PatternChanger">
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_01.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_01.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_02.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_02.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_03.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_03.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_04.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_04.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_05.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_05.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_06.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_06.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_07.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_07.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_08.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_08.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_09.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_09.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_10.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_10.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_11.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_11.jpg" alt=""></a>
              <a href="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_12.jpg" class="bg_t"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/patterns/bg_12.jpg" alt=""></a>
            </div>	
            <!-- END MODULE #2 -->
            <hr>
            <h4>Color</h4>
            <!-- MODULE #3 -->	
            <a href="" rel="blue" class="styleswitch"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/icons/blue.png" alt=""></a>		
            <a href="" rel="green" class="styleswitch"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/icons/green.png" alt=""></a>		
            <a href="" rel="red" class="styleswitch"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/icons/red.png" alt=""></a>		
            <a href="" rel="grey" class="styleswitch"><img src="<?php echo get_template_directory_uri(); ?>/switcher/img/icons/grey.png" alt=""></a>
            <!-- END MODULE #3 -->
          </div><!-- end predefined_styles -->
        </div><!-- end col -->
      </div><!-- end row -->
  </div><!-- end form_holder -->
</div><!-- end demo_changer -->
<!-- End Switcher -->
<div class="container mainWrap">
  <header>
    <div class="row">
      <div class="col-sm-3">
        <a class="logo" href="<?php echo home_url(); ?>"><img src="<?php header_image(); ?>" alt="" /></a>
      </div>
      <div class="col-sm-4  col-sm-offset-5">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Header') ) : endif; ?>
      </div>
    </div>
  </header>
</div>
<div class="container mainWrap">
  <div class="navbar navbar-default">
    <div class="row">
      <div class="navbar-header"><span class="menuTitle">MENU</span>
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div class="navbar-collapse collapse navbar-responsive-collapse">
        <?php bones_main_nav(); // Adjust using Menus in Wordpress Admin ?>
      </div>
    </div>
  </div><!-- topnav End -->
</div>