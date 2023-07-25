
<footer>
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-12 col-sm-4 col-md-12 col-12 forpaddingleft">
                    <div class="footr-logo mb-2">
                        <img src="<?= base_url()?>/assets/uploads/settingimges/<?=get_setting_db('logo')?>" >
                    </div>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                        specimen book. </p>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-4 col-md-3 col-12 forpaddingleft pl-5">
                    <div class="qlnks">
                        <h3 class="col-titl mb-2">Solutions</h3>
                        <ul class="qk-lnks">
                            <li><a href="#">Mobile Version</a></li>
                            <li><a href="#">APKSure For Android</a></li>
                            <li><a href="#">APK Install</a></li>
                            <li><a href="#">APK Downloader (Region free)</a></li>
                            <li><a href="#">APK Signature Verification</a></li>
                        </ul>
                    </div>
                    
                    <div class="qlnks mt-3">
                        <h3 class="col-titl mb-2">ADDED PAGES</h3>
                        <ul class="qk-lnks">
                        <?php 
                        $db = \Config\Database::connect();
                        $query = $db->query('SELECT * FROM pages where deleted =  "0"');
                        $results = $query->getResult();
                        foreach($results as $result) : ?>
                            <li><a href="<?php echo base_url();?>/pages/<?php echo $result->slug; ?>"><?php echo $result->title; ?></a></li>
                        <?php endforeach; ?>      
                        </ul>
                    </div>
                    <div class="qlnks mt-3">
                        <h3 class="col-titl mb-2">CUSTOMER SERVICE</h3>
                        <ul class="qk-lnks">

                            <li><a href="<?php echo base_url();?>/submit-apk">Submit APK</a></li>
                            <li><a href="#">Developer Console</a></li>
                            <li><a href="<?php echo base_url();?>/contact-us">Contact Us</a></li>
                            <li><a href="<?php echo base_url();?>/report-abuse">Report abuse</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-4 col-md-3 col-12 forpaddingleft">
                    <div class="qlnks">
                        <h3 class="col-titl mb-2">TOP ANDROID APPS</h3>
                        <ul class="qk-lnks">
                            <li><a href="#">WhatsApp APK</a></li>
                            <li><a href="#">Messenger APK</a></li>
                            <li><a href="#">Google Play Store APK</a></li>
                            <li><a href="#">Instagram APK</a></li>
                            <li><a href="#">YouTube APK</a></li>
                            <li><a href="#">Facebook APK</a></li>
                            <li><a href="#">Facebook Lite APK</a></li>
                            <li><a href="#">Snapchat APK</a></li>
                            <li><a href="#">Google Chrome: Fast & Secure APK</a></li>
                            <li><a href="#">KineMaster APK</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-4  col-md-3 col-12 forpaddingleft">
                    <div class="qlnks mb-2">
                        <h3 class="col-titl">TOP ANDROID GAMES</h3>
                        <ul class="qk-lnks">
                            <li><a href="#">PUBG MOBILE APK</a></li>
                            <li><a href="#">Garena Free Fire: 3volution APK</a></li>
                            <li><a href="#">PUBG MOBILE LITE APK</a></li>
                            <li><a href="#">PUBG MOBILE KR APK</a></li>
                            <li><a href="#">Call of Duty®: Mobile APK</a></li>
                            <li><a href="#">Subway Surfers APK</a></li>
                            <li><a href="#">Pokémon Masters EX APK</a></li>
                            <li><a href="#">PUBG MOBILE APK</a></li>
                            <li><a href="#">Minecraft Trial APK</a></li>
                            <li><a href="#">Roblox APK</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-sm-4 col-md-3 col-12 forpaddingleft">
                    <div class="qlnks">
                        <h3 class="col-titl mb-2">Top Developers & Partners</h3>
                        <ul class="qk-lnks">
                            <li><a href="#">Gameloft</a></li>
                            <li><a href="#">Supercell</a></li>
                            <li><a href="#">NEXON</a></li>
                            <li><a href="#">BANDAI Inc.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="copyryt">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                        <ul class="socl-lnks d-flex">
                            <li><a style="color: #3b5998;" href="<?=get_setting_db('facebook')?>">Facebook</a></li>
                            <li><a style="color: #00acee;" href="<?=get_setting_db('twitter')?>?>">Twitter</a></li>
                            <li><a style="color: #ff0000;" href="<?=get_setting_db('youtube')?>?>">YouTube</a></li>
                        </ul>
                    </div>
                    <div class="col-xl-6 col-sm-6 col-md-6 col-lg-6">
                        <p class="text-right m-0 for16"><?=get_setting_db('footer')?></p>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('assets/js'); ?>/pagination.js"></script>
        <script src="<?php echo base_url('assets/owl/owl.carousel.js'); ?>"></script>
        <script src="<?php echo base_url('assets/owl/owl.autoplay.js'); ?>"></script>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                // For Social Media Icon Before in Ipad or Mobile

                if ($(window).width() <= 800) {
                    jQuery('.ulsocl').insertAfter(jQuery('.breadcrumb'));
                } else {
                    //
                }

                // For Slider
                var owl = $('#owl-example');
                owl.owlCarousel({
                    items: 1,
                    loop: true,
                    dots: true,
                    margin: 0,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true
                });

                

                var owl = $('#owl-example2');
                owl.owlCarousel({
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 3,
                            loop: true,
                            dots: false,
                            margin: 30,
                            autoplay: true,
                            autoplayTimeout: 2000,
                            autoplayHoverPause: true,
                        },
                        1000: {
                            items: 4,
                            loop: true,
                            dots: false,
                            margin: 30,
                            autoplay: true,
                            autoplayTimeout: 2000,
                            autoplayHoverPause: true,
                        }
                    }

                });

                var owl = $('#owl-example3');
                owl.owlCarousel({
                    responsiveClass: true,
                    autoWidth:true,
                    center:true,
                    responsive: {
                        0: {
                            items: 1,
                            nav: true
                        },
                        600: {
                            items: 2,
                            loop: true,
                            dots: false,
                            margin: 30,
                            autoplay: true,
                            autoplayTimeout: 2000,
                            autoplayHoverPause: true,
                        },
                        1000: {
                            items: 2,
                            loop: true,
                            dots: false,
                            margin: 5,
                            autoplay: true,
                            autoplayTimeout: 2000,
                            autoplayHoverPause: true,
                            nav: true
                        }
                    }

                });

            });
        </script>

<script>  
 $(document).ready(function(){  
    $('.search-button').click(function(){
  $(this).parent().toggleClass('open');
});
    
      $(document).on('click', '#btn_more', function(){  
          $offset=0;
          $offsets=parseInt($offset)+12;
          console.log($offsets)
        //   $(this).data('vid',)
        //    var offset = $(this).data("vid");  
        //     t=$(this);
        //    $('#btn_more').html("Loading...");  
        //    $.ajax({  
        //         url:"<?php echo base_url(); ?>/home/read_more",  
        //         method:"POST",  
        //         data:{offset:offset},  
        //         dataType:"html",  
        //         success:function(data)  
        //         {  
        //             objdata=jQuery.parseJSON(data)
                    
        //              if(data != '')  
        //              {  
        //                 //   $('#remove_row').remove();  
        //                 tolal =objdata.offset+12
        //                 $('#load_data_table').append(objdata.data);  
        //                   t.data('vid',tolal)
        //              }  
        //              else  
        //              {  
        //                   $('#btn_more').html("No Data");  
        //              }  
        //         }  
        //    });  
      });  

    

      $(document).on('click', '#btn_more2', function(){  
           var last_id = $(this).data("vid");  
           $('#btn_more2').html("Loading...");  
           $.ajax({  
                url:"<?php echo base_url(); ?>/home/read_more2",  
                method:"POST",  
                data:{last_id:last_id},  
                dataType:"text",  
                success:function(data)  
                {  
                     if(data != '')  
                     {  
                          $('#remove_row2').remove();  
                          $('#load_data_table2').append(data);  
                     }  
                     else  
                     {  
                          $('#btn_more2').html("No Data");  
                     }  
                }  
           });  
      });  
 });  
 </script>
    </footer>
</body>

</html>