<?php require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
       <!-- Start Page-content -->
      <div id="page-content" class="clearfix">
         <?php echo $OUTPUT->main_content(); ?>
      </div>
       <!-- End Page-content -->
   </div>
   <?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>