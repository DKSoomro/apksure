<div class="row" >
              <div class="col-md-12 grid-margin stretch-card formcss">
                <div class="card">
                  <div class="card-body">
                  
             <div class="row">
              <div class="col-12">
                  <a  href="<?=base_url();?>/admin/api" class="text-right btn btn-success">Back</a>
                  <a href="#" type="button" id="btnFetch" class="btn-success spinner-button btn text-left pull-right">Add All</a>
                </div>
             </div>

             <div class="row">
              <div class="col-12">              
                <p>Total data fetch ( <?=count($data['apps']);  ?>)  </p>
              </div>
             </div>

                <div class="row">

                
                 <?php $count=0;?>
                  <?php foreach($data['apps'] as $row):?>
                    <div class = "col-lg-2 col-md-2 col-sm-2 p-2">
                  <form class="fetch_form" id="fetch_form_<?=$count;?>">
                     
                 
                    <div class="card" >
                      <img class="card-img-top" src="<?php echo $row->getIcon();?>" alt="Card image cap">
                      <div class="card-body">
                        <h5 class="card-title"><b><?php echo  substr($row->getName(), 0, 30);?></b></h5>
                        <p class="card-text"><?php echo substr($row->getSummary(), 0, 50);?><br>Developed by: <b><?php echo $row->getDeveloper()->getName();?></b></p>
                        
                        <input type="hidden" name='title' id='title' value='<?php echo $row->getName();?>'>
                        <input type="hidden" name='url' id='url' value='<?php echo $row->getUrl();?>'>
                        <input type="hidden" name='id' id='id' value='<?php echo $row->getId();?>'>
                        <input type="hidden" name='whatsnew' id='whatsnew' value='<?php echo $row->getSummary();?>'>
                        <input type="hidden" name='image' id='image' value='<?php echo $row->getIcon();?>'>
                        <input type="hidden" name='author' id='author' value='<?php echo $row->getDeveloper()->getName();?>'>
                        <input type="hidden" name='author_link' id='author_link' value='<?php echo $row->getDeveloper()->getUrl();?>'>
                        <input type="hidden" name='last_updated' id='last_updated' value='<?php echo date("F j, Y");?>'>
                        <input type="hidden" name='cat_id' id='cat_id' value='<?php echo $data['cat_id']?>'>
                        <input type="hidden" name='collection_id' id='collection_id' value='<?php echo(rand(1,2)); ?>'>
                        <!-- <input type="hidden" name='cost' id='cost' value='Free'> -->
                        
                        <?php if($data['cat_id'] > 33) :?>
                          <input type="hidden" name='type' id='type' value='Game'>
                        <?php else :?>
                          <input type="hidden" name='type' id='type' value='App'>
                        <?php endif;?>

                        <button class="btn btn-success mr-2 btnfull" id="add_btn" type="<?=(check_app_is_exist($row->getId())>0?'button"':'submit')?>" <?=(check_app_is_exist($row->getId())>0?'disabled="true"':'')?>> <?=(check_app_is_exist($row->getId())>0?'Already Added':'Add')?></button>
                      </div>
                    </div>
                        

                        


                        
                       </form>
                      </div>  
                      <?php $count++;?>

                    <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>