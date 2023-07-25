<div class="row" >
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

                   <form class="forms-sample  addpro add_products_form"  method="post" action="<?= base_url(); ?>/admin/editProductdata" enctype="multipart/form-data">
                      <?php foreach($data['data2'] as $row) :?>
                   <input type="hidden" value = "<?=$row->id?>"  name = "id">

                      <div class="form-group">
                        <label for="title">Name <span class="text_orange">*</span></label>
                        <input type="text" class="form-control" required name="title" value ="<?=$row->title;?>" placeholder="Enter Name" autofocus  tabindex="1">
                      </div>
                      <?php $type = $row->type;?>
                        <div class="form-group row">
                          <label>Type <span class="text_orange">*</span></label>
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio" <?php if($type == 'App'){echo 'checked';}?> tabindex="10"  class="form-check-input" name="type" id="membershipRadios1" value ="App"> Application <i class="input-helper"></i></label>
                          </div>
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio" <?php if($type == 'Game'){echo 'checked';}?> tabindex="11" class="form-check-input" name="type" id="membershipRadios2" value="Game"> Game <i class="input-helper"></i></label>
                          </div>
                        </div>
                        
                        
                          
                         

                        <div class="form-group App box">
                          <label>Category <span class="text_orange">*</span></label>
                          <select class="js-example-basic-single"  style="width:100%"  name="cat"  tabindex="4">
                          <?php foreach ($data['data3'] as $resulti) : ?>
                                <option value="<?= $resulti->id; ?>"><i class="fa fa-check" aria-hidden="true"></i> <?=  $resulti->cat_name; ?></option>
                          <?php endforeach; ?>
                            <?php
                             foreach ($data['data7'] as $result) : ?>
                                <option value="<?= $result->id; ?>"><?=  $result->cat_name; ?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div>
                        
                        <div class="form-group Game box">
                          <label>Category <span class="text_orange">*</span></label>
                          <select class="js-example-basic-single"  style="width:100%"  name="cat"  tabindex="4">
                          <?php foreach ($data['data3'] as $resulti) : ?>
                                <option value="<?= $resulti->id; ?>"><?=  $resulti->cat_name; ?></option>
                          <?php endforeach; ?>
                            <?php
                             foreach ($data['data6'] as $result) : ?>
                                <option value="<?= $result->id; ?>"><?=  $result->cat_name; ?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div>

                        <div class="form-group Game ">
                          <label>Collection <span class="text_orange">*</span></label>
                          <select class="js-example-basic-single"  style="width:100%"  name="collection[]" multiple tabindex="4">
                          
                          <?php foreach ($data['data8'] as $resulti) : ?>
                                <option value="<?= $resulti->id; ?>"><?=  $resulti->collection_name; ?></option>
                          <?php endforeach; ?>
   
                          </select>
                        </div>
                        <input type="hidden" name='last_updated' id='last_updated' value='<?php echo date("F j, Y");?>'>

                        <div class="form-group">
                        <label for="url">URL <span class="text_orange">*</span></label>
                        <input type="url" class="form-control " value ="<?=$row->url;?>" name="url" placeholder="Enter URL" tabindex="3">
                        </div>
                        
                      <div class="form-group">
                        <label>Image <span class="text_orange">*</span></label>
                        



                        <?php if(!empty($row->image)) :?>
                          <input type="hidden" value = "<?=$row->image;?>" name = "image2">
                        <?php endif;?>
                        <input type="file"   name="image"  class="file-upload-default" accept='image/*'>
                        <div class="input-group col-xs-12">
                        <?php
                                $word = "https:";
                                if(strpos($row->image, $word) !== false) : ?>
                                    <img src="<?=$row->image;?>"  width = 40 height = 42>
                                <?php else : ?>
                                    <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row->image;?>"  width = 40 height = 42>
                                <?php endif;?>
                        
                          <input type="text"  value ="<?=$row->image;?>" class="form-control file-upload-info"  disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                          </span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="author">Author <span class="text_orange">*</span></label>
                        <input type="text" class="form-control " value ="<?=$row->author;?>" name="author" placeholder="Enter Author" tabindex="3"> </div>
                      <div class="form-group">
                        <label for="author_link">Author Link <span class="text_orange">*</span></label>
                        <input type="url"   class="form-control " value ="<?=$row->author_link;?>" name="author_link" placeholder="Enter Author Link" tabindex="3">
                      </div>

                        
                        <div class="form-group">
                          <label>Price</label>
                          <input type="price" class="form-control " step="0.01" min="0" value ="<?=$row->author_link;?>" name="price" placeholder="Enter Price" tabindex="3">
                        </div>
                        
                        <div class="form-group prod_urlss">
                          <label for="rating">Rating <span class="text_orange">*</span></label>
                          <input  type="number" min= "1" max = "5" step="0.01"  class="form-control" required name="rating" placeholder="Enter Rating" value ="<?=$row->rating;?>" tabindex="7"> 
                        </div>
                        <div class="form-group ">
                          <label for="last_updated">Last Updated <span class="text_orange">*</span></label>
                          <input type="date" class="form-control"  name="last_updated" placeholder="Enter Last Updated" autofocus value ="<?=$row->last_updated;?>" tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="size">Size in MBs </label>
                          <input type="number" class="form-control" step="0.01" min="1"  name="size" placeholder="Enter Size" autofocus value ="<?=$row->size;?>" tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="type">Downloads <span class="text_orange">*</span></label>
                          <input type="number"  pattern="[0-9]"  class="form-control numbr" required name="downloads" placeholder="Enter Downloads" value ="<?=$row->downloads;?>"  tabindex="2"> 
                        </div>

                        <div class="form-group">
                          <label for="version">Version <span class="text_orange">*</span></label>
                          <input type="text" class="form-control" step="0.01" min="0" required name="version" value ="<?=$row->id;?>" placeholder="Enter Version" autofocus  tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="whatsnew">What's New? <span class="text_orange">*</span></label>
                          <textarea placeholder="Enter What's New" required  tabindex="9" class="form-control" name="whatsnew" rows="2"><?=$row->whatsnew;?></textarea>
                        </div>

                        <div class="form-group">
                          <label for="video_link">Video Link <span class="text_orange">*</span></label>
                          <input type="link" class="form-control" required value ="<?=$row->video_link;?>" name="video_link" placeholder="Enter Video Link" autofocus  tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="download_link">Download Link </label>
                          <input type="link" class="form-control" value ="<?=$row->download_link;?>" name="download_link" placeholder="Enter Download Link" autofocus  tabindex="1">
                        </div>

                        <div class="form-group">
                      <?php if(!empty($row->apk_file)) :?>
                          <input type="hidden" value = "<?=$row->apk_file;?>" name = "apk2">
                        <?php endif;?>
                        <label>Upload APK <span class="text_orange">*</span></label>
                        <input type="file" value ="<?=$row->apk_file;?>" accept=".apk" ngf-accept="'.apk'"  name="apk" class="file-upload-default" >
                        <div class="input-group col-xs-12">
                          <input type="text" value ="<?=$row->apk_file;?>"  class="form-control file-upload-info"  disabled="" placeholder="Upload APK">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload APK</button>
                          </span>
                        </div>
                      </div>
                        
                        <div class="form-group ">
                          <label for="description">Description <span class="text_orange">*</span></label> 
                          <textarea placeholder="Enter Description"  required  tabindex="9" class="form-control" name="description" rows="11"><?=$row->description;?></textarea>
                        </div>

                      

                      <!-- <div class="form-group">
                        
                            <label>Screenshots</label>
                            <?php foreach($data['data5'] as $row2):?>
                            <?php if(sizeof($data['data5']) >= 1) :?>

                              <?php
                                $word = "https:";
                                if(strpos($row2->screenshot, $word) !== false) : ?>

                        

                        <div class="form-group">
                          <div class="container " style="padding:0;">
                            <div class="form-group element" id='div_1'>
                              <div>
                                <label>Screenshot</label>
                                <img src="<?=$row2->screenshot;?>" width = "40" height = "42">
                                    <?=$row2->id?>
                                <input type="file"  name="screenshot[]" class="file-upload-default" accept='image/*'>
                                <div class="input-group col-xs-6">
                                  <input type="hidden" value = 'scr_id<?=$row2->id?>' name='scr_id<?=$row2->id?>'>
                                  <input type="text" value = '<?=sizeof($data['data5'])?>' name='asize'>
                                  <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Screenshot">
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                                  </span>&nbsp;<span class='add btn btn-success' style = "padding-top: 12px;"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                  <a href="<?=$row->id; ?>/deletescreenshot/<?=$row2->id; ?>"> <i data-toggle="tooltip" data-placement="top" title="Delete Screenshot" class="fa fa-trash deltbr m-2 delt" data-id=""></i></a>
                                </div>
                              </div>
                            </div>
                          </div>

                                <?php else : ?>

                        <?php if(!empty($row2->screenshot)) :?>
                          <input type="hidden" value = "<?=$row2->screenshot;?>" name = "scr2<?=$row2->id?>">
                        <?php endif;?>

                        <div class="form-group">
                          <div class="container " style="padding:0;">
                            <div class="form-group element" id='div_1'>
                              <div>
                                <label>Screenshot</label>
                                <img src="<?= base_url()?>/assets/uploads/appsimages/<?=$row2->screenshot;?>" width = "40" height = "42">
                                    <?=$row2->id?>
                                <input type="file"  name="screenshot[]" id='a' class="file-upload-default" accept='image/*' value = '<?=$row2->screenshot;?>'>
                                <div class="input-group col-xs-6">
                                  <input type="hidden" value = '<?=$row2->id?>' name='scr_id<?=$row2->id?>'>
                                  <input type="hidden" value = '<?=sizeof($data['data5'])?>' name='asize'>
                                  <input type="text"  class="form-control file-upload-info" name='sss<?=$row2->screenshot;?>'  disabled="" value = '<?=$row2->screenshot;?>' placeholder="Upload Screenshot">
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                                  </span>&nbsp;<span class='add btn btn-success' style = "padding-top: 12px;"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                  <a href="<?=$row->id; ?>/deletescreenshot/<?=$row2->id; ?>"> <i data-toggle="tooltip" data-placement="top" title="Delete Screenshot" class="fa fa-trash deltbr m-2 delt" data-id=""></i></a>
                                </div>
                              </div>
                            </div>
                          </div>

                                  
                                <?php endif;?>

                            
                            <?php endif ;?>
                            <?php endforeach ; ?>
                          -->
                        </div> 
                        
                        
                        

                     <div class="form-group row fulltext">
                      <button type="submit" class="btn btn-success mr-2">Update</button>
          				<a href="<?= base_url('admin/products'); ?>" class="btn btn-light">Cancel</a>
                  <?php endforeach; ?>
                          

                    </div>
                    </form>

  
                  </div>

                  
            </div>
            </div>
            </div>
            </div>

<style>
.box {
  display: none;
}
</style>

<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
        var inputValue = $(this).attr("value");
        var targetBox = $("." + inputValue);
        $(".box").not(targetBox).hide();
        $(targetBox).show();
    });

    $(".add").click(function(){

    // Finding total number of elements added
    var total_element = $(".element").length;

    // last <div> with element class id
    var lastid = $(".element:last").attr("id");
    var split_id = lastid.split("_");
    var nextindex = Number(split_id[1]) + 1;

    var max = 10;
    // Check total number elements
    if(total_element < max ){
    // Adding new div container after last occurance of element class
    $(".element:last").after("<div class='element form-group' id='div_"+ nextindex +"'></div>");

    // Adding element to <div>
    $("#div_" + nextindex).append('<div class=""><label>Screenshots</label><input type="file"  name="screenshot[]" class="file-upload-default" accept="image/*"><div class="input-group col-xs-6"><input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Screenshot"><span class="input-group-append"><button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button></span>&nbsp;<span  id="remove_' + nextindex + '" class="remove"><i style="vertical-align: bottom;"  class="fa fa-trash-o" aria-hidden="true"></i></span></div>');

    }

    });

    // Remove element
    $('.container').on('click','.remove',function(){

    var id = this.id;
    var split_id = id.split("_");
    var deleteindex = split_id[1];

    // Remove <div> with id
    $("#div_" + deleteindex).remove();

    });

    $(document).on('click','#a', function(){
      // alert($(this).data('id'));
    })
});
</script>