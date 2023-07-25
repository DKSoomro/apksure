<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url()?>/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
                                <h2 class="for-h3">Contact Us</h2>
                                <p class="for16 mt-3">If you want to Contact APKSure administrator, Send your suggestions, Report website bugs, or Submit your apps, Please contact us using the following way:</p>
                                <ul class="forpadding2">
                                    <li class="for16 forcircle">Send Email: <b>support@apksure.com</b></li>
                                    <li class="for16 forcircle">Feedback</li>
                                </ul>
                                <div class="border col-xl-12 col-lg-12 col-md-12 col-12  p-4 ">
                                    <form class="form forpadding for16" method="post" action="<?=base_url()?>/home/ContactusSubmit">
                                        <div class="form-group">
                                            <label class="forlabel">Your name *</label>
                                            <input type="text" class="form-control" required name="name" placeholder="Your name" value="" data-required="">

                                        </div>
                                        <div class="form-group">
                                            <label class="forlabel">Your email *</label>
                                            <input type="email" class="form-control" required name="email" placeholder="Your email" value="" data-required="" data-pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$">
                                        </div>
                                        <div class="form-group">
                                            <label class="forlabel">Subject *</label>
                                            <input type="text" name="subject" class="form-control" required value="" placeholder="Subject" data-required="">
                                        </div>
                                        <div class="form-group">
                                            <label class="forlabel">Reason for contact *</label>
                                        </div>

                                        <div class=" form-group ml-2">
                                            <div class="form-check-inline"><label class="form-check-label"><input class="form-check-input"  type="radio" name="reason" required value="feedback" checked="" data-required="">Comments and feedback</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" required  name="reason" value="report_problem" data-required="">Report a problem</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" name="reason" class="form-check-input" required  value="dmca_takedown_request" data-required="">DMCA takedown request</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" name="reason" class="form-check-input" required value="developer" data-required="">Developer Support and Feedback</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio"  name="reason" class="form-check-input" required value="other" data-required="">Others</label></div>
                                        </div>
                                        <div class="form-group">
                                            <label class="forlabel">Your message </label>
                                            <textarea name="message" rows="5" class="form-control" required placeholder="Questions or Comments" data-required=""></textarea>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="forlabel">Verification code *</label> <br>
                                            <input style="width: 180px" type="text " name="captcha " placeholder="Verification code" data-required=" ">
                                            <a id="captcha_a " title="Chang Code " href="javascript:void(0) " data-src="https://a.apkpure.com/captcha "><img style="height: 32px; border: 1px solid #ccc; margin-top: -3px; border-radius: 3px; " id="captcha_img
                                            " src="https://a.apkpure.com/captcha?0.30912273505786025 "></a>
                                        </div> -->
                                        <div class="form-group " style="display: none "></div>
                                        <button type="submit" class="form-control mt-4 py-2 btn">Send</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-12 col-12 forpadding sidbr ">
                    <div class="ulsocl ">
                        <li><a href="# "><i class="fab fa-facebook "></i>Facebook </a></li>
                        <li><a href="# "><i class="fab fa-twitter " aria-hidden="true "></i>Twitter</a></li>
                        <li><a href="# "><i class="fab fa-youtube "></i>YouTube</a></li>
                    </div>
                    <div class="disv col-xl-12  col-lg-12 col-md-5 mt-4 mb-4">
                            <h2>Popular Games In Last 24 Hours</h2>
                            <ul>
                                <li>Store</li>
                                <li><a href="<?=base_url()?>/games">More>></a></li>
                            </ul>
                            <?php foreach($data['data2'] as $row):?>
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
    </section>

<?= $this->endSection() ?>
