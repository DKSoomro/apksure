<?php $editData = $data['data'];?>

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

                    <h4 class="card-title">Edit Product</h4>
                    <form class="forms-sample reqerrors addpro"  method="post" action="<?= base_url(); ?>/admin/editProductdata" enctype="multipart/form-data">
                      <!--  -->
                      <div class="form-group ">
                        <label for="proname">Product Name</label>
                        <input type="text" class="form-control" value="<?=$editData->product_title;?>" name="proname" placeholder="Product Name"> </div>
                      <div class="form-group">
                        <label for="progprice">Regular Price</label>
                        <input type="text" class="form-control" value="<?=$editData->product_price;?>" name="progprice" placeholder="Regular Price"> </div>
                        <div class="form-group">
                        <label for="prosprice">Sale Price</label>
                        <input type="text" class="form-control" value="<?=$editData->sale_price;?>" name="prosprice" placeholder="Sale Price"> </div>
                      <div class="form-group">
                        <label>File upload</label>
                        <input type="file" name="proimg" class="file-upload-default">
                        <div class="input-group col-xs-12">
                        <div class="img-leftside"> <img src="<?php echo base_url(); ?>/assets/uploads/productimages/<?= $editData->product_image_link ;?>" class="img-thumbnail"></div>
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button">Upload</button>
                          </span>
                          
                        </div>
                      </div>
                      <div class="form-group">
                          <label>Categories</label>
                          <select class="js-example-basic-single" style="width:100%" name="procat">
                            <?php
                              foreach ($data['get_cat'] as $row) : ?>
                                <option <?=($editData->category_id==$row->id?'selected="true"':'');?>  value="<?=$row->id; ?>"><?=$row->name; ?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Store</label>
                          <select class="js-example-basic-single" style="width:100%" name="prostore">
                            <?php
                              foreach ($data['get_store'] as $row) : ?>
                                <option <?=($editData->vendor_id==$row->id?'selected="true"':'');?> value="<?=$row->id; ?>"><?=$row->name; ?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div>
                        <div class="form-group">
                          <label>Brands</label>
                          <select class="js-example-basic-single" style="width:100%" name="probrands">
                            <?php
                              foreach ($data['get_brands'] as $row) : ?>
                                <option  <?=($editData->product_brand_id==$row->id?'selected="true"':'');?> value="<?=$row->id; ?>"><?=$row->name; ?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div>
                        <div class="form-group prod_urlss">
                          <label for="prourl">Url</label>
                          <input type="url" class="form-control" name="prourl" placeholder="Url" value="<?=($editData->product_link); ?>"> 
                        </div>
                        <?php  $compersion_id = explode(',',$editData->compersion_id);?>
                        <div class="form-group prod_compp">
                          <label for="prourl">Product Compresion</label>
                         <select mul class="js-example-basic-multiple" style="width:100%" name="prod_comp[]"  multiple="multiple"> 
                            <?php
                              foreach ($data['products'] as $row) : ?>
                                <option value="<?=$row->id; ?>"  <?=(in_array($row->id,$compersion_id)?'selected="true"':'');?>><?=$row->product_title; ?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div>
                           
                         <div class="form-group fulltext">
                        <label for="prodes">Product Description</label> <textarea class="form-control" name="prodes" rows="2"> <?=$row->product_description; ?></textarea> </div>
                        
                        <div class="form-group row">
                                <label>Avalibility</label>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="prorad" id="membershipRadios1" value="draft"  <?=($editData->product_availability=='draft'?'checked="true"':'');?> > Draft <i class="input-helper"></i></label>
                              </div>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="prorad" id="membershipRadios2" value="publish"  <?=($editData->product_availability=='publish'?'checked="true"':'');?> > Publish <i class="input-helper"></i></label>
                              </div>
                          </div>
                          <div class="form-group row">
                                <label>Currency</label>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" tabindex="10" required class="form-check-input" name="procurrency" id="membershipRadios1" value="GBP" <?=($editData->product_price_currency=='GBP'?'checked="true"':'');?> >  GBP <i class="input-helper"></i></label>
                              </div>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio"  tabindex="11" required class="form-check-input" name="procurrency" id="membershipRadios2" value="Euro" <?=($editData->product_price_currency=='Euro'?'checked="true"':'');?>> Euro <i class="input-helper"></i></label>
                              </div>
                          </div>
                        <div class="form-group row pro_type">
                                <label>Product Type</label>
                              
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="prod_cond" id="prortype_2" value="compersion" <?=($editData->product_type=='compersion'?'checked="true"':'');?>> Compersion Product <i class="input-helper"></i></label>
                              </div>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" class="form-check-input" name="prod_cond" id="prortype_1" value="regular" <?=($editData->product_type=='regular'?'checked="true"':'');?>> Regular Product <i class="input-helper"></i></label>
                              </div>
                          </div>
                     <div class="form-group row fulltext" >
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
                      <a href="<?= base_url('admin/products'); ?>" class="btn btn-light">Cancel</a>
                    </div>
                    <?php
                     $uri=current_url(true);
                      $segments=$uri->getSegments();
                      $totalsegmet=$uri->getTotalSegments();
                      $current_segment=$uri->getSegment($totalsegmet);?>
                      <?php if(is_numeric($current_segment)):?>
                      <input type="hidden" value="<?=$current_segment;?>" name="productID">
                        <?php endif;?>
                    </form>
                  </div>
                </div>
              </div>
            </div>