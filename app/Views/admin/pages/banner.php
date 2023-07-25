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
          
          
          <div class="">
          <h4 class="card-title">SLIDER</h4>
            <form class="forms-sample" method="post" action="<?= base_url(); ?>/admin/banner_data"   enctype="multipart/form-data">

            <div class="form-group">
              <label for="sitetitle">Heading</label>
              <input type="text" id="sitetitle" name="heading"  required class="form-control" placeholder="Enter Heading"  value=""> 
            </div>

            <div class="form-group ">
              <label>Location <span class="text_orange">*</span></label>
              <div class="form-radio">
                <label class="form-check-label">
                  <input type="radio" tabindex="10" required class="form-check-input" name="location" id="membershipRadios1" value="home"> Home Page <i class="input-helper"></i></label>
              </div>
              <div class="form-radio">
                <label class="form-check-label">
                  <input type="radio"  tabindex="11" required class="form-check-input" name="location" id="membershipRadios2" value="pre-register" > Pre-register Page <i class="input-helper"></i></label>
              </div>
            </div>
            
            <div class="form-group">
              <label>Slide Image</label>
              <input type="file"  name="image" accept='image/*' class="file-upload-default">
              <div class="input-group col-xs-12">
              <!-- <div class="img-leftside"> <img src="<?php echo base_url(); ?>/assets/uploads/settingimges/" class="img-thumbnail"></div> -->
                <input type="text" name=""  class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-info" type="button">Upload Slide Image</button>
                </span>
              </div>
            </div>
             
            <div class="form-group">
              <label for="footer_copyright">Slide Link</label>
              <input type="url" id="footer_copyright" name="link" class="form-control" placeholder="Enter Link"  value=""> 
            </div>
             
            <div class="form-group"></div>
            <div class="form-group">
              <button type="submit" class="btn btn-success mr-2">ADD SLIDER</button>  
            </div> 
          </form>
          </div>


        </div>
      </div>
    </div>
</div>
<div class="row catemain">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">ALL SLIDES</h4>
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th> Heading</th>
                  <th> Location</th>
                  <th> Link</th>
                  <th> Image</th>
                  

                  <th class="text-center" width="80">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
               $count=1;
                   foreach ($data as $row) : ?>
                <tr>                           
                    <td  class="text-center"><?=$count;?></td> 
                    <td class="st_name" data-value=""><?=$row->heading?></td>
                    <td class="st_type" data-value=""><?=ucwords($row->location)?> Page</td>
                    <td class="st_type" data-value=""><?=$row->link?></td> 
                    <td class="" data-value="">
                    
                      <a href="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>"><img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>"  width = 100 height = 100>
                      </a>
                    </td> 

                     
                    
                    <td  class="text-center">
                      <a href="edit_banner/<?= $row->id; ?>"><i data-toggle="tooltip" data-placement="top" title="Edit Category" class="fa fa-edit c m-2 editt" data-id="" ></i></a>
                              |
                      <a href="deletebanner/<?= $row->id; ?>"> <i data-toggle="tooltip" data-placement="top" title="Delete Category" class="fa fa-trash deltbr m-2 delt" data-id=""></i></a>
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