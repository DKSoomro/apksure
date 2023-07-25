<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Editor's Choice</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="container">
        <div class="row " id="page">

        <?php foreach($data['data2'] as $row): ?>
            <div class="col-xl-3 forhover forpagination  col-lg-9 col-sm-8  mb-5 ml-5 mr-4 p-0 ">
                <div class=" p-0">
                    <div>
                        <a href="#" class="foranchor">
         
                            <a href="<?=base_url()?>/store/<?= $row->app_name;?>"><img  class="forheight"src="<?php echo $row->cover;?>" style="width: 100%;" height="190"></a>
                                                       
                        </a>
                    </div>

                    <div class="for2ndimg">
                        <a href="#">
                        <?php
                                $word = "https:";
                                if(strpos($row->image, $word) !== false) : ?>
                                    <a href="store/<?= $row->app_name;?>" class="foranchor">
                                    <img src="<?=$row->image;?>"width="60" height="60"></a>
                                <?php else : ?>
                                    <a href="store/<?= $row->app_name;?>" class="foranchor">
                                    <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>" width="60" height="60"></a>
                                <?php endif;?>

                            <p class="for16"><b><?=$row->title?></b></p>
                        </a>
                        <label class="startss float-right mr-4 forstars">
                            <span class="fa fa-star checked"></span>
                            <span><?=round($row->rating,1)?></span>
                        </label>


                        <p class=" for16 pr-4"><?php if (strlen($row->description) > 1){
   $str = substr($row->description, 0, 70) . '...'; echo $str; } ?></p>
                    </div>

                </div>
            </div>
        <?php endforeach; ?>


            



        </div>
    </section>


    <nav aria-label="Page navigation  example" class="mb-4">
        <ul class="pagination justify-content-center">
            <li id="previous-page" class="page-item "><a class="page-link" href="javascript:void(0)" aria-label=Previous><span aria-hidden=true>&laquo;</span> Previous</a></li>
        </ul>
    </nav>

<?= $this->endSection() ?>
