
            <div class="modal fade" id="prodctview" tabindex="-1" role="dialog" aria-labelledby="prodctview"  aria-modal="true">
                      <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel-2">Product View</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="row">
                              <div class="col-md-6 grid-margin">
                                      <img src="<?= base_url(); ?>/assets/uploads/productimages/<?= $data->image; ?>">
                              </div>      
                                <div class="col-md-6">
                                  <h2><?= $data->name; ?></h2>
                                  <ul class="pmeta">
                                      <li class="categry">
                                        <strong>Category</strong>
                                        <span><?= $data->catname; ?></span>
                                      </li>
                                      
                                      <li class="stor">
                                        <strong>Store</strong>
                                        <span><?= $data->vaename; ?></span>
                                      </li>
                                      
                                      <li class="brandd">
                                        <strong>Brand</strong>
                                        <span><?= $data->brandname; ?></span>
                                      </li>
                                    </ul>
                                    <div class="prdct-desc">
                                      <strong>Product Description</strong>
                                      <p>
                                        <?= $data->description; ?>
                                      </p>
                                    </div>
                                    <div class="ppryc">
                                      <strong>Price</strong>

                                        <?php
                                       $sale_price = $data->sale_price; 
                                       $regular_price = $data->regular_price; 
                                          if ($sale_price > 1) {
                                            echo '<del>'.$regular_price.'</del>';
                                             echo $sale_price; 
                                          }
                                          else{
                                           echo  $regular_price;
                                        }


                                        ?>
                                       
                                      </div>
                                      <a href="<?= $data->url; ?>">To Store</a>
                                </div>                               
                                </div>
                              </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
                      </div>
                    </div>