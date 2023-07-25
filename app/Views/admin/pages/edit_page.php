<!-- <?php ?> -->

<div class="row">
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

        <h4 class="card-title">Add New Pages</h4>
        <form class="forms-sample reqerrors addpro"  method="post" action="<?= base_url(); ?>/admin/editpagesdata" enctype="multipart/form-data">
        <?php foreach($data as $row){ ?>
          <div class="form-group" style="flex: 0 0 100%;">
            <label for="proname">Page Title <span class="text_orange">*</span></label>
            <input type="text" required class="form-control" name="title" value="<?=$row->title;?>" placeholder="Page Title"> 
          </div>
          <div class="form-group" style="flex: 0 0 100%;">
            <label for="proname">Page Content <span class="text_orange">*</span></label>
            <textarea id='tinyMceExample' name="textcontent" required > <?=$row->content;?></textarea>
          </div>

          <button type="submit" class="btn btn-success mr-2">Submit</button>
          <a href="<?= base_url('admin/pages'); ?>" class="btn btn-light">Cancel</a>
          <input type="hidden" name="id" value="<?=$row->id;?>"> 
          <?php } ?>
        </form>
      </div>
    </div>
  </div>
</div>