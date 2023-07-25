<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/apksure/home">Home</a></li>
                    <?php foreach($data['data2'] as $row) : ?>
                    <li class="breadcrumb-item active"><?php echo $row->title; ?></li>
                <?php endforeach;?>
                </ol>
            </nav>
        </div>
    </section>
    <section class="single-main">
        <div class="container">
            <div class="row">
                <?php foreach($data['data2'] as $row) : ?>

                    <div class="col-xl-8 col-lg-8 col-md-12 col-12 mt-5">
                        <div class="appbox aditninfo d-flex mb-4 forflex">
                            <div class="appimgbx">
                            <?php
                                $word = "https:";
                                if(strpos($row->image, $word) !== false) : ?>
                                    <img class="forimg5" src="<?=$row->image;?>">
                                <?php else : ?>
                                    <img class="forimg5" src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>">
                                <?php endif;?>
                                
                            </div>
                            <div class="appdetails">
                                <h2 class="for-h3"><?=$row->title;?></h2>
                                <p><?=$row->supported_os;?></p>
                                <div class="stardiv d-flex">
                                    <label class="startss">
                                        <span class="fa fa-star <?php if($row->rating < 1){ echo "star-color";} ?>
                                    " ></span>
                                        <span class="fa fa-star <?php if($row->rating < 2){ echo "star-color";}?>
                                    " ></span>
                                        <span class="fa fa-star <?php if($row->rating < 3){ echo "star-color";} ?>
                                    "></span>
                                        <span class="fa fa-star <?php if($row->rating < 4){ echo "star-color";} ?>
                                    "></span>
                                        <span class="fa fa-star <?php if($row->rating < 5){ echo "star-color";} ?>
                                    "></span>
                                    </label>
                                    <ul class="d-flex">
                                        <li><?=$row->votes;?> Reviews</li>
                                        <!-- <li>0 Posts</li> -->
                                    </ul>
                                </div>
                                <p><?=$row->author;?></p>
                                <ul class="lisbtn">
                                    <li><a href="<?php echo base_url();?>/games/games-download" class="btn">Download APK(<?=$row->size?>MB)</a></li>
                                    <!-- <li><a href="#" class="btn btn2">Versions</a></li> -->
                                </ul>
                                <!-- <p class="taglne">The XAPK (Base APK + Split APKs) File, How to Install .XAPK File?</p> -->
                                <p class="taglne"><?=$row->summary;?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-4">
                                <div class="main-dec">
                                    <p class="text-center">The XAPK (Base APK + Split APKs) File, How to Install .XAPK File?</p>
                                    <div class="singleslider mb-4">
                                        <div id="owl-example3" class="owl-carousel">
                                            <?php foreach($data['data5'] as $row2):?>
                                            <div class="imgslider">
                                            <?php
                                            $word = "https:";
                                            if(strpos($row2->screenshot, $word) !== false) : ?>
                                                <a target = '_blank' href="<?php echo $row2->screenshot;?>"><img src="<?php echo $row2->screenshot;?>"></a>
                                            <?php else : ?>
                                                <a target = '_blank' href="<?= base_url()?>/assets/uploads/appsimages/<?php echo $row2->screenshot;?>"><img src="<?= base_url()?>/assets/uploads/appsimages/<?php echo $row2->screenshot;?>"></a>
                                                
                                            <?php endif;?>
                                                
                                            </div>
                                            <?php endforeach; ?>
                                            <!-- <div class="imgslider">
                                                <img src="<?php echo base_url('assets/images'); ?>/screen-1.jpg">
                                            </div> -->
                                                
                                        </div>
                                    </div>
                                    <div class="sin-decrpt ">
                                        <h3 class="mediumh3 for-h3"><?=$row->title?></h3>
                                        <p class="forjustify"><?=$row->description?></p>
                                        <!-- <ul class="mb-3 mt-3">
                                            <li><strong>Featuring:</strong></li>
                                            <li>Ducks eating Sandwiches!</li>
                                            <li>Cats SPEAKING!</li>
                                            <li>Pyramids!</li>
                                            <li>Soccer Balls!</li>
                                        </ul> -->
                                        <h3 class="mediumh3 for-h3">Whats's New?</h3>
                                        <p><b><?=$row->last_updated ?></b></p>
                                        <p><?=$row->whatsnew ?></p>
                                    </div>
                                </div>
                                <div class="aditninfo bgwird">
                                    <h3 class="mb-4 for-h3 mediumh3">Additional Information</h3>
                                    <ul class="d-flex">
                                        <li>
                                            <h4 class="for-h3">Category:</h4>
                                            <p class="forbtn2"><?php foreach($data['data6'] as $r54ow){ echo $r54ow->cat_name; }?></p>
                                        </li>
                                        <li>
                                            <h4 class="for-h3">Latest Version:</h4>
                                            <p class="forbtn2"><?php foreach($data['data3'] as $r5ow){ echo $r5ow->version; } ?></p>
                                        </li>
                                        <li>
                                            <h4 class="for-h3">Publish Date:</h4>
                                            <p class="forbtn2"><?=$row->last_updated?></p>
                                        </li>
                                        <li>
                                            <h4 class="for-h3">Content Rating:</h4>
                                            <p class="forbtn2"><?=$row->content_rating;?></p>
                                        </li>
                                        <li>
                                            <h4 class="for-h3">Developer:</h4>
                                            <p class="forbtn2"><a href="<?=$row->author_link;?>"><?=$row->author?></a></p>
                                        </li>
                                        <!-- <li>
                                            <h4 class="for-h3">Uploaded by:</h4>
                                            <p class="forbtn2">Trần Thuận</p>
                                        </li> -->
                                        <li>
                                            <h4 class="for-h3">Available on:</h4>
                                            <p class="forbtn2"><?php if($row->supported_os == ''){
                                                echo 'Android 4.4+';
                                            }else{ echo $row->suppoted_os;}?></p>
                                        </li>
                                        <li>
                                            <h4 class="for-h3">Report:</h4>
                                            <a href="#"><p class="forbtn2">Flag as inappropriate</p></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="prvers mb-4">
                                    <h3 class="mediumh3 mb-4 for-h3">Previous versions</h3>
                                    <div class="row">
                                        <?php foreach($data['data4'] as $res) :?>
                                        <div class="col-xl-4 col-lg-4 col-md-4 col-12">
                                            <div class="versbx">
                                                <div class="vercont d-flex">
                                                    <h4 class="for-h3">V<?=$res->version?></h4>
                                                    <ul class="d-flex">
                                                        <li class="forbtn2">MB XAP</li>
                                                        <li class="forbtn2">Apks</li>
                                                    </ul>
                                                </div>
                                                <div class="verpe">
                                                    <p class="forbtn2"><?=$row->author?></p>
                                                    <p class="verdate forbtn2">2020-07-16</p>
                                                    <p class="versizee forbtn2">143.3 MB</p>
                                                </div>
                                                <div class="verbtn">
                                                    <p class="vers forbtn2">Variants 2</p>
                                                    <a href="#"><img class="forimg3" src="<?php echo base_url('assets/images'); ?>/download.png"></a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                        
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="rygames">
                                <div class="row mb-3">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-left">
                                        <h2>Similar to Rhythm Games</h2>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-12 text-right">
                                        <a href="#">More>> </a>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mt-3 mb-3">
                                        <div class="rybx d-flex">
                                            <div class="ryimg">
                                                <img src="<?php echo base_url('assets/images'); ?>/img-single.png">
                                            </div>
                                            <div class="rycont">
                                                <h4>Draw Story 3D</h4>
                                                <label class="startss">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </label>
                                                <p>Gamejam</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mt-3 mb-3">
                                        <div class="rybx d-flex">
                                            <div class="ryimg">
                                                <img src="<?php echo base_url('assets/images'); ?>/img-single.png">
                                            </div>
                                            <div class="rycont">
                                                <h4>Draw Story 3D</h4>
                                                <label class="startss">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </label>
                                                <p>Gamejam</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mt-3 mb-3">
                                        <div class="rybx d-flex">
                                            <div class="ryimg">
                                                <img src="<?php echo base_url('assets/images'); ?>/img-single.png">
                                            </div>
                                            <div class="rycont">
                                                <h4>Draw Story 3D</h4>
                                                <label class="startss">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </label>
                                                <p>Gamejam</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mt-3 mb-3">
                                        <div class="rybx d-flex">
                                            <div class="ryimg">
                                                <img src="<?php echo base_url('assets/images'); ?>/img-single.png">
                                            </div>
                                            <div class="rycont">
                                                <h4>Draw Story 3D</h4>
                                                <label class="startss">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </label>
                                                <p>Gamejam</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mt-3 mb-3">
                                        <div class="rybx d-flex">
                                            <div class="ryimg">
                                                <img src="<?php echo base_url('assets/images'); ?>/img-single.png">
                                            </div>
                                            <div class="rycont">
                                                <h4>Draw Story 3D</h4>
                                                <label class="startss">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </label>
                                                <p>Gamejam</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-12 mt-3 mb-3">
                                        <div class="rybx d-flex">
                                            <div class="ryimg">
                                                <img src="<?php echo base_url('assets/images'); ?>/img-single.png">
                                            </div>
                                            <div class="rycont">
                                                <h4>Draw Story 3D</h4>
                                                <label class="startss">
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star checked"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </label>
                                                <p>Gamejam</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            

                        </div>
                    </div>
                
                <?php endforeach;?>

                <div class="col-xl-4 col-lg-4 col-md-12 col-12 sidbr">
                    <div class="ulsocl">
                        <li><a href="#"><i class="fab fa-facebook"></i>Facebook </a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i>YouTube</a></li>
                    </div>
                    <div class="row">
                        <div class="disv col-xl-12 col-lg-12 col-md-5 mt-4 mb-4">
                            <h2>Discover</h2>
                            <ul>
                                <li>Similar</li>
                                <li><a href="<?=base_url()?>/games">More>></a></li>
                            </ul>
                            <?php foreach($data['data7'] as $row):?>
                            <div class="gmesct">
                                
                                    <div class="gmimg">
                                        <img src="<?php echo $row->image; ?>">
                                    </div>
                                    <div class="gmcon">
                                    <a href="<?=base_url()?>/store/<?=$row->app_name;?>"><h4><?php echo $row->title; ?></h4></a>
                                        <p>
                                        <label class="startss">
                                            <span class="fa fa-star <?php if($row->rating < 1){ echo "star-color";} ?>
                                        " ></span>
                                            <span class="fa fa-star <?php if($row->rating < 2){ echo "star-color";}?>
                                        " ></span>
                                            <span class="fa fa-star <?php if($row->rating < 3){ echo "star-color";} ?>
                                        "></span>
                                            <span class="fa fa-star <?php if($row->rating < 4){ echo "star-color";} ?>
                                        "></span>
                                            <span class="fa fa-star <?php if($row->rating < 5){ echo "star-color";} ?>
                                        "></span>
                                        </label> 
                                        <?php  echo round($row->rating,1); ?></p>
                                        <p class="cate"><?php echo $row->author;?></p>
                                    </div>
                                
                            </div>
                            <?php endforeach;?>

                            
                        </div>
                        <div class="disv col-xl-12  col-lg-12 col-md-5 mt-4 mb-4">
                            <h2>Popular Games In Last 24 Hours</h2>
                            <ul>
                                <li>Store</li>
                                <li><a href="<?=base_url()?>/apps">More>></a></li>
                            </ul>
                            <?php foreach($data['data8'] as $row):?>
                            <div class="gmesct">
                                
                                    <div class="gmimg">
                                        <img src="<?php echo $row->image; ?>">
                                    </div>
                                    <div class="gmcon">
                                    <a href="<?=base_url()?>/store/<?=$row->app_name;?>"><h4><?php echo $row->title; ?></h4></a>
                                        <p>
                                        <label class="startss">
                                            <span class="fa fa-star <?php if($row->rating < 1){ echo "star-color";} ?>
                                        " ></span>
                                            <span class="fa fa-star <?php if($row->rating < 2){ echo "star-color";}?>
                                        " ></span>
                                            <span class="fa fa-star <?php if($row->rating < 3){ echo "star-color";} ?>
                                        "></span>
                                            <span class="fa fa-star <?php if($row->rating < 4){ echo "star-color";} ?>
                                        "></span>
                                            <span class="fa fa-star <?php if($row->rating < 5){ echo "star-color";} ?>
                                        "></span>
                                        </label> 
                                        <?php  echo round($row->rating,1); ?></p>
                                        <p class="cate"><?php echo $row->author;?></p>
                                    </div>
                                
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?= $this->endSection() ?>