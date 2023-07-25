<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Discover Games</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container discvr  formargin2 forpadding">
        <div class="row formargin2" id="page">
            
            <?php foreach($data['data2'] as $row) : ?>
            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex p-4 forpadding">
                    <div class=" p-4">
                        
                        <?php
                                $word = "https:";
                                if(strpos($row->image, $word) !== false) : ?>
                                    <a href="game/<?= $row->app_name;?>" class="foranchor">
                                    <img src="<?=$row->image;?>" width="150"></a>
                                <?php else : ?>
                                    <a href="game/<?= $row->app_name;?>" class="foranchor">
                                    <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>" width="150"></a>
                                <?php endif;?>
                        
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
                                <?php  echo round($row->rating,1); ?>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="game/<?= $row->app_name;?>" class="foranchor">
                            <h1 class="for-h3 foraligncenter"><?= $row->title; ?></h1>
                        </a>
                        <p><?= $row->last_updated; ?></p>
                        <p class="for15 forjustify"><?php if (strlen($row->description) > 1){
   $str = substr($row->description, 0, 254) . '...'; echo $str; } ?></p>
                        <?php  $db = \Config\Database::connect();
         $query = $db->query('SELECT * FROM categories WHERE id = '.$row->cat_id);
		 $results = $query->getResult(); foreach($results as $row2) :?>
                            <button class="btn"><?php  $output = strtolower(str_replace('_', ' ', $row2->cat_name));
                                $output = ucwords($output);
                                echo $output;?></button>
                        <?php endforeach;?>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                        <?php  $db = \Config\Database::connect();
         $query = $db->query('SELECT * FROM screenshots WHERE  app_id ='.$row->id.' LIMIT 1');
		 $results = $query->getResult(); foreach($results as $row3) :?>
                            <?php
                            $word = "https:";
                            if(strpos($row3->screenshot, $word) !== false) : ?>
                                <a target = '_blank' href="<?php echo $row3->screenshot;?>"><img  class="forimg2"src="<?php echo $row3->screenshot;?>"></a>
                            <?php else : ?>
                                <a target = '_blank' href="<?= base_url()?>/assets/uploads/appsimages/<?php echo $row3->screenshot;?>"><img class="forimg2" src="<?= base_url()?>/assets/uploads/appsimages/<?php echo $row3->screenshot;?>" width="400" height="200"></a>
                                
                            <?php endif;?>
                           
         <?php endforeach;?>
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>



            <!-- <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex forpadding p-4">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/blade.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Badlanders <small class="text-muted">1.0</small></h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Badlanders, Welcome.Here, upon the ruins of a once-great civilization, scavengers fight for treasure and glory.The Red Beach Sanctuary once housed the world's most advanced weapon tech but, in the face of natural disasters, became
                            a beacon for the pr</p>
                        <button class="btn">Action</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-blade.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex p-4 forpadding">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/amazon.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Amazon Shopping - Search, Find, Ship, and Save</h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Product Features* Customers are able to shop millions of products on any of Amazon's sites around the world from a single app*Use Alexa to help you shop—just use your voice to search for products on Amazon, track your orders, and
                            reorder your favorit</p>
                        <button class="btn">Shopping</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-amazon.png" alt="">
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex forpadding p-4">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/blade.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Badlanders <small class="text-muted">1.0</small></h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Badlanders, Welcome.Here, upon the ruins of a once-great civilization, scavengers fight for treasure and glory.The Red Beach Sanctuary once housed the world's most advanced weapon tech but, in the face of natural disasters, became
                            a beacon for the pr</p>
                        <button class="btn">Action</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-blade.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex p-4 forpadding">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/amazon.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Amazon Shopping - Search, Find, Ship, and Save</h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Product Features* Customers are able to shop millions of products on any of Amazon's sites around the world from a single app*Use Alexa to help you shop—just use your voice to search for products on Amazon, track your orders, and
                            reorder your favorit</p>
                        <button class="btn">Shopping</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-amazon.png" alt="">
                        </a>
                    </div>
                </div>
            </div>


            

            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex p-4 forpadding">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/amazon.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Amazon Shopping - Search, Find, Ship, and Save</h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Product Features* Customers are able to shop millions of products on any of Amazon's sites around the world from a single app*Use Alexa to help you shop—just use your voice to search for products on Amazon, track your orders, and
                            reorder your favorit</p>
                        <button class="btn">Shopping</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-amazon.png" alt="">
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex forpadding p-4">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/blade.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Badlanders <small class="text-muted">1.0</small></h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Badlanders, Welcome.Here, upon the ruins of a once-great civilization, scavengers fight for treasure and glory.The Red Beach Sanctuary once housed the world's most advanced weapon tech but, in the face of natural disasters, became
                            a beacon for the pr</p>
                        <button class="btn">Action</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-blade.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex p-4 forpadding">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/amazon.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Amazon Shopping - Search, Find, Ship, and Save</h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Product Features* Customers are able to shop millions of products on any of Amazon's sites around the world from a single app*Use Alexa to help you shop—just use your voice to search for products on Amazon, track your orders, and
                            reorder your favorit</p>
                        <button class="btn">Shopping</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-amazon.png" alt="">
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex forpadding p-4">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/blade.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Badlanders <small class="text-muted">1.0</small></h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Badlanders, Welcome.Here, upon the ruins of a once-great civilization, scavengers fight for treasure and glory.The Red Beach Sanctuary once housed the world's most advanced weapon tech but, in the face of natural disasters, became
                            a beacon for the pr</p>
                        <button class="btn">Action</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-blade.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex p-4 forpadding">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/amazon.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Amazon Shopping - Search, Find, Ship, and Save</h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Product Features* Customers are able to shop millions of products on any of Amazon's sites around the world from a single app*Use Alexa to help you shop—just use your voice to search for products on Amazon, track your orders, and
                            reorder your favorit</p>
                        <button class="btn">Shopping</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-amazon.png" alt="">
                        </a>
                    </div>
                </div>
            </div>


            <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex forpadding p-4">
                    <div class=" p-4">
                        <a href="#" class="foranchor">
                            <img class="forimg" src="<?php echo base_url('assets/images'); ?>/blade.png" alt="" width="150">
                        </a>
                        <label class="startss mt-3">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="ml-3">9.0</span>
                        </label>
                    </div>
                    <div class="forcontent formargin2 p-4 mr-5">
                        <a href="#" class="foranchor">
                            <h1 class="for-h3 foraligncenter">Badlanders <small class="text-muted">1.0</small></h1>
                        </a>
                        <p>2020-07-02</p>
                        <p class="for15 forjustify">Badlanders, Welcome.Here, upon the ruins of a once-great civilization, scavengers fight for treasure and glory.The Red Beach Sanctuary once housed the world's most advanced weapon tech but, in the face of natural disasters, became
                            a beacon for the pr</p>
                        <button class="btn">Action</button>
                    </div>
                    <div class="fondimg">
                        <a href="#">
                            <img class="forimg2" src="<?php echo base_url('assets/images'); ?>/banner-blade.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div> -->







        </div>
        <div class="col-xl-12  mb-4">
            <nav aria-label="Page navigation  example" class="mb-4">
                <ul class="pagination justify-content-center">
                    <li id="previous-page" class="page-item "><a class="page-link" href="javascript:void(0)" aria-label=Previous><span aria-hidden=true>&laquo;</span> Previous</a></li>
                </ul>
            </nav>
        </div>
    </div>
    </div>


<?= $this->endSection() ?>