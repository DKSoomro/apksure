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

            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">                    
                    <div class="table-responsive">
                      <table id="order-listing" class="table prodetail">
                        <thead>
                          <tr>
                            <th width="50" class="text-center">#</th>
                            <th width="">Name</th>
                            <th width="80">Type</th>
                            <!-- <th width="80" class="text-center">Status</th> -->
                            <th width="80" class="text-center">Action</th> 
                          </tr>
                        </thead>
                        <tbody>
                            <?php
                             $x=1;
                              foreach ($data as $row) : ?>
                          <tr>                           
                            <td  class="text-center"><?=$x; ?></td> 
                            <td class="st_name" data-value="<?=$row->title; ?>"> <input type="text" readonly="true"  value="<?=$row->title; ?>"></td> 
                            <td  class="st_url" data-value="<?=$row->type; ?>"><input type="url" readonly="true" value="<?=$row->type; ?>"> </td> 

                            <td  class="text-center">
                              <a data-toggle="tooltip" data-placement="top" title="View Game/App" target="_blank" href="<?=base_url('/admin/product/'.$row->id)?>"><i class="m-1 fa fa-eye"></i></a> | <a  data-toggle="tooltip" data-placement="top" title="Edit Game/App"  href="<?=base_url();?>/admin/editproduct/<?=$row->id; ?>"><i class="m-1 fa fa-edit"></i></a> | 
                               <a data-toggle="tooltip" data-placement="top" title="Delete Game/App" href="<?=base_url();?>/admin/deleteproduct/<?=$row->id; ?>" ><i class="m-1 fa fa-trash delt" data-id="" ></i></a></td>
                          </tr>
                          <?php $x ++; endforeach; ?>
                      
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
<div class="modelget">
  
</div>
