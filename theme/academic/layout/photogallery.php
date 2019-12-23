<!-- Start Photo-gallery -->
<?php if($displayphotogallery) { ?>
<div id="gallery-section">
   <div class="gallery-section-con">
      <?php if($galleryheading) { ?>  
      <h1><?php echo $galleryheading ?></h1>
      <div class="heading__line">
         <div><i class="fa fa-graduation-cap" aria-hidden="true"></i></div>
      </div>
      <?php } ?> 
      <?php if($gallerytagline) { ?>  
      <p class="tagline"><?php echo $gallerytagline ?></p>
      <?php } ?>
   </div>
   <ul class="lb-album row-fluid">
      <li class="span3">
         <a href="#image-1">
         <img src="<?php echo $gallery1image ?>" alt="Thumbnail-1">
         <span><i class="fa fa-link" aria-hidden="true"></i></span>
         </a>
         <div class="lb-overlay" id="image-1">
            <a href="#gallery-section" class="lb-close">x Close</a>
            <img src="<?php echo $gallery1image ?>" alt="Image-1"/>
         </div>
      </li>
      <li class="span3">
         <a href="#image-2">
         <img src="<?php echo $gallery2image ?>" alt="Thumbnail-2">
         <span><i class="fa fa-link" aria-hidden="true"></i></span>
         </a>
         <div class="lb-overlay" id="image-2">
            <a href="#gallery-section" class="lb-close">x Close</a>
            <img src="<?php echo $gallery2image ?>" alt="Image-2"/>
         </div>
      </li>
      <li class="span3">
         <a href="#image-3">
         <img src="<?php echo $gallery3image ?>" alt="Thumbnail-3">
         <span><i class="fa fa-link" aria-hidden="true"></i></span>
         </a>
         <div class="lb-overlay" id="image-3">
            <a href="#gallery-section" class="lb-close">x Close</a>
            <img src="<?php echo $gallery3image ?>" alt="Image-3"/>
         </div>
      </li>
      <li class="span3">
         <a href="#image-4">
         <img src="<?php echo $gallery4image ?>" alt="Thumbnail-4">
         <span><i class="fa fa-link" aria-hidden="true"></i></span>
         </a>
         <div class="lb-overlay" id="image-4">
            <a href="#gallery-section" class="lb-close">x Close</a>
            <img src="<?php echo $gallery4image ?>" alt="Image-4"/>
         </div>
      </li>
      <li class="span3">
         <a href="#image-5">
         <img src="<?php echo $gallery5image ?>" alt="Thumbnail-5">
         <span><i class="fa fa-link" aria-hidden="true"></i></span>
         </a>
         <div class="lb-overlay" id="image-5">
            <a href="#gallery-section" class="lb-close">x Close</a>
            <img src="<?php echo $gallery5image ?>" alt="Image-5"/>
         </div>
      </li>
      <li class="span3">
         <a href="#image-6">
         <img src="<?php echo $gallery6image ?>" alt="Thumbnail-6">
         <span><i class="fa fa-link" aria-hidden="true"></i></span>
         </a>
         <div class="lb-overlay" id="image-6">
            <a href="#gallery-section" class="lb-close">x Close</a>
            <img src="<?php echo $gallery6image ?>" alt="Image-6"/>
         </div>
      </li>
      <li class="span3">
         <a href="#image-7">
         <img src="<?php echo $gallery7image ?>" alt="Thumbnail-7">
         <span><i class="fa fa-link" aria-hidden="true"></i></span>
         </a>
         <div class="lb-overlay" id="image-7">
            <a href="#gallery-section" class="lb-close">x Close</a>
            <img src="<?php echo $gallery7image ?>" alt="Image-7"/>
         </div>
      </li>
      <li class="span3">
         <a href="#image-8">
         <img src="<?php echo $gallery8image ?>" alt="Thumbnail-8">
         <span><i class="fa fa-link" aria-hidden="true"></i></span>
         </a>
         <div class="lb-overlay" id="image-8">
            <a href="#gallery-section" class="lb-close">x Close</a>
            <img src="<?php echo $gallery8image ?>" alt="Image-8"/>
         </div>
      </li>
   </ul>
</div>
<?php } ?>
<div class="clearfix"></div>
<!-- End Photo-gallery -->