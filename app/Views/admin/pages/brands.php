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
          <h4 class="card-title">Add Brand</h4>
          <form class="forms-sample brandsge" method="post" action="<?= base_url(); ?>/admin/addbrands">
            <div class="form-group">
              <label for="exampleInputName1">Brand Name <span class="text_orange">*</span></label>
              <input type="text" name="brandname" required class="form-control" id="getinput" placeholder="Brands Name" autofocus tabindex="1"> </div>
            <button type="submit" class="btn btn-success mr-2"  tabindex="2">Add Brand</button>
          </form>
        </div>
      </div>
      
    </div>
</div>
<div class="row brandmain">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Brands</h4>
                    <div class="table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th class="text-center" width=50>#</th>
                            <th>Brands Name </th>
                            <th class="text-center" width=80>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $x=1;
                              foreach ($data as $row) : ?>
                          <tr>                           
                            <td class="text-center"><?=$x; ?></td> 
                            <td class="st_name" data-value="<?=$row->name; ?>"> <input class="form-control" type="text" readonly="true"  value="<?=$row->name; ?>"></td> 
                            <td class="text-center">
                              <i data-toggle="tooltip" data-placement="top" title="Edit Brand" class="fa fa-edit editt m-2" data-id="<?=$row->id; ?>" ></i>
                            |
                              <i  data-toggle="tooltip" data-placement="top" title="Delete Brand" class="fa fa-trash delt m-2" data-id="<?=$row->id; ?>"></i>
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