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

                   <form class="forms-sample  addpro add_products_form"  method="post" action="<?= base_url(); ?>/admin/addProductdata" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="title">Name <span class="text_orange">*</span></label>
                        <input type="text" class="form-control" required name="title" placeholder="Enter Name" autofocus  tabindex="1">
                      </div>
                        
                        <div class="form-group row">
                            <label>Type <span class="text_orange">*</span></label>
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio" tabindex="10" required class="form-check-input" name="type" id="membershipRadios1" value="App"> Application <i class="input-helper"></i></label>
                          </div>
                          <div class="form-radio">
                            <label class="form-check-label">
                              <input type="radio"  tabindex="11" required class="form-check-input" name="type" id="membershipRadios2" value="Game" > Game <i class="input-helper"></i></label>
                          </div>
                        </div>
                        <div class="form-group App box">
                          <label>Category <span class="text_orange">*</span></label>
                          <select class="js-example-basic-single"  style="width:100%"  name="cat"  tabindex="4">
                            <?php
                             foreach ($data['data3'] as $result) : ?>
                                <option value="<?= $result->id; ?>"><?=  $result->cat_name; ?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div>
                        
                        <div class="form-group Game box">
                          <label>Category <span class="text_orange">*</span></label>
                          <select class="js-example-basic-single"  style="width:100%"  name="cat"  tabindex="4">
                            <?php
                             foreach ($data['data2'] as $result) : ?>
                                <option value="<?= $result->id; ?>"><?=  $result->cat_name; ?></option>
                             <?php endforeach; ?>  
                          </select>
                        </div>
                        

    
                        <div class="form-group Game ">
                          <label>Collection <span class="text_orange">*</span></label>
                          <select class="js-example-basic-single"  style="width:100%"  name="collection" multiple tabindex="4">
                          <?php foreach ($data['data8'] as $resulti) : ?>
                                <option value="<?= $resulti->id; ?>"><?=  $resulti->collection_name; ?></option>
                          <?php endforeach; ?>
   
                          </select>
                        </div>


                        <div class="form-group">
                        <label for="url">URL <span class="text_orange">*</span></label>
                        <input type="url" class="form-control "  name="url" placeholder="Enter URL" tabindex="3">
                        </div>
                        
                      <div class="form-group">
                        <label>Image <span class="text_orange">*</span></label>
                        <input type="file"  name="image" class="file-upload-default" accept='image/*'>
                        <div class="input-group col-xs-12">
                          <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                          </span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="author">Author <span class="text_orange">*</span></label>
                        <input type="text" class="form-control "  name="author" placeholder="Enter Author" tabindex="3"> </div>
                      <div class="form-group">
                        <label for="author_link">Author Link <span class="text_orange">*</span></label>
                        <input type="url"   class="form-control "  name="author_link" placeholder="Enter Author Link" tabindex="3">
                      </div>

                      
                        <div class="form-group">
                          <label>Price</label>
                          <input type="price" class="form-control" step="0.01" min="1" name="price" placeholder="Enter Price" tabindex="3">
                        </div>
                        
                        <div class="form-group prod_urlss">
                          <label for="rating">Rating <span class="text_orange">*</span></label>
                          <input  type="number" min= "1" max = "5" step="0.01" class="form-control" required name="rating" placeholder="Enter Rating"  tabindex="7"> 
                        </div>
                        <div class="form-group ">
                          <label for="last_updated">Last Updated <span class="text_orange">*</span></label>
                          <input type="date" class="form-control"  name="last_updated" placeholder="Enter Last Updated" autofocus  tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="size">Size in MBs </label>
                          <input type="number" step="0.01" min="1"  class="form-control" name="size" placeholder="Enter Size" autofocus  tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="type">Downloads <span class="text_orange">*</span></label>
                          <input type="number"  pattern="[0-9]"  class="form-control numbr" required name="downloads" placeholder="Enter Downloads"  tabindex="2"> 
                        </div>

                        <div class="form-group">
                          <label for="version">Version <span class="text_orange">*</span></label>
                          <input type="text" class="form-control" step="0.01" min="0" max="10" required name="version" placeholder="Enter Version" autofocus  tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="whatsnew">What's New? <span class="text_orange">*</span></label>
                          <textarea placeholder="Enter What's New" required  tabindex="9" class="form-control" name="whatsnew" rows="2"></textarea>
                        </div>

                        <div class="form-group">
                          <label for="video_link">Video Link <span class="text_orange">*</span></label>
                          <input type="link" class="form-control" required name="video_link" placeholder="Enter Video Link" autofocus  tabindex="1">
                        </div>
                        <div class="form-group">
                          <label for="download_link">Download Link </label>
                          <input type="link" class="form-control"  name="download_link" placeholder="Enter Download Link" autofocus  tabindex="1">
                        </div>
                       
                        <div class="form-group">
                          <div class="container " style="padding:0;">
                            <div class="form-group element" id='div_1'>
                              <div>
                                <label>Screenshots</label>
                                <input type="file"  name="screenshot[]" class="file-upload-default" accept='image/*'>
                                <div class="input-group col-xs-6">
                                  <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload Screenshot">
                                  <span class="input-group-append">
                                    <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload</button>
                                  </span>&nbsp;<span class='add btn btn-success' style = "padding-top: 12px;"><i class="fa fa-plus-circle" aria-hidden="true"></i></span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                          
                        <div class="form-group ">
                          <label for="description">Description <span class="text_orange">*</span></label> 
                          <textarea placeholder="Enter Description" required  tabindex="9" class="form-control" name="description" rows="11"></textarea>
                        </div>

                      <div class="form-group">
                        <label>Upload APK <span class="text_orange">*</span></label>
                        <input type="file" accept=".apk" ngf-accept="'.apk'"  name="apk" class="file-upload-default" >
                        <div class="input-group col-xs-12">
                          <input type="text"  class="form-control file-upload-info"  disabled="" placeholder="Upload APK">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-info" type="button"  tabindex="3">Upload APK</button>
                          </span>
                        </div>
                      </div>
                        
                        
                        <!-- <div class="form-group row">
                                <label>Avalibility</label>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" tabindex="10" required class="form-check-input" name="prorad" id="membershipRadios1" value="draft"> Draft <i class="input-helper"></i></label>
                              </div>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio"  tabindex="11" required class="form-check-input" name="prorad" id="membershipRadios2" value="publish" checked=""> Publish <i class="input-helper"></i></label>
                              </div>
                          </div> -->


                          <!-- <div class="form-group row">
                                <label>Currency</label>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" tabindex="10" required class="form-check-input" name="procurrency" id="membershipRadios1" value="SEK"> SEK <i class="input-helper"></i></label>
                              </div>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio"  tabindex="11" required class="form-check-input" name="procurrency" id="membershipRadios2" value="USD" checked=""> USD <i class="input-helper"></i></label>
                              </div>
                          </div>
                        <div class="form-group row pro_type">
                                <label>Product Type</label>
                              
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio" tabindex="12" class="form-check-input" name="prod_cond" id="prortype_2" value="compersion" checked=""> Compersion Product <i class="input-helper"></i></label>
                              </div>
                              <div class="form-radio">
                                <label class="form-check-label">
                                  <input type="radio"  tabindex="13" class="form-check-input" name="prod_cond" id="prortype_1" value="regular"> Regular Product <i class="input-helper"></i></label>
                              </div>
                          </div> -->
                     <div class="form-group row fulltext">
                      <button type="submit" class="btn btn-success mr-2">Submit</button>
          				<a href="<?= base_url('admin/products'); ?>" class="btn btn-light">Cancel</a>

                    </div>
                    </form>
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

    var max = 8;
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
});
</script>