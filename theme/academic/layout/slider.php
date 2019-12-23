<!-- Start Slider -->
<div class="callbacks_container">
   <ul class="rslides" id="slider3">
      <li>
         <img src="<?php echo $banner1image ?>" alt="First Slider">
         <div class="caption">
            <?php if($banner1heading) { ?>
            <h1 class="regular"><?php echo $banner1heading ?></h1>
            <?php } ?>
            <?php if($banner1tagline) { ?>
            <p><?php echo $banner1tagline ?></p>
            <?php } ?>
            <?php if($banner1buttontext) { ?>
            <a href="<?php echo $banner1buttonurl ?>" class="btn"><?php echo $banner1buttontext ?></a>
            <?php } ?>
            <div class="clearfix"></div>
         </div>
      </li>
      <li>
         <img src="<?php echo $banner2image ?>" alt="Second Slider">
         <div class="caption">
            <?php if($banner2heading) { ?>
            <h1 class="regular"><?php echo $banner2heading ?></h1>
            <?php } ?>
            <?php if($banner2tagline) { ?>
            <p><?php echo $banner2tagline ?></p>
            <?php } ?>
            <?php if($banner2buttontext) { ?>
            <a href="<?php echo $banner2buttonurl ?>" class="btn"><?php echo $banner2buttontext ?></a>
            <?php } ?>
            <div class="clearfix"></div>
         </div>
      </li>
      <li>
         <img src="<?php echo $banner3image ?>" alt="Third Slider">
         <div class="caption">
            <?php if($banner3heading) { ?>
            <h1 class="regular"><?php echo $banner3heading ?></h1>
            <?php } ?>
            <?php if($banner3tagline) { ?>
            <p><?php echo $banner3tagline ?></p>
            <?php } ?>
            <?php if($banner3buttontext) { ?>
            <a href="<?php echo $banner3buttonurl ?>" class="btn"><?php echo $banner3buttontext ?></a>
            <?php } ?>
            <div class="clearfix"></div>
         </div>
      </li>
   </ul>
</div>
<!-- End Slider -->