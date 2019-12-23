<!-- Start About Us Section -->     
<?php  if ($display_aboutus) { ?>
<div class="header-blocks clearfix container-fluid">
   <?php if($aboutusheading) { ?>
   <h1><?php echo $aboutusheading ?></h1>
   <div class="heading__line">
      <div><i class='fa fa-graduation-cap' aria-hidden='true'></i></div>
   </div>
   <?php } ?>
   <?php if($aboutustagline) { ?>
   <p class="tagline"><?php echo $aboutustagline ?></p>
   <?php } ?>
   <div class="row-fluid">
      <a href="<?php echo $aboutus1url ?>" class="span3 hvr-float-shadow">
         <img src="<?php echo $aboutus1image ?>" alt=""/>
         <h4><?php echo $aboutus1heading ?></h4>
         <p><?php echo $aboutus1content ?></p>
      </a>
      <a href="<?php echo $aboutus2url ?>" class="span3 hvr-float-shadow">
         <img src="<?php echo $aboutus2image ?>" alt=""/>
         <h4><?php echo $aboutus2heading ?></h4>
         <p><?php echo $aboutus2content ?></p>
      </a>
      <a href="<?php echo $aboutus3url ?>" class="span3 hvr-float-shadow">
         <img src="<?php echo $aboutus3image ?>" alt=""/>
         <h4><?php echo $aboutus3heading ?></h4>
         <p><?php echo $aboutus3content ?></p>
      </a>
      <a href="<?php echo $aboutus4url ?>" class="span3 hvr-float-shadow">
         <img src="<?php echo $aboutus4image ?>" alt=""/>
         <h4><?php echo $aboutus4heading ?></h4>
         <p><?php echo $aboutus4content ?></p>
      </a>
   </div>
</div>
<?php } ?>
<!-- End About Us Section -->