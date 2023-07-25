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
                        <div class="mb-4" style = "text-align: center">

                        <?php if($row->image == NULL) :?>
                          <img src="<?= base_url()?>/assets/images/no-image.jpg" alt="" width = 150 height = 150>
                        <?php else :?>
                          <a href="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>"><img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>" alt="" width = 150 height = 150></a>
                        <?php endif;?>
                        
                        
                          
                      </div>
                   <form class="forms-sample  addpro add_products_form"  method="post" action="<?= base_url(); ?>/admin/editProductdata" enctype="multipart/form-data">
                      
                   <input type="hidden" value = "<?=$row->id?>"  name = "id">

                      

                      <!-- <div class="form-group"></div> -->
                   
                      <div class="form-group">
                        <label for="title">Name </label>
                        <input type="text" class="form-control" disabled required name="title" value ="<?=$row->title;?>" placeholder="Enter Name" autofocus  tabindex="1">
                      </div>
                      <?php $type = $row->type;?>
                        <div class="form-group row">
                          <label>Type </label>
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio" disabled <?php if($type == 'App'){echo 'checked';}?> tabindex="10"  class="form-check-input" name="type" id="membershipRadios1" value ="App"> Application <i class="input-helper"></i></label>
                          </div>
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio" disabled <?php if($type == 'Game'){echo 'checked';}?> tabindex="11" class="form-check-input" name="type" id="membershipRadios2" value="Game"> Game <i class="input-helper"></i></label>
                          </div>
                        </div>
                        

                        <div class="form-group">
                        <label for="url">URL </label>
                        <input type="url" disabled class="form-control " value ="<?=$row->url;?>" name="url" placeholder="Enter URL" tabindex="3">
                        </div>
                        
                        <div class="form-group App box">
                          <label>Category </label>
                          
                          <?php foreach ($data['data3'] as $resulti) : ?>
                            <input type="text" disabled class="form-control " value= '<?=  $resulti->cat_name; ?> <?=  $resulti->id; ?>'>
                          <?php endforeach; ?>
                           
                          </select>
                        </div>
                        
                      
                      
                      <div class="form-group">
                        <label for="author">Author </label>
                        <input type="text" disabled class="form-control " value ="<?=$row->author;?>" name="author" placeholder="Enter Author" tabindex="3"> </div>
                      <div class="form-group">
                        <label for="author_link">Author Link </label>
                        <input type="url"  disabled class="form-control " value ="<?=$row->author_link;?>" name="author_link" placeholder="Enter Author Link" tabindex="3">
                      </div>

                        
                        <div class="form-group">
                          <label>Price</label>
                          <input type="price" disabled class="form-control " value ="<?=$row->author_link;?>" name="price" placeholder="Enter Price" tabindex="3">
                        </div>
                        
                        <div class="form-group prod_urlss">
                          <label for="rating">Rating</label>
                          <input  type="number" min= "1" max = "5" disabled class="form-control" required name="rating" placeholder="Enter Rating" value ="<?=$row->rating;?>" tabindex="7"> 
                        </div>
                        <div class="form-group ">
                          <label for="last_updated">Last Updated </label>
                          <input type="date" disabled class="form-control"  name="last_updated" placeholder="Enter Last Updated" autofocus value ="<?=$row->last_updated;?>" tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="size">Size in MBs </label>
                          <input type="number" disabled class="form-control" name="size" placeholder="Enter Size" autofocus value ="<?=$row->size;?>" tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="type">Downloads </label>
                          <input type="number" disabled pattern="[0-9]"  class="form-control numbr"  name="downloads" placeholder="Enter Downloads" value ="<?=$row->downloads;?>"  tabindex="2"> 
                        </div>

                        <div class="form-group">
                          <label for="version">Version </label>
                          <input type="text" disabled class="form-control"  name="version" value ="<?=$row->id;?>" placeholder="Enter Version" autofocus  tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="whatsnew">What's New? </label>
                          <textarea placeholder="Enter What's New" disabled tabindex="9" class="form-control" name="whatsnew" rows="2"><?=$row->whatsnew;?></textarea>
                        </div>

                        <div class="form-group">
                          <label for="video_link">Video Link </label>
                          <input type="link" disabled class="form-control" required value ="<?=$row->video_link;?>" name="video_link" placeholder="Enter Video Link" autofocus  tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="download_link">Download Link </label>
                          <input type="link" class="form-control" disabled value ="<?=$row->download_link;?>" name="download_link" placeholder="Enter Download Link" autofocus  tabindex="1">
                        </div>
                        
                        <div class="form-group">
 
                            <label>Screenshots</label>
                            
                            <?php foreach($data['data5'] as $row2):?>
                            <?php if(sizeof($data['data5']) == 1) :?>
                              <a href="<?= base_url()?>/assets/uploads/appsimages/<?=$row2->screenshot;?>"><img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row2->screenshot;?>" alt="" width = 40 height = 42></a>
                            
                            
                            
                            <?php elseif(sizeof($data['data5']) == 2) :?>
                              <a href="<?= base_url()?>/assets/uploads/appsimages/<?=$row2->screenshot;?>"><img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row2->screenshot;?>" alt="" width = 40 height = 42></a>
                            
                             

                            <?php elseif(sizeof($data['data5']) == 3) :?>
                              <a href="<?= base_url()?>/assets/uploads/appsimages/<?=$row2->screenshot;?>"><img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row2->screenshot;?>" alt="" width = 40 height = 42></a>
                            
                             
                            <?php elseif(sizeof($data['data5']) == 4) :?>
                              <a href="<?= base_url()?>/assets/uploads/appsimages/<?=$row2->screenshot;?>"><img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row2->screenshot;?>" alt="" width = 40 height = 42></a>
                            
                            <?php else :?>
                              <img src="<?= base_url()?>/assets/images/no-image.jpg" alt="" width = 150 height = 150>
                            <?php endif ;?>
                            <?php endforeach ; ?>
                      
                          
                        </div>

                        <div class="form-group ">
                          <label for="description">Description </label> 
                          <textarea placeholder="Enter Description" disabled tabindex="9" class="form-control" name="description" rows="11"><?=$row->description;?></textarea>
                        </div>

                        
                        

                     <div class="form-group row fulltext">
                      <!-- <button type="submit" class="btn btn-success mr-2">Update</button> -->
          				<a href="<?= base_url('admin/products'); ?>" class="btn btn-light"> BACK </a>
                  <?php endforeach; ?>
                          

                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>

