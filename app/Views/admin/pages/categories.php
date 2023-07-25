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
          <h4 class="card-title">Add New Category</h4>
          <form class="forms-sample catget simplevalidate" method="post" action="<?= base_url(); ?>/admin/addcategories" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputName1">Category Name <span class="text_orange">*</span></label>
              <input type="text" name="cat_name" required class="form-control" id="getinput" placeholder="Enter Category Name" autofocus tabindex="1">
            </div>

            <div class="form-group ">
              <label>Category Type <span class="text_orange">*</span></label>
              <div class="form-radio">
                <label class="form-check-label">
                  <input type="radio" tabindex="10" required class="form-check-input" name="type" id="membershipRadios1" value ="App"> Application <i class="input-helper"></i></label>
              </div>
              <div class="form-radio">
                <label class="form-check-label">
                  <input type="radio"  tabindex="11" required class="form-check-input" name="type" id="membershipRadios2" value="Game" > Game <i class="input-helper"></i></label>
              </div>
            </div>

            <div class="form-group">
              <label>Category Image <span class="text_orange">*</span></label>
              
              <input type="file"  required name="cat_image"  class="file-upload-default" accept='image/*'>
              <div class="input-group col-xs-12">
              
                <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                </span>
              </div>
            </div>
            
          
            <button type="submit" class="btn btn-success mr-2 shadow" tabindex="4">ADD CATEGORY</button>
          </form>
        </div>
      </div>
    </div>
</div>
<div class="row catemain">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">ALL CATEGORIES</h4>
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Category Name</th>
                  <th>Category Type</th>
                  <th>Category Image</th>
                  <th class="text-center" width="80">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
               $count=1;
                   foreach ($data as $row) : ?>
                <tr>                           
                    <td  class="text-center"><?=$count;?></td> 
                    <td class="st_name" data-value=""><?=$row->cat_name;?></td> 
                    <td class="st_type" data-value=""><?=$row->type;?></td> 
                    <td class="" data-value="">
                    <?php if($row->cat_image != NULL) { ?>
                      <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->cat_image;?>"  width = 100 height = 100>
                    <?php }else { ?>
                      <img src="<?= base_url()?>/assets/images/no-image.jpg"  width = 100 height = 100>
                    <?php }?>
                    </td> 
                    
                    <td  class="text-center">
                      <a href="editcategory/<?=$row->id; ?>"><i data-toggle="tooltip" data-placement="top" title="Edit Category" class="fa fa-edit c m-2 editt" data-id="" ></i></a>
                              |
                      <a href="deletecategory/<?=$row->id; ?>"> <i data-toggle="tooltip" data-placement="top" title="Delete Category" class="fa fa-trash deltbr m-2 delt" data-id=""></i></a>
                    </td>
                </tr>
                
                <?php $count++; endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>  