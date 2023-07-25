<div class="row" >
              <div class="col-md-12 grid-margin stretch-card formcss">
                <div class="card">
                  <div class="card-body">
                   
                   <form class="forms-sample  addpro add_products_form"  method="post" action="<?= base_url(); ?>/admin/dataApi" enctype="multipart/form-data">
                   

                        <!-- <div class="form-group">
                          <label>Collections <span class="text_orange">*</span></label>
                          <select class="js-example-basic-single"  style="width:100%" required name="collection"  tabindex="4">
                            <?php
                             foreach ($data['collections'] as $result) : ?>
                                <option value="<?= $result; ?>"><?=  $result;?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div> -->

                        <div class="form-group">
                          <label>Choose a category <span class="text_orange">*</span></label>
                          <select class="js-example-basic-single"  style="width:100%" required name="category"  tabindex="4">
                            <?php
                             foreach ($data['categories'] as $result2) : ?>
                                <option value="<?= $result2->cat_name; ?>"><?=$result2->cat_name;?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div>

                     <div class="form-group row fulltext">
                      <button type="submit" class="btn btn-success mr-2">Fetch</button>
          				<a href="<?= base_url('admin/products'); ?>" class="btn btn-light">Cancel</a>
            

                    </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>