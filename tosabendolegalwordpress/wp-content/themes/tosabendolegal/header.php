<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">
    <!-- LOAD CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/furatto.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome.css">
        
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
        
        
        
        <!-- SLIDE MOBILE CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.theme.css">
      
            <!-- LOAD SCRIPS -->
            <script src="<?php bloginfo('template_url') ?>/js/jquery-1.9.1.min.js"></script>
            <script src="<?php bloginfo('template_url') ?>/js/furatto.min.js"></script>
            <script src="<?php bloginfo('template_url') ?>/js/owl.carousel.min.js"></script>
            <script src="<?php bloginfo('template_url') ?>/js/app.js"></script>
            
                <!-- PERFORMANCE MOBILE -->
                <script src="<?php bloginfo('template_url') ?>/js/fastclick.js"></script>
        <style>
            body {
                background-color: #1a1c1e !important;                    
            }
        </style>    
        <script>
            slide();
            mobile();
        </script>
    
    <!-- VIEWPORT -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <title>Tô sabendo legal</title>
    
</head>
<body>
    
    <!-- HEADER -->
    <div class="panels ">
      <div class="panel panel-left"></div>
    </div>
    <div class="panel-content">
      <div class="navbar">
        <div class="navbar-inner docs-navbar-inner">
          <div class="container">
            <a href="#menu" class="menu-trigger meteocon" data-meteocon="M" data-toggle="panel" data-target="#menu"></a>
            <div class="nav-collapse collapse">
              <nav id="menu">
                <ul class="nav docs-navbar-menu">
                    <li><a class="brand" href="<?php bloginfo('url') ?>">Tô sabendo legal</a></li>
                    <li><a href="">Brasília de bar em bar</a></li>
                    <li><a href="">Hoje eu vou</a></li>
                    <li><a href="">Tá na mesa</a></li>
                    <li><a href="">Fale Conosco</a></li>               
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    
      
      <?php include "slide.php"; ?>
    
    
      <div class="container-center">    
        
            <div class="row">
                
                
                <?php get_sidebar() ?>                
                