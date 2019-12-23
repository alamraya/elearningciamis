<?php require_once(dirname(__FILE__).'/header.php'); ?>
<body <?php echo $OUTPUT->body_attributes(); ?>>
   <?php echo $OUTPUT->standard_top_of_body_html() ?>
   <div id="page">
   <?php require_once(dirname(__FILE__).'/menu.php'); ?>
          <?php require_once(dirname(__FILE__).'/innerbanner.php'); ?>
       <!-- Start Page-content -->
   <div id="page-content" class="row-fluid">
      <div class="container-fluid">
         <section id="region-main" class="span12">
            <?php
               echo $OUTPUT->course_content_header();
               echo $OUTPUT->main_content();
               echo $OUTPUT->course_content_footer();
               ?>
         </section>
      </div>
   </div>
       <!-- End Page-content -->
       	<!-- Start Javascript only for login page -->    
	<script type="text/javascript">
		document.getElementById("username").value = "User Name";
		
		        $('input:text').focus(
		    function(){
		        $(this).val('');
		    });
		
		 document.getElementById("password").value = "Password";
		          $('input:password').focus(
		    function(){
		        $(this).val('');
		    });
		        
		    
	</script>
	<!-- End Javascript only for login page --> 
   <?php require_once(dirname(__FILE__).'/footer.php'); ?>