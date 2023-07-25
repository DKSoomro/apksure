 <nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="<?= base_url('admin/profile'); ?>" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="<?= base_url(); ?>/assets/admin/images/faces/face8.jpg" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?=empty(session('username'))?'':session('username');?></p>
                </div>
              </a>
            </li>
            <li class="nav-item <?=$pagemenu=='dashboard'?'active':'';?>">
              
            <a class="nav-link" href="<?= base_url(); ?>/admin/dashborad">
            	<i class="fa menu-icon fa-dashboard"></i>
                <span class="menu-title">Dashboard</span>
           </a>
            </li>
            <li class="nav-item <?=strpos($pagemenu,'products')?'active':'';?>">
              <a class="nav-link" data-toggle="collapse" href="#products" aria-expanded="<?=strpos($pagemenu,'products')?'true':'false';?>" aria-controls="apps-dropdown">
            	<i class="fa menu-icon fa-shopping-cart"></i>
                <span class="menu-title">Games/Apps</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse <?=strpos($pagemenu,'products')?'show':'';?>" id="products">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link  <?=$pagemenu=='products'?'active':'';?>" href="<?= base_url(); ?>/admin/products">View Games/Apps</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  <?=$pagemenu=='addproduct'?'active':'';?>" href="<?= base_url(); ?>/admin/add_Product">Add Games/Apps</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  <?=$pagemenu=='api'?'active':'';?>" href="<?= base_url(); ?>/admin/api">Fetch by API</a>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item <?=$pagemenu=='viewcategory'?'active':'';?>">
	            <a class="nav-link" href="<?= base_url(); ?>/admin/categories">
            	<i class="fa menu-icon fa-cubes"></i>
	                <span class="menu-title">Categories</span>
	           </a>
            </li>

            <li class="nav-item <?=$pagemenu=='collection'?'active':'';?>">  
              <a class="nav-link" href="<?= base_url(); ?>/admin/collection">
                <i class="fa menu-icon fa-dashboard"></i>
                  <span class="menu-title">Collections</span>
             </a>
            </li>

            <!-- <li class="nav-item <?=$pagemenu=='categories'?'active':'';?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/brands">
            	<i class="fa menu-icon fa-linode"></i>
	                <span class="menu-title">Brands</span>
	           </a>
            </li>
            <li class="nav-item <?=$pagemenu=='viewstore'?'active':'';?>">
                <a class="nav-link" href="<?= base_url(); ?>/admin/stores">
            	<i class="fa menu-icon fa-shopping-bag"></i>
	                <span class="menu-title">Stores</span>
	           </a>
            </li> -->
             <li class="nav-item <?=strpos($pagemenu,'pages')?'active':'';?>">
              <a class="nav-link " data-toggle="collapse" href="#pages" aria-expanded="<?=strpos($pagemenu,'pages')?'true':'false';?>" aria-controls="apps-dropdown">
            	<i class="fa menu-icon fa-files-o"></i>
                <span class="menu-title">Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse <?=strpos($pagemenu,'pages')?'show':'';?>" id="pages">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link  <?=$pagemenu=='pages'?'active':'';?>" href="<?= base_url(); ?>/admin/pages">View Pages</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  <?=$pagemenu=='addpages'?'active':'';?>" href="<?= base_url(); ?>/admin/addPages">Add Pages</a>
                  </li>
                </ul>
              </div>
            </li>
            
            <li class="nav-item <?=$pagemenu=='banner'?'active':'';?>">  
              <a class="nav-link" href="<?= base_url(); ?>/admin/banner">
                <i class="fa menu-icon fa-dashboard"></i>
                  <span class="menu-title">Banner</span>
             </a>
            </li>

            <li class="nav-item <?=$pagemenu=='homepage'?'active':'';?>">  
              <a class="nav-link" href="<?= base_url(); ?>/admin/homepage">
                <i class="fa menu-icon fa-dashboard"></i>
                <span class="menu-title">Homepage</span>
              </a>
            </li>

            <li class="nav-item <?=strpos($pagemenu,'userentries')?'active':'';?>">
              <a class="nav-link" data-toggle="collapse" href="#userentries" aria-expanded="<?=strpos($pagemenu,'userentries')?'true':'false';?>" aria-controls="apps-dropdown">
            	<i class="fa menu-icon fa-shopping-cart"></i>
                <span class="menu-title">User Entries</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse <?=strpos($pagemenu,'userentries')?'show':'';?>" id="userentries">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item">
                    <a class="nav-link  <?=$pagemenu=='contact-us'?'active':'';?>" href="<?= base_url(); ?>/admin/contact-us">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  <?=$pagemenu=='report-abuse'?'active':'';?>" href="<?= base_url(); ?>/admin/report-abuse">Report Abuse</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link  <?=$pagemenu=='submit-apk'?'active':'';?>" href="<?= base_url(); ?>/admin/submit-apk">Submit APK</a>
                  </li>
                </ul>
              </div>
            </li>

            



          </ul>
        </nav>
         <?php
      $uri=current_url(true);
    $segments=$uri->getSegments();
    $totalsegmet=$uri->getTotalSegments();
    $current_segment=$uri->getSegment($totalsegmet);


    ?>
         <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <!-- Page Title Header Starts-->
            <div class="row page-title-header page-header">
              <div class="col-md-4">
                  <!--  -->
     
              </div>
                <div class="col-md-8">
                  <div class="breadcrumbss">
                          <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                              <li class="breadcrumb-item"><a href="<?= base_url(''); ?>">Home</a></li>
                              <?php 
                              if($segments){ 
                                $totalCount = count($segments);
                                $count=0;
                                foreach($segments as  $seg){
                                  $count++;
                                  if($seg){?>
                                  <li class="breadcrumb-item <?php echo $current_segment==$seg?'active':'';  ?>"><a href="<?=$totalCount==$count?'JavaScript:void(0);':base_url($seg);?>"><?php echo ucfirst(str_replace("_" ," ",$seg)); ?></a></li>
                                  <?php   

                                  }
                                  
                                }
                              } 
                            ?>
                            </ol>
                          </nav>
                      </div>
                    </div>
              </div>
