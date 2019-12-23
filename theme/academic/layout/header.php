<?php
   // Get the HTML for the settings bits.
   $html = theme_academic_get_html_for_settings($OUTPUT, $PAGE);
   
   //General Settings
   
   if (!empty($PAGE->theme->settings->favicon)) {
          $favicon = $PAGE->theme->setting_file_url('favicon', 'favicon');
   } else {
           $favicon = $OUTPUT->image_url('favicon', 'theme');
   }
   if (!empty($PAGE->theme->settings->logo)) {
       	$logourl = $PAGE->theme->setting_file_url('logo', 'logo');
   }else{
     $logourl =$OUTPUT->image_url('/logo', 'theme');
   }
   
   $hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hasfacebook) ? true : false;
   
   $hastwitter    = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hastwitter) ? true : false;
   
   $hasgoogleplus    = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
   // If any of the above social networks are true, sets this to true.
   $hassocialnetworks = ($hasgoogleplus) ? true : false;
   
   if (!empty($PAGE->theme->settings->timing)) {
       $timing = theme_academic_get_setting('timing',true);
   }else {
       $timing = '';
   }
   if (!empty($PAGE->theme->settings->email)) {
       $email = theme_academic_get_setting('email',true);
   }else {
       $email = '';
   }
   if (!empty($PAGE->theme->settings->blockcustombutton)) {
       $blockcustombutton = theme_academic_get_setting('blockcustombutton',true);
   }else {
       $blockcustombutton = '';
   }
   if (!empty($PAGE->theme->settings->blockcustombuttonurl)) {
       $blockcustombuttonurl = theme_academic_get_setting('blockcustombuttonurl',true);
   }else {
       $blockcustombuttonurl = '';
   }
   if (!empty($PAGE->theme->settings->blockheading)) {
       $blockheading = theme_academic_get_setting('blockheading',true);
   }else {
       $blockheading = '';
   }
   if (!empty($PAGE->theme->settings->blocktagline)) {
       $blocktagline = theme_academic_get_setting('blocktagline',true);
   }else {
       $blocktagline = '';
   }
    if (!empty($PAGE->theme->settings->innerbannerheading)) {
        $innerbannerheading = theme_academic_get_setting('innerbannerheading',true);
    }else {
        $innerbannerheading = '';
    }
    if (!empty($PAGE->theme->settings->innerbannertagline)) {
        $innerbannertagline = theme_academic_get_setting('innerbannertagline','format_html');
    }else {
        $innerbannertagline = '';
    }
   // Banner Section
   if (!empty($PAGE->theme->settings->banner1image)) {
   	   $banner1image = $PAGE->theme->setting_file_url('banner1image', 'banner1image');
   } else {
   	    $banner1image = $OUTPUT->image_url('banner1image', 'theme');
   }
   
   if (!empty($PAGE->theme->settings->banner2image)) {
   	   $banner2image = $PAGE->theme->setting_file_url('banner2image', 'banner2image');
   } else {
   	    $banner2image = $OUTPUT->image_url('banner2image', 'theme');
   }
   
   if (!empty($PAGE->theme->settings->banner3image)) {
   	   $banner3image = $PAGE->theme->setting_file_url('banner3image', 'banner3image');
   } else {
   	    $banner3image = $OUTPUT->image_url('banner3image', 'theme');
   }
   
   if (!empty($PAGE->theme->settings->banner1heading)) {
       $banner1heading = theme_academic_get_setting('banner1heading',true);
   }else {
       $banner1heading = '';
   }
   if (!empty($PAGE->theme->settings->banner1tagline)) {
       $banner1tagline = theme_academic_get_setting('banner1tagline',true);
   }else {
       $banner1tagline = '';
   }
   if (!empty($PAGE->theme->settings->banner1content)) {
       $banner1content = theme_academic_get_setting('banner1content',true);
   }else {
       $banner1content = '';
   }
   if (!empty($PAGE->theme->settings->banner1buttontext)) {
       $banner1buttontext = theme_academic_get_setting('banner1buttontext',true);
   }else {
       $banner1buttontext = '';
   }
   if (!empty($PAGE->theme->settings->banner1buttonurl)) {
       $banner1buttonurl = $PAGE->theme->settings->banner1buttonurl;
   }else {
       $banner1buttonurl = '';
   }
   if (!empty($PAGE->theme->settings->banner2heading)) {
       $banner2heading = theme_academic_get_setting('banner2heading',true);
   }else {
       $banner2heading = '';
   }
   if (!empty($PAGE->theme->settings->banner2tagline)) {
       $banner2tagline = theme_academic_get_setting('banner2tagline',true);
   }else {
       $banner2tagline = '';
   }
   if (!empty($PAGE->theme->settings->banner2content)) {
       $banner2content = theme_academic_get_setting('banner2content',true);
   }else {
       $banner2content = '';
   }
   if (!empty($PAGE->theme->settings->banner2buttontext)) {
       $banner2buttontext = theme_academic_get_setting('banner2buttontext',true);
   }else {
       $banner2buttontext = '';
   }
   if (!empty($PAGE->theme->settings->banner2buttonurl)) {
       $banner2buttonurl =$PAGE->theme->settings->banner2buttonurl;
   }else {
       $banner2buttonurl = '';
   }
   if (!empty($PAGE->theme->settings->banner3heading)) {
       $banner3heading = theme_academic_get_setting('banner3heading',true);
   }else {
       $banner3heading = '';
   }
   if (!empty($PAGE->theme->settings->banner3tagline)) {
       $banner3tagline = theme_academic_get_setting('banner3tagline',true);
   }else {
       $banner3tagline = '';
   }
   if (!empty($PAGE->theme->settings->banner3content)) {
       $banner3content = theme_academic_get_setting('banner3content',true);
   }else {
       $banner3content = '';
   }
   if (!empty($PAGE->theme->settings->banner3buttontext)) {
       $banner3buttontext = theme_academic_get_setting('banner3buttontext',true);
   }else {
       $banner3buttontext = '';
   }
   if (!empty($PAGE->theme->settings->banner3buttonurl)) {
       $banner3buttonurl =$PAGE->theme->settings->banner3buttonurl;
   }else {
       $banner3buttonurl = '';
   }
   
   // Featured Courses
   
   $display_course = (empty($PAGE->theme->settings->displayfeaturedcourse) ||$PAGE->theme->settings->displayfeaturedcourse < 1) ? 0 : 1;
   
   $course2ShowHide = (empty($PAGE->theme->settings->course2ShowHide) ||$PAGE->theme->settings->course2ShowHide < 1) ? 0 : 1;
   $course3ShowHide = (empty($PAGE->theme->settings->course3ShowHide) ||$PAGE->theme->settings->course3ShowHide < 1) ? 0 : 1;
   $course4ShowHide = (empty($PAGE->theme->settings->course4ShowHide) ||$PAGE->theme->settings->course4ShowHide < 1) ? 0 : 1;
   $course5ShowHide = (empty($PAGE->theme->settings->course5ShowHide) ||$PAGE->theme->settings->course5ShowHide < 1) ? 0 : 1;
   $course6ShowHide = (empty($PAGE->theme->settings->course6ShowHide) ||$PAGE->theme->settings->course6ShowHide < 1) ? 0 : 1;
   $course7ShowHide = (empty($PAGE->theme->settings->course7ShowHide) ||$PAGE->theme->settings->course7ShowHide < 1) ? 0 : 1;
   $course8ShowHide = (empty($PAGE->theme->settings->course8ShowHide) ||$PAGE->theme->settings->course8ShowHide < 1) ? 0 : 1;
   $course9ShowHide = (empty($PAGE->theme->settings->course9ShowHide) ||$PAGE->theme->settings->course9ShowHide < 1) ? 0 : 1;
   $course10ShowHide = (empty($PAGE->theme->settings->course10ShowHide) ||$PAGE->theme->settings->course10ShowHide < 1) ? 0 : 1;
   $course11ShowHide = (empty($PAGE->theme->settings->course11ShowHide) ||$PAGE->theme->settings->course11ShowHide < 1) ? 0 : 1;
   $course12ShowHide = (empty($PAGE->theme->settings->course12ShowHide) ||$PAGE->theme->settings->course12ShowHide < 1) ? 0 : 1;
   
   /* course1 settings */
   
   $course1ShowHide = (empty($PAGE->theme->settings->course1ShowHide) ||$PAGE->theme->settings->course1ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course1image)) {
   $course1image = $PAGE->theme->setting_file_url('course1image', 'course1image');
   } else {
   $course1image = $OUTPUT->image_url('course/01', 'theme');
   }
   if (!empty($PAGE->theme->settings->course1title)) {
   $course1title = theme_academic_get_setting('course1title',true);
   } 
   else {
   $course1title = '';
   }
   if (!empty($PAGE->theme->settings->course1caption)) {
   $course1caption = theme_academic_get_setting('course1caption',true);
   } 
   else {
   $course1caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course1buttontext)) {
   $course1buttontext = theme_academic_get_setting('course1buttontext',true);
   } 
   else {
   $course1buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course1url)) {
   $course1url = $PAGE->theme->settings->course1url;
   } 
   else {
   $course1url = '#';
   }
   
   /* course2 settings */
   
   $course2ShowHide = (empty($PAGE->theme->settings->course2ShowHide) ||$PAGE->theme->settings->course2ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course2image)) {
   $course2image = $PAGE->theme->setting_file_url('course2image', 'course2image');
   } else {
   $course2image = $OUTPUT->image_url('course/02', 'theme');
   }
   if (!empty($PAGE->theme->settings->course2title)) {
   $course2title = theme_academic_get_setting('course2title',true);
   } 
   else {
   $course2title = '';
   }
   if (!empty($PAGE->theme->settings->course2caption)) {
   $course2caption = theme_academic_get_setting('course2caption',true);
   } 
   else {
   $course2caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course2buttontext)) {
   $course2buttontext = theme_academic_get_setting('course2buttontext',true);
   } 
   else {
   $course2buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course2url)) {
   $course2url = $PAGE->theme->settings->course2url;
   } 
   else {
   $course2url = '#';
   }
   
   /* course3 settings */
   
   $course3ShowHide = (empty($PAGE->theme->settings->course3ShowHide) ||$PAGE->theme->settings->course3ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course3image)) {
   $course3image = $PAGE->theme->setting_file_url('course3image', 'course3image');
   } else {
   $course3image = $OUTPUT->image_url('course/03', 'theme');
   }
   if (!empty($PAGE->theme->settings->course3title)) {
   $course3title = theme_academic_get_setting('course3title',true);
   } 
   else {
   $course3title = '';
   }
   if (!empty($PAGE->theme->settings->course3caption)) {
   $course3caption = theme_academic_get_setting('course3caption',true);
   } 
   else {
   $course3caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course3buttontext)) {
   $course3buttontext = theme_academic_get_setting('course3buttontext',true);
   } 
   else {
   $course3buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course3url)) {
   $course3url = $PAGE->theme->settings->course3url;
   } 
   else {
   $course3url = '#';
   }
   
   /* course4 settings */
   
   $course4ShowHide = (empty($PAGE->theme->settings->course4ShowHide) ||$PAGE->theme->settings->course4ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course4image)) {
   $course4image = $PAGE->theme->setting_file_url('course4image', 'course4image');
   } else {
   $course4image = $OUTPUT->image_url('course/04', 'theme');
   }
   if (!empty($PAGE->theme->settings->course4title)) {
   $course4title = theme_academic_get_setting('course4title',true);
   } 
   else {
   $course4title = '';
   }
   if (!empty($PAGE->theme->settings->course4caption)) {
   $course4caption = theme_academic_get_setting('course4caption',true);
   } 
   else {
   $course4caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course4buttontext)) {
   $course4buttontext = theme_academic_get_setting('course4buttontext',true);
   } 
   else {
   $course4buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course4url)) {
   $course4url = $PAGE->theme->settings->course4url;
   } 
   else {
   $course4url = '#';
   }
   /* course5 settings */
   
   $course5ShowHide = (empty($PAGE->theme->settings->course5ShowHide) ||$PAGE->theme->settings->course5ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course5image)) {
   $course5image = $PAGE->theme->setting_file_url('course5image', 'course5image');
   } else {
   $course5image = $OUTPUT->image_url('course/05', 'theme');
   }
   if (!empty($PAGE->theme->settings->course5title)) {
   $course5title = theme_academic_get_setting('course5title',true);
   } 
   else {
   $course5title = '';
   }
   if (!empty($PAGE->theme->settings->course5caption)) {
   $course5caption = theme_academic_get_setting('course5caption',true);
   } 
   else {
   $course5caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course5buttontext)) {
   $course5buttontext = theme_academic_get_setting('course5buttontext',true);
   } 
   else {
   $course5buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course5url)) {
   $course5url = $PAGE->theme->settings->course5url;
   } 
   else {
   $course5url = '#';
   }
   
   /* course6 settings */
   
   $course6ShowHide = (empty($PAGE->theme->settings->course6ShowHide) ||$PAGE->theme->settings->course6ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course6image)) {
   $course6image = $PAGE->theme->setting_file_url('course6image', 'course6image');
   } else {
   $course6image = $OUTPUT->image_url('course/06', 'theme');
   }
   if (!empty($PAGE->theme->settings->course6title)) {
   $course6title = theme_academic_get_setting('course6title',true);
   } 
   else {
   $course6title = '';
   }
   if (!empty($PAGE->theme->settings->course6caption)) {
   $course6caption = theme_academic_get_setting('course6caption',true);
   } 
   else {
   $course6caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course6buttontext)) {
   $course6buttontext = theme_academic_get_setting('course6buttontext',true);
   } 
   else {
   $course6buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course6url)) {
   $course6url = $PAGE->theme->settings->course6url;
   } 
   else {
   $course6url = '#';
   }
   
   /* course7 settings */
   
   $course7ShowHide = (empty($PAGE->theme->settings->course7ShowHide) ||$PAGE->theme->settings->course7ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course7image)) {
   $course7image = $PAGE->theme->setting_file_url('course7image', 'course7image');
   } else {
   $course7image = $OUTPUT->image_url('course/07', 'theme');
   }
   if (!empty($PAGE->theme->settings->course7title)) {
   $course7title = theme_academic_get_setting('course7title',true);
   } 
   else {
   $course7title = '';
   }
   if (!empty($PAGE->theme->settings->course7caption)) {
   $course7caption = theme_academic_get_setting('course7caption',true);
   } 
   else {
   $course7caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course7buttontext)) {
   $course7buttontext = theme_academic_get_setting('course7buttontext',true);
   } 
   else {
   $course7buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course7url)) {
   $course7url = $PAGE->theme->settings->course7url;
   } 
   else {
   $course7url = '#';
   }
   
   /* course8 settings */
   
   $course8ShowHide = (empty($PAGE->theme->settings->course8ShowHide) ||$PAGE->theme->settings->course8ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course8image)) {
   $course8image = $PAGE->theme->setting_file_url('course8image', 'course8image');
   } else {
   $course8image = $OUTPUT->image_url('course/08', 'theme');
   }
   if (!empty($PAGE->theme->settings->course8title)) {
   $course8title = theme_academic_get_setting('course8title',true);
   } 
   else {
   $course8title = '';
   }
   if (!empty($PAGE->theme->settings->course8caption)) {
   $course8caption = theme_academic_get_setting('course8caption',true);
   } 
   else {
   $course8caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course8buttontext)) {
   $course8buttontext = theme_academic_get_setting('course8buttontext',true);
   } 
   else {
   $course8buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course8url)) {
   $course8url = $PAGE->theme->settings->course8url;
   } 
   else {
   $course8url = '#';
   }
   
   /* course9 settings */
   
   $course9ShowHide = (empty($PAGE->theme->settings->course9ShowHide) ||$PAGE->theme->settings->course9ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course9image)) {
   $course9image = $PAGE->theme->setting_file_url('course9image', 'course9image');
   } else {
   $course9image = $OUTPUT->image_url('course/09', 'theme');
   }
   if (!empty($PAGE->theme->settings->course9title)) {
   $course9title = theme_academic_get_setting('course9title',true);
   } 
   else {
   $course9title = '';
   }
   if (!empty($PAGE->theme->settings->course9caption)) {
   $course9caption = theme_academic_get_setting('course9caption',true);
   } 
   else {
   $course9caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course9buttontext)) {
   $course9buttontext = theme_academic_get_setting('course9buttontext',true);
   } 
   else {
   $course9buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course9url)) {
   $course9url = $PAGE->theme->settings->course9url;
   } 
   else {
   $course9url = '#';
   }
   /* course10 settings */
   
   $course10ShowHide = (empty($PAGE->theme->settings->course10ShowHide) ||$PAGE->theme->settings->course10ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course10image)) {
   $course10image = $PAGE->theme->setting_file_url('course10image', 'course10image');
   } else {
   $course10image = $OUTPUT->image_url('course/10', 'theme');
   }
   if (!empty($PAGE->theme->settings->course10title)) {
   $course10title = theme_academic_get_setting('course10title',true);
   } 
   else {
   $course10title = '';
   }
   if (!empty($PAGE->theme->settings->course10caption)) {
   $course10caption = theme_academic_get_setting('course10caption',true);
   } 
   else {
   $course10caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course10buttontext)) {
   $course10buttontext = theme_academic_get_setting('course10buttontext',true);
   } 
   else {
   $course10buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course10url)) {
   $course10url = $PAGE->theme->settings->course10url;
   } 
   else {
   $course10url = '#';
   }
   /* course11 settings */
   
   $course11ShowHide = (empty($PAGE->theme->settings->course11ShowHide) ||$PAGE->theme->settings->course11ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course11image)) {
   $course11image = $PAGE->theme->setting_file_url('course11image', 'course11image');
   } else {
   $course11image = $OUTPUT->image_url('course/11', 'theme');
   }
   if (!empty($PAGE->theme->settings->course11title)) {
   $course11title = theme_academic_get_setting('course11title',true);
   } 
   else {
   $course11title = '';
   }
   if (!empty($PAGE->theme->settings->course11caption)) {
   $course11caption = theme_academic_get_setting('course11caption',true);
   } 
   else {
   $course11caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course11buttontext)) {
   $course11buttontext = theme_academic_get_setting('course11buttontext',true);
   } 
   else {
   $course11buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course11url)) {
   $course11url = $PAGE->theme->settings->course11url;
   } 
   else {
   $course11url = '#';
   }
   /* course12 settings */
   
   $course12ShowHide = (empty($PAGE->theme->settings->course12ShowHide) ||$PAGE->theme->settings->course12ShowHide < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->course12image)) {
   $course12image = $PAGE->theme->setting_file_url('course12image', 'course12image');
   } else {
   $course12image = $OUTPUT->image_url('course/12', 'theme');
   }
   if (!empty($PAGE->theme->settings->course12title)) {
   $course12title = theme_academic_get_setting('course12title',true);
   } 
   else {
   $course12title = '';
   }
   if (!empty($PAGE->theme->settings->course12caption)) {
   $course12caption = theme_academic_get_setting('course12caption',true);
   } 
   else {
   $course12caption = ' ';
   }
   if (!empty($PAGE->theme->settings->course12buttontext)) {
   $course12buttontext = theme_academic_get_setting('course12buttontext',true);
   } 
   else {
   $course12buttontext = ' ';
   }
   if (!empty($PAGE->theme->settings->course12url)) {
   $course12url = $PAGE->theme->settings->course12url;
   } 
   else {
   $course12url = '#';
   }
   // Service Box Settings
   $display_servicesbox = (empty($PAGE->theme->settings->displayservicesbox) ||$PAGE->theme->settings->displayservicesbox < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->servicesheading)) {
       $servicesheading = theme_academic_get_setting('servicesheading',true);
   }else {
       $servicesheading = '';
   }
   if (!empty($PAGE->theme->settings->servicestagline)) {
       $servicestagline = theme_academic_get_setting('servicestagline',true);
   }else {
       $servicestagline = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox1icon)) {
      $servicesbox1icon = $PAGE->theme->setting_file_url('servicesbox1icon', 'servicesbox1icon');
   } else {
       $servicesbox1icon = $OUTPUT->image_url('icon1', 'theme');
   }
   if (!empty($PAGE->theme->settings->servicesbox1heading)) {
       $servicesbox1heading = theme_academic_get_setting('servicesbox1heading',true);
   }else {
       $servicesbox1heading = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox1content)) {
       $servicesbox1content = theme_academic_get_setting('servicesbox1content',true);
   }else {
       $servicesbox1content = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox1url)) {
       $servicesbox1url =$PAGE->theme->settings->servicesbox1url;
   }else {
       $servicesbox1url = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox2icon)) {
      $servicesbox2icon = $PAGE->theme->setting_file_url('servicesbox2icon', 'servicesbox2icon');
   } else {
      $servicesbox2icon = $OUTPUT->image_url('icon2', 'theme');
   }
   if (!empty($PAGE->theme->settings->servicesbox2heading)) {
       $servicesbox2heading = theme_academic_get_setting('servicesbox2heading',true);
   }else {
       $servicesbox2heading = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox2content)) {
       $servicesbox2content = theme_academic_get_setting('servicesbox2content',true);
   }else {
       $servicesbox2content = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox2url)) {
       $servicesbox2url =$PAGE->theme->settings->servicesbox2url;
   }else {
       $servicesbox2url = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox3icon)) {
      $servicesbox3icon = $PAGE->theme->setting_file_url('servicesbox3icon', 'servicesbox3icon');
   } else {
       $servicesbox3icon = $OUTPUT->image_url('icon3', 'theme');
   }
   if (!empty($PAGE->theme->settings->servicesbox3heading)) {
       $servicesbox3heading = theme_academic_get_setting('servicesbox3heading',true);
   }else {
       $servicesbox3heading = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox3content)) {
       $servicesbox3content = theme_academic_get_setting('servicesbox3content',true);
   }else {
       $servicesbox3content = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox3url)) {
       $servicesbox3url =$PAGE->theme->settings->servicesbox3url;
   }else {
       $servicesbox3url = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox4icon)) {
      $servicesbox4icon = $PAGE->theme->setting_file_url('servicesbox4icon', 'servicesbox4icon');
   } else {
       $servicesbox4icon = $OUTPUT->image_url('icon4', 'theme');
   }
   if (!empty($PAGE->theme->settings->servicesbox4heading)) {
       $servicesbox4heading = theme_academic_get_setting('servicesbox4heading',true);
   }else {
       $servicesbox4heading = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox4content)) {
       $servicesbox4content = theme_academic_get_setting('servicesbox4content',true);
   }else {
       $servicesbox4content = '';
   }
   if (!empty($PAGE->theme->settings->servicesbox4url)) {
       $servicesbox4url =$PAGE->theme->settings->servicesbox4url;
   }else {
       $servicesbox4url = '';
   }
   /* About Us */
   $display_aboutus = (empty($PAGE->theme->settings->displayaboutus) ||$PAGE->theme->settings->displayaboutus < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->aboutusheading)) {
       $aboutusheading = theme_academic_get_setting('aboutusheading',true);
   }else {
       $aboutusheading = '';
   }
   if (!empty($PAGE->theme->settings->aboutustagline)) {
       $aboutustagline = theme_academic_get_setting('aboutustagline',true);
   }else {
       $aboutustagline = '';
   }
   
   if (!empty($PAGE->theme->settings->aboutus1url)) {
       $aboutus1url = theme_academic_get_setting('aboutus1url',true);
   }else {
       $aboutus1url = '';
   }
   if (!empty($PAGE->theme->settings->aboutus1image)) {
      $aboutus1image = $PAGE->theme->setting_file_url('aboutus1image', 'aboutus1image');
   } else {
       $aboutus1image = $OUTPUT->image_url('header-block-icon1', 'theme');
   }
   if (!empty($PAGE->theme->settings->aboutus1heading)) {
       $aboutus1heading = theme_academic_get_setting('aboutus1heading',true);
   }else {
       $aboutus1heading = '';
   }
   if (!empty($PAGE->theme->settings->aboutus1content)) {
       $aboutus1content = theme_academic_get_setting('aboutus1content',true);
   }else {
       $aboutus1content = '';
   }
   if (!empty($PAGE->theme->settings->aboutus2url)) {
       $aboutus2url = theme_academic_get_setting('aboutus2url',true);
   }else {
       $aboutus2url = '';
   }
   if (!empty($PAGE->theme->settings->aboutus2image)) {
      $aboutus2image = $PAGE->theme->setting_file_url('aboutus2image', 'aboutus2image');
   } else {
       $aboutus2image = $OUTPUT->image_url('header-block-icon2', 'theme');
   }
   if (!empty($PAGE->theme->settings->aboutus2heading)) {
       $aboutus2heading = theme_academic_get_setting('aboutus2heading',true);
   }else {
       $aboutus2heading = '';
   }
   if (!empty($PAGE->theme->settings->aboutus2content)) {
       $aboutus2content = theme_academic_get_setting('aboutus2content',true);
   }else {
       $aboutus2content = '';
   }
   if (!empty($PAGE->theme->settings->aboutus3url)) {
       $aboutus3url = theme_academic_get_setting('aboutus3url',true);
   }else {
       $aboutus3url = '';
   }
   if (!empty($PAGE->theme->settings->aboutus3image)) {
      $aboutus3image = $PAGE->theme->setting_file_url('aboutus3image', 'aboutus3image');
   } else {
       $aboutus3image = $OUTPUT->image_url('header-block-icon3', 'theme');
   }
   if (!empty($PAGE->theme->settings->aboutus3heading)) {
       $aboutus3heading = theme_academic_get_setting('aboutus3heading',true);
   }else {
       $aboutus3heading = '';
   }
   if (!empty($PAGE->theme->settings->aboutus3content)) {
       $aboutus3content = theme_academic_get_setting('aboutus3content',true);
   }else {
       $aboutus3content = '';
   } 
   if (!empty($PAGE->theme->settings->aboutus4url)) {
       $aboutus4url = theme_academic_get_setting('aboutus4url',true);
   }else {
       $aboutus4url = '';
   }
   if (!empty($PAGE->theme->settings->aboutus4image)) {
      $aboutus4image = $PAGE->theme->setting_file_url('aboutus4image', 'aboutus4image');
   } else {
       $aboutus4image = $OUTPUT->image_url('header-block-icon4', 'theme');
   }
   if (!empty($PAGE->theme->settings->aboutus4heading)) {
       $aboutus4heading = theme_academic_get_setting('aboutus4heading',true);
   }else {
       $aboutus4heading = '';
   }
   if (!empty($PAGE->theme->settings->aboutus4content)) {
       $aboutus4content = theme_academic_get_setting('aboutus4content',true);
   }else {
       $aboutus4content = '';
   } 
   
   /* Photo Gallery */
   	$displayphotogallery = (empty($PAGE->theme->settings->displayphotogallery)||$PAGE->theme->settings->displayphotogallery < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->galleryheading)) {
       $galleryheading = theme_academic_get_setting('galleryheading',true);
   }else {
       $galleryheading = '';
   }
   
   if (!empty($PAGE->theme->settings->gallerytagline)) {
       $gallerytagline = theme_academic_get_setting('gallerytagline',true);
   }else {
       $gallerytagline = '';
   }
   
   if (!empty($PAGE->theme->settings->gallery1image)) {
       $gallery1image = $PAGE->theme->setting_file_url('gallery1image', 'gallery1image');
   } else {
       $gallery1image = $OUTPUT->image_url('gallery/01', 'theme');
   }
   	if (!empty($PAGE->theme->settings->gallery2image)) {
   	   $gallery2image = $PAGE->theme->setting_file_url('gallery2image', 'gallery2image');
   	} else {
   	    $gallery2image = $OUTPUT->image_url('gallery/02', 'theme');
   	}
   	if (!empty($PAGE->theme->settings->gallery3image)) {
   	   $gallery3image = $PAGE->theme->setting_file_url('gallery3image', 'gallery3image');
   	} else {
   	    $gallery3image = $OUTPUT->image_url('gallery/03', 'theme');
   	}
   	if (!empty($PAGE->theme->settings->gallery4image)) {
   	   $gallery4image = $PAGE->theme->setting_file_url('gallery4image', 'gallery4image');
   	} else {
   	    $gallery4image = $OUTPUT->image_url('gallery/04', 'theme');
   	}
   	if (!empty($PAGE->theme->settings->gallery5image)) {
   	   $gallery5image = $PAGE->theme->setting_file_url('gallery5image', 'gallery5image');
   	} else {
   	    $gallery5image = $OUTPUT->image_url('gallery/05', 'theme');
   	}
   	if (!empty($PAGE->theme->settings->gallery6image)) {
   	   $gallery6image = $PAGE->theme->setting_file_url('gallery6image', 'gallery6image');
   	} else {
   	    $gallery6image = $OUTPUT->image_url('gallery/06', 'theme');
   	}
   	if (!empty($PAGE->theme->settings->gallery7image)) {
   	   $gallery7image = $PAGE->theme->setting_file_url('gallery7image', 'gallery7image');
   	} else {
   	    $gallery7image = $OUTPUT->image_url('gallery/07', 'theme');
   	}
   	if (!empty($PAGE->theme->settings->gallery8image)) {
   	   $gallery8image = $PAGE->theme->setting_file_url('gallery8image', 'gallery8image');
   	} else {
   	    $gallery8image = $OUTPUT->image_url('gallery/08', 'theme');
   	}
   
   // Footer Settings
   $display_clientlogoarea = (empty($PAGE->theme->settings->displayclientlogoarea) ||$PAGE->theme->settings->displayclientlogoarea < 1) ? 0 : 1;
   if (!empty($PAGE->theme->settings->clientlogo1)) {
      $clientlogo1 = $PAGE->theme->setting_file_url('clientlogo1', 'clientlogo1');
   } else {
       $clientlogo1 = $OUTPUT->image_url('clientlogos/clogo_1', 'theme');
   }
   if (!empty($PAGE->theme->settings->clientlogo2)) {
      $clientlogo2 = $PAGE->theme->setting_file_url('clientlogo2', 'clientlogo2');
   } else {
       $clientlogo2 = $OUTPUT->image_url('clientlogos/clogo_2', 'theme');
   }
   if (!empty($PAGE->theme->settings->clientlogo3)) {
      $clientlogo3 = $PAGE->theme->setting_file_url('clientlogo3', 'clientlogo3');
   } else {
       $clientlogo3 = $OUTPUT->image_url('clientlogos/clogo_3', 'theme');
   }
   if (!empty($PAGE->theme->settings->clientlogo4)) {
      $clientlogo4 = $PAGE->theme->setting_file_url('clientlogo4', 'clientlogo4');
   } else {
       $clientlogo4 = $OUTPUT->image_url('clientlogos/clogo_4', 'theme');
   }
   if (!empty($PAGE->theme->settings->clientlogo5)) {
      $clientlogo5 = $PAGE->theme->setting_file_url('clientlogo5', 'clientlogo5');
   } else {
       $clientlogo5 = $OUTPUT->image_url('clientlogos/clogo_1', 'theme');
   }
   if (!empty($PAGE->theme->settings->clientlogo6)) {
      $clientlogo6 = $PAGE->theme->setting_file_url('clientlogo6', 'clientlogo6');
   } else {
       $clientlogo6 = $OUTPUT->image_url('clientlogos/clogo_2', 'theme');
   }
   if (!empty($PAGE->theme->settings->clientlogo7)) {
      $clientlogo7 = $PAGE->theme->setting_file_url('clientlogo7', 'clientlogo7');
   } else {
       $clientlogo7 = $OUTPUT->image_url('clientlogos/clogo_3', 'theme');
   }
   if (!empty($PAGE->theme->settings->clientlogo8)) {
      $clientlogo8 = $PAGE->theme->setting_file_url('clientlogo8', 'clientlogo8');
   } else {
       $clientlogo8 = $OUTPUT->image_url('clientlogos/clogo_4', 'theme');
   }
   $display_footer = (empty($PAGE->theme->settings->displayfooter) ||$PAGE->theme->settings->displayfooter < 1) ? 0 : 1;
   
   if (!empty($PAGE->theme->settings->footersection1heading)) {
       $footersection1heading = theme_academic_get_setting('footersection1heading','format_html');
   }else {
       $footersection1heading = '';
   }
   if (!empty($PAGE->theme->settings->footersection1content)) {
       $footersection1content = theme_academic_get_setting('footersection1content',true);
   }else {
       $footersection1content = '';
   }
   if (!empty($PAGE->theme->settings->footersection1email)) {
       $footersection1email = theme_academic_get_setting('footersection1email',true);
   }else {
       $footersection1email = '';
   }
   if (!empty($PAGE->theme->settings->footersection1contactno)) {
       $footersection1contactno = theme_academic_get_setting('footersection1contactno',true);
   }else {
       $footersection1contactno = '';
   }
   if (!empty($PAGE->theme->settings->footersection1address)) {
       $footersection1address = theme_academic_get_setting('footersection1address',true);
   }else {
       $footersection1address = '';
   }
   if (!empty($PAGE->theme->settings->footersection2heading)) {
       $footersection2heading = theme_academic_get_setting('footersection2heading',true);
   }else {
       $footersection2heading = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link1)) {
       $footersection2link1 = theme_academic_get_setting('footersection2link1',true);
   }else {
       $footersection2link1 = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link1url)) {
       $footersection2link1url = theme_academic_get_setting('footersection2link1url',true);
   }else {
       $footersection2link1url = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link2)) {
       $footersection2link2 = theme_academic_get_setting('footersection2link2',true);
   }else {
       $footersection2link2 = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link2url)) {
       $footersection2link2url = theme_academic_get_setting('footersection2link2url',true);
   }else {
       $footersection2link2url = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link3)) {
       $footersection2link3 = theme_academic_get_setting('footersection2link3',true);
   }else {
       $footersection2link3 = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link3url)) {
       $footersection2link3url = theme_academic_get_setting('footersection2link3url',true);
   }else {
       $footersection2link3url = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link4)) {
       $footersection2link4 = theme_academic_get_setting('footersection2link4',true);
   }else {
       $footersection2link4 = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link4url)) {
       $footersection2link4url = theme_academic_get_setting('footersection2link4url',true);
   }else {
       $footersection2link4url = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link5)) {
       $footersection2link5 = theme_academic_get_setting('footersection2link5',true);
   }else {
       $footersection2link5 = '';
   }
   if (!empty($PAGE->theme->settings->footersection2link5url)) {
       $footersection2link5url = theme_academic_get_setting('footersection2link5url',true);
   }else {
       $footersection2link5url = '';
   }   
   if (!empty($PAGE->theme->settings->footersection3heading)) {
       $footersection3heading = theme_academic_get_setting('footersection3heading',true);
   }else {
       $footersection3heading = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link1)) {
       $footersection3link1 = theme_academic_get_setting('footersection3link1',true);
   }else {
       $footersection3link1 = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link1url)) {
       $footersection3link1url = theme_academic_get_setting('footersection3link1url',true);
   }else {
       $footersection3link1url = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link2)) {
       $footersection3link2 = theme_academic_get_setting('footersection3link2',true);
   }else {
       $footersection3link2 = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link2url)) {
       $footersection3link2url = theme_academic_get_setting('footersection3link2url',true);
   }else {
       $footersection3link2url = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link3)) {
       $footersection3link3 = theme_academic_get_setting('footersection3link3',true);
   }else {
       $footersection3link3 = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link3url)) {
       $footersection3link3url = theme_academic_get_setting('footersection3link3url',true);
   }else {
       $footersection3link3url = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link4)) {
       $footersection3link4 = theme_academic_get_setting('footersection3link4',true);
   }else {
       $footersection3link4 = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link4url)) {
       $footersection3link4url = theme_academic_get_setting('footersection3link4url',true);
   }else {
       $footersection3link4url = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link5)) {
       $footersection3link5 = theme_academic_get_setting('footersection3link5',true);
   }else {
       $footersection3link5 = '';
   }
   if (!empty($PAGE->theme->settings->footersection3link5url)) {
       $footersection3link5url = theme_academic_get_setting('footersection3link5url',true);
   }else {
       $footersection3link5url = '';
   }
   
   if (!empty($PAGE->theme->settings->footersection4heading)) {
       $footersection4heading = theme_academic_get_setting('footersection4heading',true);
   }else {
       $footersection4heading = '';
   }
   if (!empty($PAGE->theme->settings->instagram1image)) {
      $instagram1image = $PAGE->theme->setting_file_url('instagram1image', 'instagram1image');
   } else {
       $instagram1image = $OUTPUT->image_url('instagram-1-image', 'theme');
   }
   if (!empty($PAGE->theme->settings->instagram2image)) {
      $instagram2image = $PAGE->theme->setting_file_url('instagram2image', 'instagram2image');
   } else {
       $instagram2image = $OUTPUT->image_url('instagram-2-image', 'theme');
   }
   if (!empty($PAGE->theme->settings->instagram3image)) {
      $instagram3image = $PAGE->theme->setting_file_url('instagram3image', 'instagram3image');
   } else {
       $instagram3image = $OUTPUT->image_url('instagram-3-image', 'theme');
   }
   if (!empty($PAGE->theme->settings->instagram4image)) {
      $instagram4image = $PAGE->theme->setting_file_url('instagram4image', 'instagram4image');
   } else {
       $instagram4image = $OUTPUT->image_url('instagram-4-image', 'theme');
   }
   if (!empty($PAGE->theme->settings->instagram5image)) {
      $instagram5image = $PAGE->theme->setting_file_url('instagram5image', 'instagram5image');
   } else {
       $instagram5image = $OUTPUT->image_url('instagram-5-image', 'theme');
   }
   if (!empty($PAGE->theme->settings->instagram6image)) {
      $instagram6image = $PAGE->theme->setting_file_url('instagram6image', 'instagram6image');
   } else {
       $instagram6image = $OUTPUT->image_url('instagram-6-image', 'theme');
   }
   
   if (!empty($PAGE->theme->settings->followus)) {
       $followus = theme_academic_get_setting('followus',true);
   }else {
       $followus = '';
   }
   if (!empty($PAGE->theme->settings->followusurl)) {
       $followusurl = theme_academic_get_setting('followusurl',true);
   }else {
       $followusurl = '';
   }
   
   if (!empty($PAGE->theme->settings->copyright)) {
       $hascopyright = theme_academic_get_setting('copyright',true);
   } 
   else {
       $hascopyright = '';
   }
   
   if (!empty($PAGE->theme->settings->backtotop)) {
     $PAGE->requires->js('/theme/academic/yui/bttotop.js');
   }
   
   $display_subscribe = (empty($PAGE->theme->settings->displaysubscribe) ||$PAGE->theme->settings->displaysubscribe < 1) ? 0 : 1;
   
   echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
   <head>
      <title><?php echo $OUTPUT->page_title(); ?></title>
      <link rel="shortcut icon" href="<?php echo $favicon; ?>" />
      <?php echo $OUTPUT->standard_head_html() ?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
         @font-face {
         font-family: 'open_sansregular';
         src: url('<?php echo $CFG->wwwroot ?>/theme/academic/font/opensans-regular-webfont.eot');
         src: url('<?php echo $CFG->wwwroot ?>/theme/academic/font/opensans-regular-webfont.eot?#iefix') format('embedded-opentype'),
         url('<?php echo $CFG->wwwroot ?>/theme/academic/font/opensans-regular-webfont.woff') format('woff'),
         url('<?php echo $CFG->wwwroot ?>/theme/academic/font/opensans-regular-webfont.ttf') format('truetype'),
         url('<?php echo $CFG->wwwroot ?>/theme/academic/fonts/opensans-regular-webfont.svg#open_sansregular') format('svg');
         font-weight: normal;
         font-style: normal;
         }
         @font-face {
         font-family: 'FontAwesome';
         src: url('<?php echo $CFG->wwwroot;?>/theme/academic/font/fontawesome-webfont.eot?v=3.2.1');
         src: url('<?php echo $CFG->wwwroot;?>/theme/academic/font/fontawesome-webfont.eot?#iefix&v=3.2.1') format('embedded-opentype'), 
         url('<?php echo $CFG->wwwroot;?>/theme/academic/font/fontawesome-webfont.woff?v=3.2.1') 
         format('woff'), 
         url('<?php echo $CFG->wwwroot;?>/theme/academic/font/fontawesome-webfont.ttf?v=3.2.1') format('truetype'), 
         url('<?php echo $CFG->wwwroot;?>/theme/academic/font/fontawesome-webfont.svg#fontawesomeregular?v=3.2.1') 
         format('svg');
         font-weight: normal;
         font-style: normal;
         }
      </style>
   </head>