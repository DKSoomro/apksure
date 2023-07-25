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
                  <?php foreach($data['data2'] as $row) :?>
                        
                    <div class="form-group">
                        <label for="author">Package Name </label>
                        <input type="text" disabled class="form-control " value ="<?=$row->package_name;?>" name="author" placeholder="Enter Author" tabindex="3"> </div>
                      <div class="form-group">
                        <label for="author">Name </label>
                        <input type="text" disabled class="form-control " value ="<?=$row->name;?>" name="author" placeholder="Enter Author" tabindex="3"> </div>
                      <div class="form-group">
                        <label for="author_link">Email </label>
                        <input type="url"  disabled class="form-control " value ="<?=$row->email;?>" name="author_link" placeholder="Enter Author Link" tabindex="3">
                      </div>

                        <div class="form-group ">
                          <label for="description">What's New </label> 
                          <textarea placeholder="Enter Description" disabled tabindex="9" class="form-control" name="description" rows="11"><?=$row->whatsnew;?></textarea>
                        </div>

                        <div class="form-group ">
                          <label for="description">Download the APK File </label> 
                          <a href="<?=base_url()?>/assets/uploads/appsimages/<?=$row->file;?>" target="_blank">DOWNLOAD</a>
                          
                        </div>

                        
                        

                     <div class="form-group row fulltext">
                      <!-- <button type="submit" class="btn btn-success mr-2">Update</button> -->
          				<a href="<?= base_url('admin/submit-apk'); ?>" class="btn btn-light"> BACK </a>
                  <?php endforeach; ?>
                          

                    </div>

                  </div>
                </div>
              </div>
            </div>

