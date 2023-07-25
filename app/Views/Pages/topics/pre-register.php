<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Pre-register</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="single-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 ">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-9 col-12">
                            <div class="slider">
                                <div id="owl-example" class="owl-carousel">
                                    
                                <?php foreach($results['data2'] as $row) :?>
                                    <div class="slide" style="background: url('<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>');">
                                        <h1><a href="<?=$row->link?>"><?=$row->heading?></a></h1>
                                    </div>
                                <?php endforeach;?>

                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-4">
                            <div class="rygames newsst">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-3 mb-3">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#newest">Newest</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-toggle="tab" href="#best">Best</a>
                                            </li>
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div id="newest" class=" tab-pane active"><br>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/apex-legend.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">Apex Legends - Battle Royale</h4>
                                                                <p>Author: Respawn Entertainment <br> Pre-Registrants: 506651
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">
                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/league.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">League of Legends: Wild Rift</h4>
                                                                <p>Author: Riot Games, Inc <br> Pre-Registrants: 198570
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">

                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/apex-legend.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">Apex Legends - Battle Royale</h4>
                                                                <p>Author: Respawn Entertainment <br> Pre-Registrants: 506651
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">
                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img class="forimg5" src="<?php echo base_url('assets/images'); ?>/league.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">League of Legends: Wild Rift</h4>
                                                                <p>Author: Riot Games, Inc <br> Pre-Registrants: 198570
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">

                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/apex-legend.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">Apex Legends - Battle Royale</h4>
                                                                <p>Author: Respawn Entertainment <br> Pre-Registrants: 506651
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">
                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/league.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4>League of Legends: Wild Rift</h4>
                                                                <p>Author: Riot Games, Inc <br> Pre-Registrants: 198570
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">

                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/apex-legend.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4>Apex Legends - Battle Royale</h4>
                                                                <p>Author: Respawn Entertainment <br> Pre-Registrants: 506651
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">
                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/league.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4>League of Legends: Wild Rift</h4>
                                                                <p>Author: Riot Games, Inc <br> Pre-Registrants: 198570
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">

                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mt-3 mb-3">
                                                        <center> <button class="btn for-btn pl-5 pr-5">MORE</button></center>
                                                    </div>
                                                </div>


                                            </div>
                                            <div id="best" class="tab-pane fade"><br>
                                                <div class="row">
                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/apex-legend.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">Apex Legends - Battle Royale</h4>
                                                                <p>Author: Respawn Entertainment <br> Pre-Registrants: 506651
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">
                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>


                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/apex-legend.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">Apex Legends - Battle Royale</h4>
                                                                <p>Author: Respawn Entertainment <br> Pre-Registrants: 506651
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">
                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/league.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">League of Legends: Wild Rift</h4>
                                                                <p>Author: Riot Games, Inc <br> Pre-Registrants: 198570
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">

                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>

                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/apex-legend.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">Apex Legends - Battle Royale</h4>
                                                                <p>Author: Respawn Entertainment <br> Pre-Registrants: 506651
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">
                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="col-xl-6 col-lg-4 col-md-6 col-12 mt-3 mb-3">
                                                        <a href="#" class="rybx d-flex forflex">
                                                            <div class="ryimg">
                                                                <img src="<?php echo base_url('assets/images'); ?>/league.webp">
                                                            </div>
                                                            <div class="rycont">
                                                                <h4 class="for-h3">League of Legends: Wild Rift</h4>
                                                                <p>Author: Riot Games, Inc <br> Pre-Registrants: 198570
                                                                </p>

                                                            </div>
                                                            <div class="ryconr">

                                                                <button class="btn for-btn">Pre-register</button>
                                                            </div>
                                                        </a>
                                                    </div>


                                                </div>

                                            </div>

                                        </div>
                                    </div>


                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 sidbr">
                    <div class="row pxbx">
                        <div class="col-xl-12 forhover col-lg-12 col-sm-5  mb-3  p-0  prbxs">

                            <div class="formarintop">
                                <a href="#" class="foranchor">
                                    <img class="forimg5" src="<?php echo base_url('assets/images'); ?>/apex-banner.jpg" style="width: 100%;" height="190" alt="">
                                </a>
                            </div>

                            <div class="d-flex">
                                <div class="d-left pl-2 pt-2">
                                    <p class=" for16 ">Apex Legends</p>
                                </div>
                                <div class="d-right  m-2">
                                    <button class="btn ">Pre-register</button>
                                </div>
                            </div>


                        </div>  
                        <div class="col-xl-12 forhover col-lg-12 col-sm-5  mb-3  p-0 prbxs">

                        <div class="formarintop">
                            <a href="#" class="foranchor">
                                <img class="forimg5" src="<?php echo base_url('assets/images'); ?>/diablo-banner.jpg" style="width: 100%;" height="190" alt="">
                            </a>
                        </div>

                        <div class=" d-flex">
                            <div class="d-left pl-2 pt-2">
                                <p class=" for16 ">Diabolo</p>
                            </div>
                            <div class="d-right  m-2 ">
                                <button class="btn ">Pre-register</button>
                            </div>
                        </div>


                    </div>

                    </div>
                    
                    

                    <div class="ulsocl">
                        <li><a href="#"><i class="fab fa-facebook"></i>Facebook </a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i>YouTube</a></li>
                    </div>


                    <div class="prrgt disv mt-4 mb-4">
                        <!-- <h2>Discover</h2> -->
                        <ul>
                            <li>Topics</li>
                            <li><a href="#">More >></a></li>
                        </ul>
                        <div class="gmesct l-bar">
                            <div class="gmimg">
                                <img src="<?php echo base_url('assets/images'); ?>/apex-banner.jpg" width="125" height="75">
                            </div>
                            <div class="gmcon">
                                <h4>10 Best Action Games for Android</h4>
                            </div>
                        </div>

                        <div class="gmesct l-bar">
                            <div class="gmimg">
                                <img src="<?php echo base_url('assets/images'); ?>/pigeon2.jpg" width="125" height="75">
                            </div>
                            <div class="gmcon">
                                <h4>10 Best Action Games for Android</h4>
                            </div>
                        </div>

                        <div class="gmesct l-bar">
                            <div class="gmimg">
                                <img src="<?php echo base_url('assets/images'); ?>/apex-banner.jpg" width="125" height="75">
                            </div>
                            <div class="gmcon">
                                <h4>10 Best Action Games for Android</h4>
                            </div>
                        </div>
                        <div class="gmesct l-bar">
                            <div class="gmimg">
                                <img src="<?php echo base_url('assets/images'); ?>/apex-banner.jpg" width="125" height="75">
                            </div>
                            <div class="gmcon">
                                <h4>10 Best Action Games for Android</h4>
                            </div>
                        </div>

                        <div class="gmesct l-bar">
                            <div class="gmimg">
                                <img src="<?php echo base_url('assets/images'); ?>/apex-banner.jpg" width="125" height="75">
                            </div>
                            <div class="gmcon">
                                <h4>10 Best Action Games for Android</h4>
                            </div>
                        </div>
                        <div class="gmesct l-bar">

                            <div class="gmimg">
                                <img src="<?php echo base_url('assets/images'); ?>/apex-banner.jpg" width="125" height="75">
                            </div>
                            <div class="gmcon">
                                <h4>10 Best Action Games for Android</h4>
                            </div>
                        </div>

                        <div class="gmesct l-bar">
                            <div class="gmimg">
                                <img src="<?php echo base_url('assets/images'); ?>/apex-banner.jpg" width="125" height="75">
                            </div>
                            <div class="gmcon">
                                <h4>10 Best Action Games for Android</h4>
                            </div>
                        </div>
                        <div class="gmesct l-bar">
                            <div class="gmimg">
                                <img src="<?php echo base_url('assets/images'); ?>/apex-banner.jpg" width="125" height="75">
                            </div>
                            <div class="gmcon">
                                <h4>10 Best Action Games for Android</h4>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>



<?= $this->endSection() ?>