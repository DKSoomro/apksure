<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Game on Sales</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="single-main gamsal">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 forpadding">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-4 forpadding">
                            <div class="rygames">
                                <div class="row">
                                    
                                    <?php foreach($data['data2'] as $row) :?>
                                        <div class="col-xl-6 col-lg-4 col-md-4 col-12 mt-3 mb-3 forpadding">
                                            <a href="<?=base_url()?>/store/<?=$row->app_name?>" class="rybx d-flex">
                                                <div class="ryimg formarginright forpaddingleft">
                                                    <img src="<?=$row->image?>" style=" width: 50px;" height ="50">
                                                </div>
                                                <div class="rycont">
                                                    <h4 class="for-h3"><?=$row->title?></h4>
                                                    <p><label class="startss">
                                                        <span class="fa fa-star checked"></span>
                                                        <span><?=round($row->rating,1)?></span>
                                                    </label><br>
                                                    <?=$row->author?>
                                                    </p>
                                                </div>
                                                <div class="ryconr">
                                                    <p>$<?=$row->price?> </p>
                                                    <!-- <del>$<?=$row->price-2?></del>
                                                    <button class="btn for-btn">-34%</button> -->
                                                </div>
                                            </a>
                                        </div>
                                    <?php endforeach ;?>
                                    



                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 sidbr">
                    <div class="ulsocl">
                        <li><a href="#"><i class="fab fa-facebook"></i>Facebook </a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i>Twitter</a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i>YouTube</a></li>
                    </div>
                    <div class="disv mt-4 mb-4">
                        <!-- <h2>Discover</h2> -->
                        <ul>
                            <li>Now Free Apps</li>
                            <li><a href="<?=base_url()?>/games">More >></a></li>
                        </ul>
                        
                        <?php foreach($data['data3'] as $row):?>
                            <div class="gmesct">
                                <div class="gmimg">
                                    <img src="<?=$row->image?>" style=" width: 50px;" height ="50">
                                </div>
                                <div class="gmcon">
                                    <h4><?=$row->title;?></h4>
                                    <label class="startss">
                                        <span class="fa fa-star checked"></span>
                                        <span><?=round($row->rating,1)?></span>
                                    </label>
                                    <p class="cate"><span><?=$row->cost?></span></p>
                                </div>
                            </div>
                        <?php endforeach;?>
                        

                    </div>

                </div>
            </div>
        </div>
    </section>



<?= $this->endSection() ?>