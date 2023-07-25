<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
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
          <h4 class="card-title">HOMEPAGE</h4>
          <form class="forms-sample catget simplevalidate" method="post" action="<?= base_url(); ?>/admin/addHomepage" enctype="multipart/form-data" >
   
          

              <!--  -->
              <div class="form-group App box">
                <label>APPS 1 <span class="text_orange">*</span></label>
                  <?php if(!empty($data['data3']->app_image_1)) :?>
                    <input type="hidden" value = "<?=$data['data3']->app_image_1;?>" name = "image2">
                  <?php endif;?>
                <select class="js-example-basic-single"  style="width:100%"  name="app_id_1"  tabindex="4">
               
                  <?php
                    foreach ($data['data2'] as $result) : ?>
                      <option value="<?= $result->id; ?>" <?=($data['data3']->app_id_1==$result->id?'selected="true"':'');?> ><?=  $result->title; ?></option>
                    <?php endforeach; ?>  
                </select>
              </div>

              <div class="form-group">
              <label>Collection Image <span class="text_orange">*</span></label>
              
              <input type="file"   name="app_image_1"  class="file-upload-default" accept='image/*'>
              <div class="input-group col-xs-12">
              <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$data['data3']->app_image_1?>" alt=""  value ="<?=$data['data3']->app_image_1?>" width = 40 height = 42>
                <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                </span>
              </div>
            </div>

              <div class="form-group App box">
                <label>APPS 2 <span class="text_orange">*</span></label>
                <?php if(!empty($data['data3']->app_image_2)) :?>
                    <input type="hidden" value = "<?=$data['data3']->app_image_2;?>" name = "image2">
                  <?php endif;?>
                <select class="js-example-basic-single"  style="width:100%"  name="app_id_2"  tabindex="4">
              
                  <?php
                    foreach ($data['data2'] as $result) : ?>
                      <option value="<?= $result->id; ?>" <?=($data['data3']->app_id_2==$result->id?'selected="true"':'');?>><?=  $result->title; ?></option>
                    <?php endforeach; ?>  
                </select>
              </div>

              <div class="form-group">
              <label>Category Image <span class="text_orange">*</span></label>
              
              <input type="file"   name="app_image_2"  class="file-upload-default" accept='image/*'>
              <div class="input-group col-xs-12">
              <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$data['data3']->app_image_2?>" alt=""  value ="<?=$data['data3']->app_image_2?>" width = 40 height = 42>
                <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                </span>
              </div>
            </div>

              <div class="form-group App box">
                <label>APPS 3 <span class="text_orange">*</span></label>
                <?php if(!empty($data['data3']->app_image_3)) :?>
                    <input type="hidden" value = "<?=$data['data3']->app_image_3;?>" name = "image2">
                  <?php endif;?>
                <select class="js-example-basic-single"  style="width:100%"  name="app_id_3"  tabindex="4">
               
                  <?php
                    foreach ($data['data2'] as $result) : ?>
                      <option value="<?= $result->id; ?>" <?=($data['data3']->app_id_3==$result->id?'selected="true"':'');?>><?=  $result->title; ?></option>
                    <?php endforeach; ?>  
                </select>
              </div>

   

            <div class="form-group">
              <label>Category Image <span class="text_orange">*</span></label>
              
              <input type="file"   name="app_image_3"  class="file-upload-default" accept='image/*'>
              <div class="input-group col-xs-12">
              <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$data['data3']->app_image_3?>" alt=""  value ="<?=$data['data3']->app_image_3?>" width = 40 height = 42>
              
                <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                </span>
              </div>
            </div>
            
            
          
            <button type="submit" class="btn btn-success mr-2 shadow" tabindex="4">ADD GAMES</button>
          </form>
        </div>
      </div>
    </div>
</div>
