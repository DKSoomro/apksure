<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>

    <section class="breadcrumbs mt-3 mb-2">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?=base_url()?>/home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Submit an APK</li>
                </ol>
            </nav>
        </div>
    </section>
    <section class="single-main sbapk">
        <div class="row2"></div>
        <div class="row3"></div>
        <div class="container formargin forpaddingleft">
            <div class="row ">
                <div class="cmt-top-bg"></div>
                <div class="col-xl-6 col-lg-8 col-md-12 col-12  forpadding">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-4 forpadding">
                            <div class="rygames">

                                <div class="border forborder p-4 forpadding">
                                    <form class="form for16 " method="post" action="<?=base_url()?>/home/SubmitapkSubmit" enctype="multipart/form-data">
                                        <center>
                                            <span style="font-size: 130px;"><i class="fas fa-arrow-circle-up"></i></span>
                                            <h3>Upload Your Application</h3>
                                        </center>
                                        <div class="form-group">
                                            <label class="forlabel">Package Name *</label>
                                            <input type="text" name="package_name" required class="form-control" placeholder="Your package name" value="" data-required="">

                                        </div>
                                        <div class="form-group">
                                            <label class="forlabel">What's new</label>
                                            <textarea name="whatsnew" required class="form-control" rows="4" placeholder="What's new" data-required=""></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="forlabel">Name</label>
                                            <input type="text" name="name" required class="form-control" placeholder="Your name" value="" data-required="">

                                        </div>
                                        <div class="form-group">
                                            <label class="forlabel">Your email *</label>
                                            <input type="email" name="email" required class="form-control" placeholder="Your email" value="" data-required="" data-pattern="^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$">
                                        </div>
                                        <div class="form-group">
                                            <label class="forlabel">Choose File *</label>
                                            <input type="file" accept=".apk" ngf-accept="'.apk'" name="file" class="form-control" value="">
                                            <label class=" forlabel" for="">* Only support .APK/XAPK file no larger than 2000Mb *</label>
                                        </div>

                                        <div class="form-group" style="display: none"></div>
                                        <button class="form-control mt-4 py-2 btn" type="submit" data-load="Sending...">UPLOAD</button>

                                    </form>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-4 col-md-12 col-12  forpadding sidbr mt-5">

                    <div class=" mt-4 mb-4 ">
                        <!-- <h2>Discover</h2> -->
                        <!-- <ul>
                            <li>Most Popular In Today</li>
                            <li>
                                <a href="# "></a>
                            </li>
                        </ul> -->
                        <h2 class="ml-5 for-white for-h3">Submit an APK</h2>
                        <p class="for16 m-5 for-white">Have an APK file for an alpha, beta, or staged rollout update? Upload .APK/XAPK file on click of button. <br> <br>Every APK file is manually reviewed by the APKPure team before being posted to the site. Your Name and What's new
                            may be shown publicly.
                            <br><br> After you've signed up for a APKPure account, you can upload apps to APKPURE using your <a href="#" class="fora"> Developer Console</a>. Manage, update and distribute apps to all APKPure users.</p>
                        <div class="d-flex mt-5">
                            <div class="gmimg ">
                                <img class="icon" src="<?php echo base_url('assets/images'); ?>/iphone-ipa.png" width="120" height="120" alt="image">
                            </div>
                            <div class="gmcon ml-3 ">
                                <h3>Upload the iOS application</h3>
                                <p class="for16"><a href="" class='foranchor'> Knowledge Base for .IPA file upload and installation relative questions </a></p>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </section>



<?= $this->endSection() ?>