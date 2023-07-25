<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>APKSure</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/owl/owl.carousel.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('assets/owl/owl.theme.css'); ?>" />
    
    <link rel="icon" type="image/png" href="<?= base_url()?>/assets/uploads/settingimges/<?=get_setting_db('favicon')?>">

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f75c4da8d745b001a78a0cb&product=sticky-share-buttons' async='async'></script>
</head>

<body>
    <header class="main-headerr">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url();?>">
                    <img src="<?= base_url()?>/assets/uploads/settingimges/<?=get_setting_db('logo')?>" alt="APKsure-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo base_url();?>/home"><i class="fas fa-home foricon"></i> HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/apps"><i class="fas fa-mobile-alt foricon"></i> APPS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url();?>/games"><i class="fas fa-gamepad foricon"></i> GAMES</a>
                        </li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="topics"><i class="fas fa-align-left foricon"></i> TOPICS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>/discover-topics">Discover</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>/editors-choice-topics">Editor's Choice</a></li>
                                <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>/pre-register">Pre-register</a></li> -->
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>/game-sales">Games on sales</a></li>
                                <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>/more-topics">More Topics</a></li>
                            </ul>
                        </li>

                        <form class="form-inline my-2 my-lg-0 ml-2" action="<?=base_url();?>/search" >
                            <input class="form-control mr-sm-2" type="text" placeholder="Search" name="term" aria-label="Search">
                            <button class="btn searchbtn" type="submit">Search</button>
                        </form>
                        
                        <!-- <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><i class="fas fa-shopping-cart foricon"></i> PRODUCTS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="#">Page 1-1</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Page 1-2</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Page 1-3</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </header>