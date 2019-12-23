<?php
   $regionmainbox = 'span12';
   $regionmain = 'span12';
   $sidepre = 'span3';
   $sidepost = 'span3 ';
   ?>
<?php require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
   <?php require_once(dirname(__FILE__).'/blocks.php'); ?>    
   <?php require_once(dirname(__FILE__).'/slider.php'); ?>
   <?php require_once(dirname(__FILE__).'/featured-course.php'); ?>
   <?php require_once(dirname(__FILE__).'/services.php'); ?>
   <?php require_once(dirname(__FILE__).'/aboutus.php'); ?>
   <!-- Start Tab Section -->   
   <div class="container-fluid">
      <div class="tabs-holder">
         <ul class="nav nav-tabs custom-nav-tabs" role="tablist">
            <li class="category"><a href="#categorylist" aria-controls="category" role="tab" data-toggle="tab"></a></li>
            <li class="combo"><a href="#combocourses" aria-controls="combocourses" role="tab" data-toggle="tab"></a></li>
         </ul>
         <!-- Tab panes -->
         <div class="tab-content">
            <div role="tabpanel" class="tab-pane" id="categorylist"></div>
            <div role="tabpanel" class="tab-pane" id="combocourses"></div>
         </div>
      </div>
   </div>
   <!-- End Tab Section -->
       <!-- Start Page-content -->
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
               <section id="region-main" class="<?php echo $regionmain; ?>">
                  <?php
                     echo $OUTPUT->course_content_header();
                     echo $OUTPUT->main_content();
                     echo $OUTPUT->course_content_footer();
                     ?>
               </section>
            </div>
         </div>
      </div>
   </div>
       <!-- End Page-content -->
   <!-- Start Latest News -->    
   <div id="latest-news" class="row-fluid">
      <div class="container-fluid">
      </div>
   </div>
   <!-- End Latest News -->
   <?php require_once(dirname(__FILE__).'/photogallery.php'); ?>  
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>