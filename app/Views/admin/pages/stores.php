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
          <h4 class="card-title">Add Store</h4>
          <form class="forms-sample stocat" method="post" action="<?= base_url(); ?>/admin/addvendors " >
            <div class="form-group">
              <label for="getinput">Store Name <span class="text_orange">*</span></label>
              <input type="text" name="vendname"  required class="form-control" id="getinput" placeholder="Stores Name" autofocus  tabindex="1"> 
            </div>
            <div class="form-group">
              <label for="geturl">Store Url <span class="text_orange">*</span></label>
              <input type="url" name="vendurl" required  class="form-control" id="geturl" placeholder="Stores Url"  tabindex="2"> 
            </div>
            <button type="submit"  tabindex="3" class="btn btn-success mr-2">Add Store</button>
          </form>
        </div>
      </div>
    </div>
</div>
<div class="row strmain">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Stores</h4>
                    <div class="table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th class="text-center">#</th>
                            <th>Stores</th>
                            <th>Url</th>
                            <th  class="text-center" width=80>Action</th>

                          </tr>
                        </thead>
                       <tbody>
                          <?php
                          $x=1;
                              foreach ($data as $row) : ?>
                          <tr>                           
                            <td class="text-center"><?=$x; ?></td> 
                            <td class="st_name" data-value="<?=$row->name; ?>"> <input class="form-control" type="text" readonly="true"  value="<?=$row->name; ?>"></td> 
                            <td  class="st_url" data-value="<?=$row->url; ?>"><input class="form-control" type="url" readonly="true" value="<?=$row->url; ?>"> </td> 
                            <td  class="text-center">
                              <i data-toggle="tooltip" data-placement="top" title="Edit Store" class="fa fa-edit c m-2 editt" data-id="<?=$row->id; ?>" ></i>
                                      |
                              <i  data-toggle="tooltip" data-placement="top" title="Delete Store"  class="fa fa-trash deltbr m-2 delt" data-id="<?=$row->id; ?>"></i>
                          
                            </td>
                          </tr>
                          
                          <?php $x++; endforeach; ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>  