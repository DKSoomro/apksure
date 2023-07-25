<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Search</li>
                </ol>
            </nav>
        </div>
    </section>

    <div class="container  formargin2 forpadding">
        <div class="row formargin2" id="page">
            <?php if(sizeof($results['dataAll']) > 0) :?>
            <?php foreach($results['dataAll'] as $row) : ?>
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
                        $str = substr($row->description, 0, 270) . '...'; echo $str; } ?></p>
                        
                    </div>
                    
                </div>
            </div>
            <?php endforeach; ?>
            <?php else: ?>
                <div class="col-xl-12  col-lg-12 col-sm-2 col-md-12 col-12 mb-4 ml-4 for-col forpadding forpagination">
                <div class="d-flex forflex p-4 forpadding">
                    <div class=" p-4">
                        Nothing matched...
                    </div>
                </div>
                </div>

            <?php endif;?>


        </div>
        <div class="col-xl-12  mb-4">
            <nav aria-label="Page navigation  example " class="mb-4">
            <ul class="pagination justify-content-center">
            </ul>
            </nav>
        </div>
    </div>
    </div>


<?= $this->endSection() ?>