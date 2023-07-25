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
          <h4 class="card-title">Add New Collection</h4>
          <form class="forms-sample catget simplevalidate" method="post" action="<?= base_url(); ?>/admin/addCollection" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputName1">Collection Name <span class="text_orange">*</span></label>
              <input type="text" name="collection_name" required class="form-control" id="getinput" placeholder="Enter Collection Name" autofocus tabindex="1">
            </div>

            <div class="form-group">
              <label>Collection Image <span class="text_orange">*</span></label>
              
              <input type="file"  required name="image"  class="file-upload-default" accept='image/*'>
              <div class="input-group col-xs-12">
              
                <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                </span>
              </div>
            </div>

            
            <button type="submit" class="btn btn-success mr-2 shadow" tabindex="4">ADD COLLECTION</button>
          </form>
        </div>
      </div>
    </div>
</div>
<div class="row catemain">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">ALL COLLECTION</h4>
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th>Collection Name</th>
                  <th>Collection Image</th>
                  <th>Check</th>
                  
                  <th class="text-center" width="80">Actions</th>
                </tr>
              </thead>
              <tbody>
                <?php
               $count=1;
                   foreach ($data as $row) : ?>
                <tr>                           
                    <td  class="text-center"><?=$count;?></td> 
                    <td class="st_name" data-value=""><?=$row->collection_name;?></td> 
                    
                    
                    
                    <td class="" data-value="">
                    <?php if($row->image != NULL) { ?>
                      <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>"  width = 100 height = 100>
                    <?php }else { ?>
                      <img src="<?= base_url()?>/assets/images/no-image.jpg"  width = 100 height = 100>
                    <?php }?>
                    </td> 

                    <td class="" data-value="">
                      <input type="checkbox"  data-value="<?=$row->featured;?>" <?=$row->featured=='0'?'':'Checked="true"';?> data-id="<?=$row->id;?>" class="collection_featured">
                    </td> 
                    
                    
                    <td  class="text-center">
                      <a href="edit_collection/<?=$row->id; ?>"><i data-toggle="tooltip" data-placement="top" title="Edit Collection" class="fa fa-edit c m-2 editt" data-id="" ></i></a>
                              |
                      <a href="deletecollection/<?=$row->id; ?>"> <i data-toggle="tooltip" data-placement="top" title="Delete Collection" class="fa fa-trash deltbr m-2 delt" data-id=""></i></a>
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