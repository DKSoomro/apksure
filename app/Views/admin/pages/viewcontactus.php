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
                        <label for="author">Name </label>
                        <input type="text" disabled class="form-control " value ="<?=$row->name;?>" name="author" placeholder="Enter Author" tabindex="3"> </div>
                      <div class="form-group">
                        <label for="author_link">Email </label>
                        <input type="url"  disabled class="form-control " value ="<?=$row->email;?>" name="author_link" placeholder="Enter Author Link" tabindex="3">
                      </div>

                        
                        <div class="form-group">
                          <label>Subject</label>
                          <input type="price" disabled class="form-control " value ="<?=$row->subject;?>" name="price" placeholder="Enter Price" tabindex="3">
                        </div>
                        
                        
                        <div class="form-group ">
                          <label for="last_updated">Reason </label>
                          <input type="text" disabled class="form-control"  name="last_updated" placeholder="Enter Last Updated" autofocus value ="<?=$row->reason;?>" tabindex="1">
                        </div>
                        
                        

                        <div class="form-group ">
                          <label for="description">Message </label> 
                          <textarea placeholder="Enter Description" disabled tabindex="9" class="form-control" name="description" rows="11"><?=$row->message;?></textarea>
                        </div>

                        
                        

                     <div class="form-group row fulltext">
                      <!-- <button type="submit" class="btn btn-success mr-2">Update</button> -->
          				<a href="<?= base_url('admin/contact-us'); ?>" class="btn btn-light"> BACK </a>
                  <?php endforeach; ?>
                          

                    </div>

                  </div>
                </div>
              </div>
            </div>

