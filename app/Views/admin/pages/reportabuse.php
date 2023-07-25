<div class="row catemain">
    <div class="col-md-12 grid-margin">
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

          <h4 class="card-title">Report Abuse</h4>
          <div class="table-responsive">
            <table id="order-listing" class="table">
              <thead>
                <tr>
                  <th class="text-center">#</th>
                  <th> URL</th>
                  <th> Name</th>
                  <th> Email</th>
                  
                  <th> Reason</th>
                  <th> Comments</th>
                  <th class="text-center" width="80">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
               $count=1;
                   foreach ($data['data2'] as $row) : ?>
                <tr>                           
                    <td  class="text-center"><?=$count;?></td> 
                    <td class="st_name" data-value=""><?=$row->url?></td>
                    <td class="st_type" data-value=""><?=$row->name?></td>
                    <td class="st_type" data-value=""><?=$row->email?></td>
                    <td class="st_type" data-value=""><?=$row->reason?></td> 
                    <td class="st_type" data-value=""><?=$row->comments?></td> 
                    
                     
                    
                    <td  class="text-center">
                      <a data-toggle="tooltip" data-placement="top" title="View" target="_blank" href="<?=base_url('/admin/report-abuse/'.$row->id)?>"><i class="m-1 fa fa-eye"></i></a> |
                      <a href="deletereportabuse/<?= $row->id; ?>"> <i data-toggle="tooltip" data-placement="top" title="Delete Contact Us" class="fa fa-trash deltbr m-2 delt" data-id=""></i></a>
                    </td>

                </tr>
                
                <?php $count++; endforeach; ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>