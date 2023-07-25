<div class="row" >
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

                   <form class="forms-sample  addpro add_products_form"  method="post" action="<?= base_url(); ?>/admin/editCategorydata" enctype="multipart/form-data">
                      <?php foreach($data as $row) :?>
                   <input type="hidden" value = "<?=$row->id?>"  name = "id">

                      <div class="form-group">
                        <label for="title">Name <span class="text_orange">*</span></label>
                        <input type="text" class="form-control" required name="cat_name" value ="<?=$row->cat_name;?>" placeholder="Enter Name" autofocus  tabindex="1">
                      </div>
                      
                      <input type="hidden" name = "id" value='<?=$row->id?>'>
                      <?php $type = $row->type;?>
                        <div class="form-group row">
                          <label>Type <span class="text_orange">*</span></label>
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio" tabindex="10" <?php if($type == 'App'){echo 'checked';}?> required class="form-check-input" name="type" id="membershipRadios1" value ="App"> Application <i class="input-helper"></i></label>
                          </div>
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio"  tabindex="11" <?php if($type == 'Game'){echo 'checked';}?> required class="form-check-input" name="type" id="membershipRadios2" value="Game" > Game <i class="input-helper"></i></label>
                          </div>
                        </div>
                        
                        
                      <div class="form-group">
                        <label>Image <span class="text_orange">*</span></label>
                        <?php if(!empty($row->cat_image)) :?>
                          <input type="hidden" value = "<?=$row->cat_image;?>" name = "image2">
                        <?php endif;?>
                        <input type="file" name="cat_image" class="file-upload-default" accept='image/*'>
                        <div class="input-group col-xs-12">
                        <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->cat_image;?>" alt=""  value ="<?=$row->cat_image;?>" width = 40 height = 42>
                          <input type="text"  value ="<?=$row->cat_image;?>" class="form-control file-upload-info"  disabled="" placeholder="Upload Category Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                          </span>
                        </div>
                      </div>
                      
                      
                        
                        
                        

                     <div class="form-group row fulltext">
                      <button type="submit" class="btn btn-success mr-2">Update</button>
          				<a href="<?= base_url('admin/products'); ?>" class="btn btn-light">Cancel</a>
                  <?php endforeach; ?>
                          

                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>