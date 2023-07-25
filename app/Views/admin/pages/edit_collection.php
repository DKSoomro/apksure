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

                   <form class="forms-sample  addpro add_products_form"  method="post" action="<?= base_url(); ?>/admin/editCollectiondata" enctype="multipart/form-data">
                      <?php foreach($data as $row) :?>
                   <input type="hidden" value = "<?=$row->id?>"  name = "id">

                      <div class="form-group">
                        <label for="title">Collection Name <span class="text_orange">*</span></label>
                        <input type="text" class="form-control" required name="collection_name" value ="<?=$row->collection_name;?>" placeholder="Enter Name" autofocus  tabindex="1">
                      </div>
                     
                      <div class="form-group">
                        <label>Category Image <span class="text_orange">*</span></label>
                        <?php if(!empty($row->image)) :?>
                          <input type="hidden" value = "<?=$row->image;?>" name = "image2">
                        <?php endif;?>                        
                        <input type="file"   name="image"  class="file-upload-default" accept='image/*'>
                        <div class="input-group col-xs-12">
                        <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image?>" alt=""  value ="<?=$row->image?>" width = 40 height = 42>
                          <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Image">
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