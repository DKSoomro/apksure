<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">More Topics</li>
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
                        
                        <a href="<?=base_url()?>/topic/<?= $row->slug;?>"><img  class="forheight"src="<?=base_url()?>/assets/uploads/appsimages/<?php echo $row->image;?>" style="width: 100%;" height="190"></a>
                           
                    </div>

                    <div class="for2ndimg">
                        
                        <p class="for16"><br></p>
                        
                        <p class=" for16 pr-4"><?= $row->collection_name;?></p>

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
