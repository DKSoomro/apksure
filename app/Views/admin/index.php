<!DOCTYPE html>
<html lang="en">

      <?php if(!empty($head)){
    echo $head;
}?>
  <body>
    <div class="container-scroller">
      <?php if(!empty($nav)){
    echo $nav;
}?>
      <div class="container-fluid page-body-wrapper">

       <?php if(!empty($sidbar)){
          echo $sidbar;
        }?>

        <?php echo $content;?>
       




          </div>
  <?php if(!empty($footer)){
          echo $footer;
        }?>