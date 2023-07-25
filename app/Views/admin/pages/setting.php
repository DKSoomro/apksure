<div class="row">
    <div class="col-md-12 grid-margin stretch-card formcss">
      <div class="card">
        <div class="card-body">
        <?php if (!empty(session()->getFlashdata('Error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                      <?=session()->getFlashdata('Error');?>
                      </div>
                  <?php endif;?>
                  <?php if (!empty(session()->getFlashdata('Success'))) : ?>
                    <div class="alert alert-success" role="alert">
                      <?=session()->getFlashdata('Success');?>
                      </div>
                  <?php endif;?>
          <h4 class="card-title">Site Information</h4>
          <form class="forms-sample" method="post" action="<?= base_url(); ?>/admin/update_setting"   enctype="multipart/form-data">
          <?php foreach($data as $row):?>
            
          
          <!-- <input type="hidden" name="current_id" value="">
          <input type="hidden" name="logoimg_define" value="">
          <input type="hidden" name="favicon_define" value=""> -->
          <div class="form-group">
              <label for="sitetitle">Website Title</label>
              <input type="text" id="sitetitle" name="title"  required class="form-control" placeholder="Enter Website Title"  value="<?=$row->title?>"> 
            </div> 
            <!-- <div class="form-group">
              <label for="footer_addres">Footer Address</label>
              <input type="text" id="footer_addres" name="footer_addres"  required class="form-control" placeholder="433 N Camden Ave Suite 600 BH CA 90210"  value=""> 
            </div> -->
             <!-- <div class="form-group">
              <label for="email">Email</label>
              <input type="text" id="email" name="email"  required class="form-control" placeholder="Enter email address"  value=""> 
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="number" id="phone" name="phone"  required class="form-control" placeholder="Phone" value="" > 
            </div> -->
            <div class="form-group">
                <label>Website Logo</label>
                <?php if(!empty($row->logo)) :?>
                  <input type="hidden" value = "<?=$row->logo;?>" name = "logo2">
                <?php endif;?>
                <input type="file" name="logo" accept='image/*' class="file-upload-default">
                <div class="input-group col-xs-12">
                <div class="img-leftside"> <img src="<?= base_url()?>/assets/uploads/settingimges/<?=$row->logo;?>" class="img-thumbnail"></div>
                  <input type="text" name=""  class="form-control file-upload-info" disabled="" placeholder="<?=$row->logo;?>">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-info" type="button">Upload Logo</button>
                  </span>
                </div>
             </div>
            
            <div class="form-group">
              <label for="footer_copyright">Footer Copyright</label>
              <input type="text" id="footer_copyright" name="footer" required class="form-control" placeholder="Copyright © 2020 APKSure All rights reserved."  value="<?=$row->footer?>"> 
            </div>

             <div class="form-group">
                <label>Website Favicon</label>
                <?php if(!empty($row->favicon)) :?>
                  <input type="hidden" value = "<?=$row->favicon;?>" name = "favicon2">
                <?php endif;?>
                <input type="file" name="favicon" accept='image/*' class="file-upload-default">
                <div class="input-group col-xs-12">
                <div class="img-leftside"> <img src="<?= base_url()?>/assets/uploads/settingimges/<?=$row->favicon;?>" class="img-thumbnail"></div>
                  <input type="text" name=""  class="form-control file-upload-info" disabled="" placeholder="<?=$row->favicon;?>">
                  <span class="input-group-append">
                    <button class="file-upload-browse btn btn-info" type="button">Upload Favicon</button>
                  </span>
                </div>
             </div>

            <div class="form-group">
              <label for="footer_copyright">Facebook</label>
              <input type="text" id="footer_copyright" name="facebook" class="form-control" placeholder="https://www.facebook.com/Your-Page_Name"  value="<?=$row->facebook?>"> 
            </div>

            <div class="form-group">
              <label for="footer_copyright">Twitter</label>
              <input type="text" id="footer_copyright" name="twitter" class="form-control" placeholder="https://twitter.com/Your-Username"  value="<?=$row->twitter?>"> 
            </div>

            <div class="form-group">
              <label for="footer_copyright">YouTube</label>
              <input type="text" id="footer_copyright" name="youtube" class="form-control" placeholder="https://www.youtube.com/Your-Username"  value="<?=$row->youtube?>"> 
            </div>
             <!-- <div class="form-group fulltext">
              <label for="map_iframe">Google Map Iframe</label>
              <textarea class="form-control" id="map_iframe"  name="map_iframe" rows="2" placeholder="433 N Camden Ave Suite 600 BH CA 90210"></textarea>
            </div>
             <div class="form-group fulltext">
              <label for="map_iframe">UTM Tagging (All product allow)</label>
              <textarea class="form-control" id="map_iframe"  name="utm_tag" rows="2" placeholder="utm_source=cpc&utm_medium=digi"> </textarea>
            </div> -->
            <?php endforeach;?>
            <div class="form-group"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-success mr-2">UPDATE</button>  
              </div> 
          </form>
        </div>
      </div>
    </div>

</div>
