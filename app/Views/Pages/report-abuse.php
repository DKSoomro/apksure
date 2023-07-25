<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>


    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php base_url();?>/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Report Abuse</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="single-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12 forpadding">
                    <div class="row ">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-4 forpadding">
                            <div class="rygames  ">
                                <h3 class="for-h3">Submit a Report</h3>

                                <div class="border  p-4 ">
                                    <form class="form for16" method="post" action="<?=base_url()?>/home/ReportabuseSubmit">
                                        <div class="form-group">

                                            <label class="forlabel">URL of inappropriate content or apps *</label>
                                            <input type="url" class="form-control" required name="url" data-required="">
                                            

                                        </div>
                                        <div class="form-group">
                                            <label class="forlabel">Your name *</label>
                                            <input type="text" name="name"  required class="form-control" placeholder="Your name" value="" data-required="">

                                        </div>
                                        <div class="form-group">
                                            <label class="forlabel">Your email *</label>
                                            <input type="email" name="email" required class="form-control" placeholder="Your email" value="" data-required="" data-pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$">
                                        </div>

                                        <div class="form-group">
                                            <label class="forlabel">Reason for reporting: *</label>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="reason" value="Pornographic content" checked="" required="">Pornographic content</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="reason" value="Violence or horror related content">Violence or horror related content</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="reason" value="Hateful or abusive content">Hateful or abusive content</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="reason" value="Illegal prescription or other drugs related content">Illegal prescription or other drugs related content</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="reason" value="Virus or malware">Virus or malware</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="reason" value="IP Infringement">IP Infringement</label></div>
                                            <div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="reason" value="Fake apps or version error" data-required="">Fake apps or version error</label></div>
                                        </div>

                                        <div class="form-group">
                                            <label class="forlabel">Any other things you wanna tell us?</label>
                                            <textarea name="comments" required class="form-control" rows="5" placeholder="Questions or Comments" data-required=""></textarea>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="forlabel">Verification code *</label> <br>
                                            <input style="width: 180px" type="text" name="captcha" placeholder="Verification code" data-required="">
                                            <a id="captcha_a" title="Chang Code" href="javascript:void(0)" data-src="https://a.apkpure.com/captcha"><img style="height: 32px; border: 1px solid #ccc; margin-top: -3px; border-radius: 3px;" id="captcha_img" src="https://a.apkpure.com/captcha?0.1845382041382846"></a>
                                        </div> -->
                                        <div class="form-group" style="display: none"></div>
                                        <button class="form-control mt-4 py-2 btn" type="submit" data-load="Sending...">Send</button>
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