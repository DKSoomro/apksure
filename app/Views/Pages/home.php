<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <section class="top-sect mt-4">
        <div class="container forpadding">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-3 col-md-12 col-12 box-sd forpadding">
                    <div class="serch-sidebar">
                        <div class="search-container">
                            <form action="<?=base_url();?>/search">
                                <input type="text" placeholder="Search.." name="term">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="content-menu forpaddingleftgive ">
                            <ul class="list-menu">
                                <li class="mt-3">
                                    <a href="discover-topics">Discover</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>/games">Popular Games</a>
                                </li>
                                <li>
                                    <a href="#">Videos</a>
                                </li>
                                <li>
                                    <a href="#">Screenshots</a>
                                </li>
                                <li class="mt-3">
                                    <a href="#">Support</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url();?>/pages/about-us">About</a>
                                </li>
                                <!-- <li class="mt-3">
                                    <a href="#">Login</a>
                                </li>
                                <li>
                                    <a href="#">Create account</a>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 slidee col-sm-12 forpadding55 col-12">
                    <div class="slider">
                        <div id="owl-example" class="owl-carousel">
                        <?php foreach($data['data2'] as $row) :?>
                            <div class="slide" style="background: url('<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>');">
                                <h1><a href="<?=$row->link?>"><?=$row->heading?></a></h1>
                            </div>
                        <?php endforeach;?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="other-nav" style="width: 100%; background-color: white; display: none;">

        <div class="navigation naaa d-flex">
            <div class="p-3 pl-4 pr-4">
                <a href="#" class="fora">
                    <center>
                        <div class="icon-2">

                            <i class="fas fa-gamepad gaming-tab"></i>

                        </div>

                        <div class="text">
                            <p>Hot Games</p>
                        </div>
                    </center>
                </a>
            </div>
            <div class="p-3 pr-4">

                <a href="#" class="fora">
                    <center>
                        <div class="icon-2 " style="background: #FA8484;">

                            <i class="fab fa-android gaming-tab"></i>

                        </div>

                        <div class="text">
                            <p> Hot Apps </p>
                        </div>
                    </center>
                </a>
            </div>
            <div class="p-3">

                <a href="#" class="fora">
                    <center>
                        <div class="icon-2" style="background: #5EC9F3;">

                            <i class="fas fa-archway gaming-tab"></i>

                        </div>

                        <div class="text">
                            <p>Category</p>
                        </div>
                    </center>
                </a>
            </div>

        </div>
    </section>
    <section class="dicvrsect mt-2 mb-2">
        <div class="container box-sd">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 mb-3 col-12 d-flex">
                    <div class="discbx ">
                        <img src="<?php echo base_url('assets/images'); ?>/discover.png">
                        <a href="discover-topics">More..</a>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                    <div class="row">
                        <?php foreach($data['data4'] as $row) :?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-3">
                            <div class="appbx d-flex">
                                <div class="imggdis">
                                <?php
                                $word = "https:";
                                if(strpos($row->image, $word) !== false) : ?>
                                    <img src="<?=$row->image;?>">
                                <?php else : ?>
                                    <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>">
                                <?php endif;?>

                                </div>
                                <a href="store/<?= $row->app_name;?>">
                                    <div class="boxdetails">
                                        <h3><?= $row->title;?></h3>
                                        <p><?= strtoupper($row->author);?> </p>
                                        <span class="datee"><?=$row->last_updated;?></span>
                                        <a class="btn posbtns" href="store/<?= $row->app_name;?>">Download APK</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php endforeach;?>
                        

                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="popsect mt-2 mb-2">
        <div class="container">
            <div class="row">
            <?php foreach($data['data6'] as $app2) :?>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 cod-hide">
                    <?php foreach($data['getapp1'] as $row) :?>
                    <div class="pobxs">
                        <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$app2->app_image_1?>">
                        <h4 class="forbtn2"><?=$row->title?></h4>
                        <div class="cntbx">
                            <!-- <h5 class="forbtn2">Action</h5> -->
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
                            <a class="btn posbtns" href="<?=base_url()?>/store/<?=$row->app_name?>">Download APK</a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 cod-hide">
                <?php foreach($data['getapp2'] as $row) :?>
                    <div class="pobxs">
                        <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$app2->app_image_2?>">
                        <h4 class="forbtn2"><?=$row->title?></h4>
                        <div class="cntbx">
                            <!-- <h5 class="forbtn2">Action</h5> -->
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
                            <a class="btn posbtns" href="<?=base_url()?>/store/<?=$row->app_name?>">Download APK</a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 cod-hide">
                <?php foreach($data['getapp3'] as $row) :?>
                    <div class="pobxs">
                        <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$app2->app_image_3?>">
                        <h4 class="forbtn2"><?=$row->title?></h4>
                        <div class="cntbx">
                            <!-- <h5 class="forbtn2">Action</h5> -->
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
                            <a class="btn posbtns" href="<?=base_url()?>/store/<?=$row->app_name?>">Download APK</a>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 box-sd">
                <?php foreach($data['rand'] as $row) :?>
                    <h2 class="for-h3">Popular Games In Last 24 Hours</h2>
                    <div class="pobxs">
                        <img src="<?=$row->cover?>">
                        <h4 class="forbtn2"><?=$row->title?></h4>
                        <div class="cntbx">
                            <!-- <h5 class="forbtn2">Action</h5> -->
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
                            <a class="btn posbtns" href="<?=base_url()?>/store/<?=$row->app_name?>">Download APK</a>
                        </div>
                    </div>
                <?php endforeach;?>
                </div>
            <?php endforeach;?>
            </div>
        </div>
    </section>
    <section class="trdngapps mt-2 mb-2">
        <div class="container box-sd pr-5 pl-5">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                    <div class="row">

                        <?php foreach($data['data5'] as $row) :?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-12 mb-3">
                            <div class="appbx d-flex">
                                <div class="imggdis">
                                <?php
                                $word = "https:";
                                if(strpos($row->image, $word) !== false) : ?>
                                    <img src="<?=$row->image;?>">
                                <?php else : ?>
                                    <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>">
                                <?php endif;?>
                                </div>
                                <div class="boxdetails">
                                    <h3><?= $row->title; ?></h3>
                                    <p><?= strtoupper($row->author); ?></p>
                                    <span class="datee"><?= $row->last_updated; ?></span>
                                    <a class="btn posbtns" href="store/<?= $row->app_name;?>">Download APK</a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                                </div>
                        
                </div>
                <div class="col-xl-3 col-lg-3 col-md-12 col-12 d-flex">
                    <div class="discbx ">
                        <img src="<?php echo base_url('assets/images'); ?>/tradapps.png">
                        <a href="games">More..</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="lstest mt-2 mb-2">
        <div class="container">
            <div class="row">
               <?php foreach($data['featured'] as $row) :?>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 p-0">
                    <a href="<?=base_url()?>/topic/<?=$row->slug?>" class="imggltes">
                        <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>" class="featured-image">
                        <h3><?=$row->collection_name?></h3>
                    </a>
                   
                </div>
                
               <?php endforeach;?>
            </div>
        </div>
    </section>
    <section class="botmslider pt-2 pb-2">
        <div class="container-fluid">
            <div class="row">
                <div id="owl-example2" class="owl-carousel">
                    <?php foreach($data['data3'] as $row) :?>
                    <?php $cat_name = str_replace('_', ' ',$row->cat_name); $cat_name = str_replace('GAME_', ' ',$cat_name  ); ?>
                    <?php if($row->cat_image ==  '') : ?>

                    <div class="img-slide" style="background: url('<?= base_url()?>/assets/images/no-image.jpg');">
                    <?php else :?>
                        <div class="img-slide" style="background: url('<?= base_url()?>/assets/uploads/appsimages/<?=$row->cat_image;?>');">
                        
                    <?php endif;?>

                        <h3><a href="<?=base_url()?>/category/<?=strtolower($row->cat_name)?>"><?php echo $cat_name;?></a></h3>
                    </div>
                    <?php endforeach;?>
                    
                </div>
            </div>
        </div>
    </section>


<?= $this->endSection() ?>