<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url()?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Apps</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="container">
        <div class="row row1">
            
        <div class="col-xl-4 col-lg-4 col-sm-12 col-12 span1 mr-3">
                <div class="headingmain">
                    <h2 class=" foraligncenter">Category</h2>
                </div>
                <div class="game  mb-4">
                <a href="<?= base_url();?>/games"><h3 class=""><i class="fa fa-gamepad"></i> &nbsp; Games</h3> </a>
                </div>
                <div class="row row1 row4">
                    
                    <?php foreach($results['datagame'] as $result) :?>
                        <?php if($result->cat_name != 'GAME') :?>
                            <div class="col-xl-5 col-lg-5 col-sm-5 col-12 span4 mb-4 ml-4">
                                <a href="<?php echo base_url();?>/category/<?php echo strtolower($result->cat_name);?>">
                                    <div class="d-flex spancenter">
                                        <?php if($result->cat_image != NULL) : ?>
                                            <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$result->cat_image;?>"  width = 50 height = 50 >
                                        <?php else : ?>
                                            <img src="<?= base_url()?>/assets/images/no-image.jpg"  width = 50 height = 50 >
                                        <?php endif;?>
                                
                                        <div class="content-heading">
                                            <p><?php $output = strtolower(str_replace('GAME_', ' ', $result->cat_name));
                                                $output = ucwords($output);
                                                echo $output; ?></p>
                                        </div>
                                    </div>
                                </a>
                        </div>
                        <?php endif;?>
                    <?php endforeach;?>

                </div>

                <div class="game mb-4">
                <a href="<?= base_url();?>/apps"><h3 class=""><i class="fa fa-mobile"></i> &nbsp; Apps</h3> </a>
                </div>
                <div class="row row1 row4">
                <?php foreach($results['dataapp'] as $result) :?>
                    <div class="col-xl-5 col-lg-5 col-sm-5 col-12 span4 mb-4 ml-4">
                        <a href="<?php echo base_url();?>/category/<?php echo strtolower($result->cat_name);?>">
                            <div class="d-flex spancenter">
                                <?php if($result->cat_image != NULL) { ?>
                            <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$result->cat_image;?>"  width = 50 height = 50 >
                            <?php }else { ?>
                            <img src="<?= base_url()?>/assets/images/no-image.jpg"  width = 50 height = 50>
                            <?php }?>
                                
                                <div class="content-heading">
                                    <p><?php $output = strtolower(str_replace('_', ' ', $result->cat_name));
                                    $output = ucwords($output);
                                    echo $output; ?></p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php endforeach;?>


                </div>
            </div>
            <div class="col-xl-7 col-lg-8 col-sm-12 col-12 span11 mt-3 ml-3">
                <div class="span11 ">
                    <div class="game col-lg-12 col-sm-12 miga d-flex pt-3 pb-3 mb-3">
                        <div class="col-sm-4">
                            <h2 class="for-h3 foraligncenter">Apps</h2>
                        </div>
                        <div class="col-sm-8 d-flex">
                            <div class="btnsot">
                                <label>Sort by:</label>
                                <!-- <button class="btn">Download</button>
                                <button class="btn">Latest Update</button> -->
                                <button class="btn">Rating</button>
                            </div>

                        </div>
                    </div>
                    <div class="row row1 pr-3 pl-3" id = 'load_data_table2'>
                        
                        <?php $counter = 0;
                         foreach($results['dataAll'] as $raw) :  ?>
                        <div class="col-xl-3 col-12 col-sm-3 col-md-4 col-lg-4  span8">
                            <div class=" spancenter span7">
                                <div class="img-align ">
                                <?php $counter++;
                                $word = "https:";
                                if(strpos($raw->image, $word) !== false) : ?>
                                    <img src="<?=$raw->image;?>" style="margin-left: 0;" height = "100" width="100">
                                <?php else : ?>
                                    <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$raw->image;?>" style="margin-left: 0;" height = "100" width="100">
                                <?php endif;?>
                                    <!-- <img src="<?php echo base_url('assets/images'); ?>/Layer 538.png" alt="" > -->
                                </div>
                                <div class="content-heading cont-align">
                                    <p><?=$raw->title?></p>
                                    <label class="startss">
                                            <span class="fa fa-star <?php if($raw->rating < 1){ echo "star-color";} ?>
                                        " ></span>
                                            <span class="fa fa-star <?php if($raw->rating < 2){ echo "star-color";}?>
                                        " ></span>
                                            <span class="fa fa-star <?php if($raw->rating < 3){ echo "star-color";} ?>
                                        "></span>
                                            <span class="fa fa-star <?php if($raw->rating < 4){ echo "star-color";} ?>
                                        "></span>
                                            <span class="fa fa-star <?php if($raw->rating < 5){ echo "star-color";} ?>
                                        "></span>
                                        </label> 
                                        <?php  echo round($raw->rating,1); ?>
                                    <a href="<?= base_url()?>/game/<?= $raw->app_name;?>"><button class="btn for-btn">Download XAPK</button></a>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        

                    </div>
                    <div class="row shwmre">
                        <div class="col-xl-12 mb-3" id ='remove_row'>
                            <button class="btn for-btn" id="btn_more2" data-vid="<?php echo $counter;?>">SHOW MORE</button>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>





    <?= $this->endSection() ?>