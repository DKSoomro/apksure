<div class="row page_cont">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="table-responsive">
                      <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th class="text-center" width="50">#</th>
                            <th>Pages</th>
                            <th  class="text-center" width=80>Action</th>

                          </tr>
                        </thead>
                       <tbody>
                        <?php
                        $x=1;
                          foreach ($data as $row) : ?>
                          <tr>                           
                            <td class="text-center"><?=$x; ?></td> 
                            <td class="st_name" > <input type="text" readonly="true" value="<?=$row->title; ?>" ></td> 
                            <td  class="text-center">
                              <a data-toggle="tooltip" data-placement="top" title="View Page" target="_blank" href="<?=base_url('pages/'.$row->slug)?>" ><i class="m-1 fa fa-eye"></i></a>
                               |
                              <a href="<?=base_url('admin/edit_pages/'.$row->id)?>">  <i data-id="<?=$row->id; ?>" data-toggle="tooltip" title="Edit Page" data-placement="top" class="fa fa-edit c m-2 " ></i></a>
                                      |
                              <a href="deletepages/<?=$row->id; ?>"> <i data-toggle="tooltip" data-placement="top" title="Delete Category" class="fa fa-trash deltbr m-2 delt" data-id=""></i></a>
                          
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