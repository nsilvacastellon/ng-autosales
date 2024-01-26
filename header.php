<!DOCTYPE html>
<html lang="en">
<head>
<?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/fun-cuts-favicon.ico" />
    <title>Document</title>
</head>
<body>
<header class="header">

<div class="header-container">

    <div class="header-flex-parent">

        <div class="ng-site-logo"><a href="<?php echo site_url();?>"><img src="<?php echo get_theme_file_uri('images/ng-auto-sales-logo.jpg') ?>" alt="Logo NG Auto Sales" width="200" height="150" class="logo"></a> </div>

        <div class="mobile-menu">
        
        <span class="fas fa-bars"></span>

        </div>

        <nav class="nav-bar"> 

            <ul class="nav-links">

                <li class="nav-items"><a href="<?php echo site_url();?>" class="nav-menu">Inicio</a></li>
                <li class="nav-items"><a href="<?php echo site_url('/nosotros');?>" class="nav-menu">Nosotros</a></li>
                <li class="nav-items"><a href="<?php echo site_url('/contacto');?>" class="nav-menu">Contacto</a></li>
                
                
                
            </ul>

        </nav>
    </div> <!-- header-flex-parent ends -->
</div> <!-- container-header ends -->
</header>   