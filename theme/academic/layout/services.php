<!-- Start Services-section -->
<?php  if ($display_servicesbox) { ?>
<div class="servicesbox">
   <div class="container-fluid">
      <?php if($servicesheading) {?>
      <h1><?php echo $servicesheading ?></h1>
      <span><?php echo $servicestagline ?></span>
      <hr>
      <?php }?>
      <div class="row-fluid">
         <div class="span3 draw meet">
             <div class="con">
            <?php if($servicesbox1icon) {?>
            <a href="<?php echo $servicesbox1url ?>"><img src="<?php echo $servicesbox1icon ?>" alt="" /></a>
            <?php }?>
            <?php if($servicesbox1heading) {?>
            <h5><a href="<?php echo $servicesbox1url ?>"><?php echo $servicesbox1heading ?></a></h5>
            <?php }?>
            <?php if($servicesbox1content) {?>
            <p><?php echo $servicesbox1content ?></p>
            <?php }?>
             </div>
         </div>
         <div class="span3 draw meet">
             <div class="con">
            <?php if($servicesbox2icon) {?>
            <a href="<?php echo $servicesbox2url ?>"><img src="<?php echo $servicesbox2icon ?>" alt="" /></a>
            <?php }?>
            <?php if($servicesbox2heading) {?>
            <h5><a href="<?php echo $servicesbox2url ?>"><?php echo $servicesbox2heading ?></a></h5>
            <?php }?>
            <?php if($servicesbox2content) {?>
            <p><?php echo $servicesbox2content ?></p>
            <?php }?>
             </div>
         </div>
         <div class="span3 draw meet">
             <div class="con">
            <?php if($servicesbox3icon) {?>
            <a href="<?php echo $servicesbox3url ?>"><img src="<?php echo $servicesbox3icon ?>" alt="" /></a>
            <?php }?>
            <?php if($servicesbox3heading) {?>
            <h5><a href="<?php echo $servicesbox3url ?>"><?php echo $servicesbox3heading ?></a></h5>
            <?php }?>
            <?php if($servicesbox3content) {?>
            <p><?php echo $servicesbox3content ?></p>
            <?php }?> 
             </div>
         </div>
         <div class="span3 draw meet">
             <div class="con">
            <?php if($servicesbox4icon) {?>
            <a href="<?php echo $servicesbox4url ?>"><img src="<?php echo $servicesbox4icon ?>" alt="" /></a>
            <?php }?>
            <?php if($servicesbox4heading) {?>
            <h5><a href="<?php echo $servicesbox4url ?>"><?php echo $servicesbox4heading ?></a></h5>
            <?php }?>
            <?php if($servicesbox4content) {?>
            <p><?php echo $servicesbox4content ?></p>
            <?php }?> 
             </div>
         </div>
         <div class="clearfix"></div>
      </div>
   </div>
</div>
<?php } ?>
<!-- End Services-section -->