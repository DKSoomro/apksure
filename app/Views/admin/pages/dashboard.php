            <!-- Page Title Header Ends-->
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <!-- <div class="col-lg-3 col-md-6">
                        <div class="d-flex">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold"></h3>
                             <h5 class="mb-0 font-weight-medium text-primary">GAMES/APPS</h5>
                            <p class="mb-0 text-muted">+14.00(+0.50%)</p>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                          <i class="fa menu-icon fa-shopping-cart fa-3x"></i>
                          </div>
                        </div>
                      </div> -->
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex dd">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold"><?php
                              $x=0;
                                foreach ($data['data4'] as $row) {  
                                  $x++;

                                }
                                echo $x; ?>
                                </h5></h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Games 
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                          <i class="fa fa-gamepad fa-3x"></i>
                           
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex dd">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold"><?php
                              $x=0;
                                foreach ($data['data6'] as $row) {$x++;}
                                echo $x; ?></h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Categories </h5>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                          <i class="fa fa-list-alt fa-3x"></i>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-3 col-md-6 mt-md-0 mt-4">
                        <div class="d-flex dd">
                          <div class="wrapper">
                            <h3 class="mb-0 font-weight-semibold"> <?php
                              $x=0;
                                foreach ($data['data5'] as $row) {  
                                  $x++;

                                }
                                echo $x; ?></h3>
                            <h5 class="mb-0 font-weight-medium text-primary">Apps
                           
                            </h5>
                          </div>
                          <div class="wrapper my-auto ml-auto ml-lg-4">
                          <i class="fa fa-mobile fa-3x"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="row">
                  <div class="col-md-12 grid-margin">
                    <div class="card">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <h4 class="card-title mb-0">Products</h4>
                          <a href="<?=base_url('/admin/products/')?>"><small>Show All</small></a>
                        </div>
                        <div class="table-responsive">
                          <table  id="order-listing" class="table table-striped table-hover ">
                            <thead>
                              <tr>
                                <th width="50"  class="text-center">#</th>
                                <th width="">Game/App</th>
                                <th width="80"  class="">Type</th>
                                <th width="80"  class="text-center">Created At</th>
                              </tr>
                            </thead>
                            <tbody>
                   
                            <?php
                             $x=1;
                              foreach ($data['data2'] as $row) : ?>
                          <tr>                           
                            <td  class="text-center"><?=$x; ?></td> 
                            <td class="st_name" data-value="<?=$row->title; ?>"> <?=$row->title; ?></td> 
                            <td  class="st_url" data-value="<?=$row->type; ?>"><?=$row->type; ?> </td> 

                            <td  class="text-center">
                            <?=$row->created_at; ?>
                              </td>
                          </tr>
                          <?php $x ++; endforeach; ?>
                           
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
               <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-flex justify-content-between pb-3">
                      <h4 class="card-title mb-0">Categories</h4>
                    </div>
                    <!-- <ul class="timeline">

                        <li class="timeline-item">
                          <p class="timeline-content"><a target="_blank" href="#"></a></p>
                          <p class="event-time"></p>
                      </li>
                     

                    </ul> -->
                 
                      <a class="" href="<?=base_url();?>/admin/categories">Show all</a>

                      <div class="table-responsive">
                          <table  id="order-listing" class="table table-striped table-hover">
                            <thead>
                              <tr>
                                <th width="50"  class="text-center">#</th>
                                <th width="">Name</th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php
                              $x=1;
                                foreach ($data['data3'] as $row) : ?>
                              <tr>                           
                                <td class="text-center"><?=$x; ?></td> 
                                <td class="st_name" data-value="<?=$row->cat_name; ?>"> <?=$row->cat_name; ?></td> 
                              </tr>
                              <?php $x ++; endforeach; ?>
                           
                            </tbody>
                          </table>
                        </div>
              
                  </div>
                </div>
              </div>
            </div>