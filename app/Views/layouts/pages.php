<?= $this->include('Template/header') ?>

<section class="breadcrumbs mt-3 mb-2">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </nav>
    </div>
</section>
<section class="single-main">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-12 forpadding">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-4 forpadding">
                        <div class="rygames">
                            <!-- <div class="about-img">
                                <img src="<?php echo base_url('assets/images'); ?>/site-banner.jpeg" alt="" style="width: 100%;">
                            </div> -->
<?= $this->renderSection('content') ?>


                        </div>


                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-12 sidbr forpadding">
                <div class="ulsocl ">
                    <li><a href="# "><i class="fab fa-facebook "></i>Facebook </a></li>
                    <li><a href="# "><i class="fab fa-twitter " aria-hidden="true "></i>Twitter</a></li>
                    <li><a href="# "><i class="fab fa-youtube "></i>YouTube</a></li>
                </div>
                <div class="disv mt-4 mb-4 ">
                    <!-- <h2>Discover</h2> -->
                    <ul>
                        <li>Most Popular In Today</li>
                        <li><a href="# ">More >></a></li>
                    </ul>
                    <div class="gmesct ">
                        <div class="gmimg ">
                            <img src="<?php echo base_url('assets/images'); ?>/gmimg2.png ">
                        </div>
                        <div class="gmcon ">
                            <h4>Deep 6 - Awakening</h4>
                            <p>Role Playing</p>
                            <p class="cate "><span>Free </span> <del>$1.49</del></p>
                        </div>

                    </div>
                    <div class="gmesct ">
                        <div class="gmimg ">
                            <img src="<?php echo base_url('assets/images'); ?>/img-single.png ">
                        </div>
                        <div class="gmcon ">
                            <h4>Wenpo - Icon Pack</h4>
                            <p>Personalization</p>
                            <p class="cate "><span>Free </span> <del>$0.99</del></p>
                        </div>

                    </div>

                    <div class="gmesct ">
                        <div class="gmimg ">
                            <img src="<?php echo base_url('assets/images'); ?>/img-single.png ">
                        </div>
                        <div class="gmcon ">
                            <h4>Wenpo - Icon Pack</h4>
                            <p>Personalization</p>
                            <p class="cate "><span>Free </span> <del>$0.99</del></p>
                        </div>

                    </div>



                    <div class="gmesct ">
                        <div class="gmimg ">
                            <img src="<?php echo base_url('assets/images'); ?>/gmimg.png ">
                        </div>
                        <div class="gmcon ">
                            <h4>Hills Legend: Action-horror</h4>
                            <p>Action</p>
                            <p class="cate "><span>Free </span> <del>$1.49</del></p>
                        </div>

                    </div>

                    <div class="gmesct ">
                        <div class="gmimg ">
                            <img src="<?php echo base_url('assets/images'); ?>/gmimg2.png ">
                        </div>
                        <div class="gmcon ">
                            <h4>Deep 6 - Awakening</h4>
                            <p>Role Playing</p>
                            <p class="cate "><span>Free </span> <del>$1.49</del></p>
                        </div>

                    </div>
                    <div class="gmesct ">
                        <div class="gmimg ">
                            <img src="<?php echo base_url('assets/images'); ?>/img-single.png ">
                        </div>
                        <div class="gmcon ">
                            <h4>Wenpo - Icon Pack</h4>
                            <p>Personalization</p>
                            <p class="cate "><span>Free </span> <del>$0.99</del></p>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
</section>
<?= $this->include('Template/footer') ?>