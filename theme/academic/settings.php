<?php

$settings = null;
defined('MOODLE_INTERNAL') || die;
$ADMIN->add('themes', new admin_category('theme_academic', 'Academic'));

// General setting page.
$temp = new admin_settingpage('theme_academic_general',  get_string('generalsettings', 'theme_academic'));

    // favicon.
    $name = 'theme_academic/favicon';
    $title = get_string('favicon', 'theme_academic');
    $description = get_string('favicondesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Logo file setting.
    $name = 'theme_academic/logo';
    $title = get_string('logo','theme_academic');
    $description = get_string('logodesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Small logo file setting.
    $name = 'theme_academic/smalllogo';
    $title = get_string('smalllogo', 'theme_academic');
    $description = get_string('smalllogodesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'smalllogo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Show site name along with small logo.
    $name = 'theme_academic/sitename';
    $title = get_string('sitename', 'theme_academic');
    $description = get_string('sitenamedesc', 'theme_academic');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // timing.
    $name = 'theme_academic/timing';
    $title = get_string('timing', 'theme_academic');
    $description = get_string('timingdesc', 'theme_academic');
    $default = 'Monday - Friday : 10:00-17:00';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

     // email.
    $name = 'theme_academic/email';
    $title = get_string('email', 'theme_academic');
    $description = get_string('emaildesc', 'theme_academic');
    $default = 'info@academic.edu';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Facebook url setting.
    $name = 'theme_academic/facebook';
    $title = get_string('facebook', 'theme_academic');
    $description = get_string('facebookdesc', 'theme_academic');
    $default = 'http://www.facebook.com/mycollege';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // twitter url setting.
    $name = 'theme_academic/twitter';
    $title = get_string('twitter', 'theme_academic');
    $description = get_string('twitterdesc', 'theme_academic');
    $default = 'http://www.twitter.com/mycollege';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // googleplus url setting.
    $name = 'theme_academic/googleplus';
    $title = get_string('googleplus', 'theme_academic');
    $description = get_string('googleplusdesc', 'theme_academic');
    $default = 'http://www.googleplus.com/mycollege';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // loginbackground file setting.
    $name = 'theme_academic/loginbackground';
    $title = get_string('loginbackground','theme_academic');
    $description = get_string('loginbackgrounddesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'loginbackground');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // innerbanner file setting.
    $name = 'theme_academic/innerbanner';
    $title = get_string('innerbanner','theme_academic');
    $description = get_string('innerbannerdesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'innerbanner');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // innerbannerheading.
    $name = 'theme_academic/innerbannerheading';
    $title = get_string('innerbannerheading', 'theme_academic');
    $description = get_string('innerbannerheadingdesc', 'theme_academic');
    $default = 'eLearning BKPSDM Kabupaten Ciamis';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // innerbannertagline.
    $name = 'theme_academic/innerbannertagline';
    $title = get_string('innerbannertagline', 'theme_academic');
    $description = get_string('innerbannertaglinedesc', 'theme_academic');
    $default = 'Sistem Pembelajaran Berbasis Elektronik Guna Mendukung Terwujudnya Ciamis Sebagai Smart City
    ';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // announcementsbg file setting.
    $name = 'theme_academic/announcementsbg';
    $title = get_string('announcementsbg','theme_academic');
    $description = get_string('announcementsbgdesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'announcementsbg');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // sitebluecolor.
    $name = 'theme_academic/sitebluecolor';
    $title = get_string('sitebluecolor', 'theme_academic');
    $description = get_string('sitebluecolordesc', 'theme_academic');
    $default = '#002b46';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $temp->add($setting);

    // sitegreencolor.
    $name = 'theme_academic/sitegreencolor';
    $title = get_string('sitegreencolor', 'theme_academic');
    $description = get_string('sitegreencolordesc', 'theme_academic');
    $default = '#a72185';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $temp->add($setting);

    // salmoncolor.
    $name = 'theme_academic/salmoncolor';
    $title = get_string('salmoncolor', 'theme_academic');
    $description = get_string('salmoncolordesc', 'theme_academic');
    $default = '#fc6d65';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $temp->add($setting);

    // orangecolor.
    $name = 'theme_academic/orangecolor';
    $title = get_string('orangecolor', 'theme_academic');
    $description = get_string('orangecolordesc', 'theme_academic');
    $default = '#ff9800';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $temp->add($setting);

    // cyancolor.
    $name = 'theme_academic/cyancolor';
    $title = get_string('cyancolor', 'theme_academic');
    $description = get_string('cyancolordesc', 'theme_academic');
    $default = '#009688';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $temp->add($setting);

    // skybluecolor.
    $name = 'theme_academic/skybluecolor';
    $title = get_string('skybluecolor', 'theme_academic');
    $description = get_string('skybluecolordesc', 'theme_academic');
    $default = '#01c0d1';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $temp->add($setting);

    // blockcustombutton.
    $name = 'theme_academic/blockcustombutton';
    $title = get_string('blockcustombutton', 'theme_academic');
    $description = get_string('blockcustombuttondesc', 'theme_academic');
    $default = 'Buy Now';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // blockcustombuttonurl.
    $name = 'theme_academic/blockcustombuttonurl';
    $title = get_string('blockcustombuttonurl', 'theme_academic');
    $description = get_string('blockcustombuttonurldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // blockheading.
    $name = 'theme_academic/blockheading';
    $title = get_string('blockheading', 'theme_academic');
    $description = get_string('blockheadingdesc', 'theme_academic');
    $default = 'Our Blocks';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // blocktagline.
    $name = 'theme_academic/blocktagline';
    $title = get_string('blocktagline', 'theme_academic');
    $description = get_string('blocktaglinedesc', 'theme_academic');
    $default = 'You can see list of blocks here.';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Custom CSS file.
    $name = 'theme_academic/customcss';
    $title = get_string('customcss', 'theme_academic');
    $description = get_string('customcssdesc', 'theme_academic');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


 $ADMIN->add('theme_academic', $temp);

/* Featured Courses Settings */
	$temp = new admin_settingpage('theme_academic_featuredcourses', get_string('featuredcourses', 'theme_academic'));


    $name = 'theme_academic/displayfeaturedcourse';
    $title = get_string('displayfeaturedcourse','theme_academic');
    $description = get_string('displayfeaturedcoursedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    /**  course 1 **/

    $name = 'theme_academic/course1ShowHide';
    $title = get_string('course1ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course1title';
    $title = get_string('course1title', 'theme_academic');
    $description = get_string('course1titledesc', 'theme_academic');
    $default = 'Application software';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_academic/course1image';
    $title = get_string('course1image', 'theme_academic');
    $description = get_string('course1imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_academic/course1caption';
    $title = get_string('course1caption', 'theme_academic');
    $description = get_string('course1captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course1buttontext.
    $name = 'theme_academic/course1buttontext';
    $title = get_string('course1buttontext', 'theme_academic');
    $description = get_string('course1buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_academic/course1url';
    $title = get_string('course1url', 'theme_academic');
    $description = get_string('course1urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /**  course 2 **/

    $name = 'theme_academic/course2ShowHide';
    $title = get_string('course2ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course2title';
    $title = get_string('course2title', 'theme_academic');
    $description = get_string('course2titledesc', 'theme_academic');
    $default = 'System management';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Image.
    $name = 'theme_academic/course2image';
    $title = get_string('course2image', 'theme_academic');
    $description = get_string('course2imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_academic/course2caption';
    $title = get_string('course2caption', 'theme_academic');
    $description = get_string('course2captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course2buttontext.
    $name = 'theme_academic/course2buttontext';
    $title = get_string('course2buttontext', 'theme_academic');
    $description = get_string('course2buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_academic/course2url';
    $title = get_string('course2url', 'theme_academic');
    $description = get_string('course2urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     *  course 3
     */

    $name = 'theme_academic/course3ShowHide';
    $title = get_string('course3ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course3title';
    $title = get_string('course3title', 'theme_academic');
    $description = get_string('course3titledesc', 'theme_academic');
    $default = 'Networking';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Image.
    $name = 'theme_academic/course3image';
    $title = get_string('course3image', 'theme_academic');
    $description = get_string('course3imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_academic/course3caption';
    $title = get_string('course3caption', 'theme_academic');
    $description = get_string('course3captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course3buttontext.
    $name = 'theme_academic/course3buttontext';
    $title = get_string('course3buttontext', 'theme_academic');
    $description = get_string('course3buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_academic/course3url';
    $title = get_string('course3url', 'theme_academic');
    $description = get_string('course3urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * course 4
     */

    $name = 'theme_academic/course4ShowHide';
    $title = get_string('course4ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course4title';
    $title = get_string('course4title', 'theme_academic');
    $description = get_string('course4titledesc', 'theme_academic');
    $default = 'Management information system';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Image.
    $name = 'theme_academic/course4image';
    $title = get_string('course4image', 'theme_academic');
    $description = get_string('course4imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Caption.
    $name = 'theme_academic/course4caption';
    $title = get_string('course4caption', 'theme_academic');
    $description = get_string('course4captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course4buttontext.
    $name = 'theme_academic/course4buttontext';
    $title = get_string('course4buttontext', 'theme_academic');
    $description = get_string('course4buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_academic/course4url';
    $title = get_string('course4url', 'theme_academic');
    $description = get_string('course4urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * course 5
     */

    $name = 'theme_academic/course5ShowHide';
    $title = get_string('course5ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course5title';
    $title = get_string('course5title', 'theme_academic');
    $description = get_string('course5titledesc', 'theme_academic');
    $default = 'Troubleshooting';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Image.
    $name = 'theme_academic/course5image';
    $title = get_string('course5image', 'theme_academic');
    $description = get_string('course5imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Caption.
    $name = 'theme_academic/course5caption';
    $title = get_string('course5caption', 'theme_academic');
    $description = get_string('course5captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course5buttontext.
    $name = 'theme_academic/course5buttontext';
    $title = get_string('course5buttontext', 'theme_academic');
    $description = get_string('course5buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_academic/course5url';
    $title = get_string('course5url', 'theme_academic');
    $description = get_string('course5urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    /*
     * course 6
     */

    $name = 'theme_academic/course6ShowHide';
    $title = get_string('course6ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course6title';
    $title = get_string('course6title', 'theme_academic');
    $description = get_string('course6titledesc', 'theme_academic');
    $default = 'Software development';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Image.
    $name = 'theme_academic/course6image';
    $title = get_string('course6image', 'theme_academic');
    $description = get_string('course6imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_academic/course6caption';
    $title = get_string('course6caption', 'theme_academic');
    $description = get_string('course6captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course6buttontext.
    $name = 'theme_academic/course6buttontext';
    $title = get_string('course6buttontext', 'theme_academic');
    $description = get_string('course6buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_academic/course6url';
    $title = get_string('course6url', 'theme_academic');
    $description = get_string('course6urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * course 7
     */

    $name = 'theme_academic/course7ShowHide';
    $title = get_string('course7ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course7title';
    $title = get_string('course7title', 'theme_academic');
    $description = get_string('course7titledesc', 'theme_academic');
    $default = 'Web designing';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Image.
    $name = 'theme_academic/course7image';
    $title = get_string('course7image', 'theme_academic');
    $description = get_string('course7imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course7image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Caption.
    $name = 'theme_academic/course7caption';
    $title = get_string('course7caption', 'theme_academic');
    $description = get_string('course7captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course7buttontext.
    $name = 'theme_academic/course7buttontext';
    $title = get_string('course7buttontext', 'theme_academic');
    $description = get_string('course7buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_academic/course7url';
    $title = get_string('course7url', 'theme_academic');
    $description = get_string('course7urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    /*
     * course 8
     */

    $name = 'theme_academic/course8ShowHide';
    $title = get_string('course8ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course8title';
    $title = get_string('course8title', 'theme_academic');
    $description = get_string('course8titledesc', 'theme_academic');
    $default = 'System engineering';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Image.
    $name = 'theme_academic/course8image';
    $title = get_string('course8image', 'theme_academic');
    $description = get_string('course8imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course8image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Caption.
    $name = 'theme_academic/course8caption';
    $title = get_string('course8caption', 'theme_academic');
    $description = get_string('course8captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course8buttontext.
    $name = 'theme_academic/course8buttontext';
    $title = get_string('course8buttontext', 'theme_academic');
    $description = get_string('course8buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_academic/course8url';
    $title = get_string('course8url', 'theme_academic');
    $description = get_string('course8urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    /*
     * course 9
     */

    $name = 'theme_academic/course9ShowHide';
    $title = get_string('course9ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course9title';
    $title = get_string('course9title', 'theme_academic');
    $description = get_string('course9titledesc', 'theme_academic');
    $default = 'Multimedia system';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


     // Image.
    $name = 'theme_academic/course9image';
    $title = get_string('course9image', 'theme_academic');
    $description = get_string('course9imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course9image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Caption.
    $name = 'theme_academic/course9caption';
    $title = get_string('course9caption', 'theme_academic');
    $description = get_string('course9captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course9buttontext.
    $name = 'theme_academic/course9buttontext';
    $title = get_string('course9buttontext', 'theme_academic');
    $description = get_string('course9buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_academic/course9url';
    $title = get_string('course9url', 'theme_academic');
    $description = get_string('course9urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    /*
     * course 10
     */

    $name = 'theme_academic/course10ShowHide';
    $title = get_string('course10ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course10title';
    $title = get_string('course10title', 'theme_academic');
    $description = get_string('course10titledesc', 'theme_academic');
    $default = 'Web technology';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Image.
    $name = 'theme_academic/course10image';
    $title = get_string('course10image', 'theme_academic');
    $description = get_string('course10imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course10image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Caption.
    $name = 'theme_academic/course10caption';
    $title = get_string('course10caption', 'theme_academic');
    $description = get_string('course10captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course10buttontext.
    $name = 'theme_academic/course10buttontext';
    $title = get_string('course10buttontext', 'theme_academic');
    $description = get_string('course10buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_academic/course10url';
    $title = get_string('course10url', 'theme_academic');
    $description = get_string('course10urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /** course 11 **/

    $name = 'theme_academic/course11ShowHide';
    $title = get_string('course11ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course11title';
    $title = get_string('course11title', 'theme_academic');
    $description = get_string('course11titledesc', 'theme_academic');
    $default = 'Computer graphics';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Image.
    $name = 'theme_academic/course11image';
    $title = get_string('course11image', 'theme_academic');
    $description = get_string('course11imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course11image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Caption.
    $name = 'theme_academic/course11caption';
    $title = get_string('course11caption', 'theme_academic');
    $description = get_string('course11captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course11buttontext.
    $name = 'theme_academic/course11buttontext';
    $title = get_string('course11buttontext', 'theme_academic');
    $description = get_string('course11buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_academic/course11url';
    $title = get_string('course11url', 'theme_academic');
    $description = get_string('course11urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    /*
     * course 12
     */

    $name = 'theme_academic/course12ShowHide';
    $title = get_string('course12ShowHide','theme_academic');
    $description = get_string('courseShowHidedesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    $name = 'theme_academic/course12title';
    $title = get_string('course12title', 'theme_academic');
    $description = get_string('course12titledesc', 'theme_academic');
    $default = 'Mobile computing';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Image.
    $name = 'theme_academic/course12image';
    $title = get_string('course12image', 'theme_academic');
    $description = get_string('course12imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'course12image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Caption.
    $name = 'theme_academic/course12caption';
    $title = get_string('course12caption', 'theme_academic');
    $description = get_string('course12captiondesc', 'theme_academic');
    $default = 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

// course12buttontext.
    $name = 'theme_academic/course12buttontext';
    $title = get_string('course12buttontext', 'theme_academic');
    $description = get_string('course12buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_academic/course12url';
    $title = get_string('course12url', 'theme_academic');
    $description = get_string('course12urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


$ADMIN->add('theme_academic', $temp);


/* Front Page Settings */
	$temp = new admin_settingpage('theme_academic_frontpage', get_string('frontpagesettings', 'theme_academic'));

    // banner1image file setting.
    $name = 'theme_academic/banner1image';
    $title = get_string('banner1image','theme_academic');
    $description = get_string('banner1imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'banner1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner1heading.
    $name = 'theme_academic/banner1heading';
    $title = get_string('banner1heading', 'theme_academic');
    $description = get_string('banner1headingdesc', 'theme_academic');
    $default = 'Selamat Datang di eLearning BKPSDM Kabupaten Ciamis';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner1tagline.
    $name = 'theme_academic/banner1tagline';
    $title = get_string('banner1tagline', 'theme_academic');
    $description = get_string('banner1taglinedesc', 'theme_academic');
    $default = 'Pembelajaran Berbasis Elektronik Mendukung Terwujudnya Ciamis Sebagai Smart City';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner1buttontext.
    $name = 'theme_academic/banner1buttontext';
    $title = get_string('banner1buttontext', 'theme_academic');
    $description = get_string('banner1buttontextdesc', 'theme_academic');
    $default = 'Daftar';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner1buttonurl.
    $name = 'theme_academic/banner1buttonurl';
    $title = get_string('banner1buttonurl', 'theme_academic');
    $description = get_string('banner1buttonurldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner2image file setting.
    $name = 'theme_academic/banner2image';
    $title = get_string('banner2image','theme_academic');
    $description = get_string('banner2imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'banner2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // banner2heading.
    $name = 'theme_academic/banner2heading';
    $title = get_string('banner2heading', 'theme_academic');
    $description = get_string('banner2headingdesc', 'theme_academic');
    $default = 'Get 100 Courses for FREE';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner2tagline.
    $name = 'theme_academic/banner2tagline';
    $title = get_string('banner2tagline', 'theme_academic');
    $description = get_string('banner2taglinedesc', 'theme_academic');
    $default = 'Build your academic knowledge';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // banner2buttontext.
    $name = 'theme_academic/banner2buttontext';
    $title = get_string('banner2buttontext', 'theme_academic');
    $description = get_string('banner2buttontextdesc', 'theme_academic');
    $default = 'Read More';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner2buttonurl.
    $name = 'theme_academic/banner2buttonurl';
    $title = get_string('banner2buttonurl', 'theme_academic');
    $description = get_string('banner2buttonurldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // banner3image file setting.
    $name = 'theme_academic/banner3image';
    $title = get_string('banner3image','theme_academic');
    $description = get_string('banner3imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'banner3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner3heading.
    $name = 'theme_academic/banner3heading';
    $title = get_string('banner3heading', 'theme_academic');
    $description = get_string('banner3headingdesc', 'theme_academic');
    $default = 'Find The Best Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner3tagline.
    $name = 'theme_academic/banner3tagline';
    $title = get_string('banner3tagline', 'theme_academic');
    $description = get_string('banner3taglinedesc', 'theme_academic');
    $default = 'Study with our experts';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // banner3buttontext.
    $name = 'theme_academic/banner3buttontext';
    $title = get_string('banner3buttontext', 'theme_academic');
    $description = get_string('banner3buttontextdesc', 'theme_academic');
    $default = 'View Our Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // banner3buttonurl.
    $name = 'theme_academic/banner3buttonurl';
    $title = get_string('banner3buttonurl', 'theme_academic');
    $description = get_string('banner3buttonurldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_academic', $temp);


// Services Box.

$temp = new admin_settingpage('theme_academic_servicesbox',  get_string('servicesboxsettings', 'theme_academic'));


    $name = 'theme_academic/displayservicesbox';
    $title = get_string('displayservicesbox','theme_academic');
    $description = get_string('displayservicesboxdesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // servicesboximage file setting.
    $name = 'theme_academic/servicesboximage';
    $title = get_string('servicesboximage','theme_academic');
    $description = get_string('servicesboximagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'servicesboximage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesheading.
    $name = 'theme_academic/servicesheading';
    $title = get_string('servicesheading', 'theme_academic');
    $description = get_string('servicesheadingdesc', 'theme_academic');
    $default = 'OUR SERVICES';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicestagline.
    $name = 'theme_academic/servicestagline';
    $title = get_string('servicestagline', 'theme_academic');
    $description = get_string('servicestaglinedesc', 'theme_academic');
    $default = 'Our services & offers';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox1icon.
    $name = 'theme_academic/servicesbox1icon';
    $title = get_string('servicesbox1icon', 'theme_academic');
    $description = get_string('servicesbox1icondesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'servicesbox1icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox1heading.
    $name = 'theme_academic/servicesbox1heading';
    $title = get_string('servicesbox1heading', 'theme_academic');
    $description = get_string('servicesbox1headingdesc', 'theme_academic');
    $default = 'Online & Offline courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox1content.
    $name = 'theme_academic/servicesbox1content';
    $title = get_string('servicesbox1content', 'theme_academic');
    $description = get_string('servicesbox1contentdesc', 'theme_academic');
    $default = 'There are many variations of passages of Lorem Ipsum available.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox1url.
    $name = 'theme_academic/servicesbox1url';
    $title = get_string('servicesbox1url', 'theme_academic');
    $description = get_string('servicesbox1urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // servicesbox2icon.
    $name = 'theme_academic/servicesbox2icon';
    $title = get_string('servicesbox2icon', 'theme_academic');
    $description = get_string('servicesbox2icondesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'servicesbox2icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox2heading.
    $name = 'theme_academic/servicesbox2heading';
    $title = get_string('servicesbox2heading', 'theme_academic');
    $description = get_string('servicesbox2headingdesc', 'theme_academic');
    $default = 'Notification & Emails';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox2content.
    $name = 'theme_academic/servicesbox2content';
    $title = get_string('servicesbox2content', 'theme_academic');
    $description = get_string('servicesbox2contentdesc', 'theme_academic');
    $default = 'There are many variations of passages of Lorem Ipsum available.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox2url.
    $name = 'theme_academic/servicesbox2url';
    $title = get_string('servicesbox2url', 'theme_academic');
    $description = get_string('servicesbox2urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



    // servicesbox3icon.
    $name = 'theme_academic/servicesbox3icon';
    $title = get_string('servicesbox3icon', 'theme_academic');
    $description = get_string('servicesbox3icondesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'servicesbox3icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox3heading.
    $name = 'theme_academic/servicesbox3heading';
    $title = get_string('servicesbox3heading', 'theme_academic');
    $description = get_string('servicesbox3headingdesc', 'theme_academic');
    $default = 'Advanced Statistics';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox3content.
    $name = 'theme_academic/servicesbox3content';
    $title = get_string('servicesbox3content', 'theme_academic');
    $description = get_string('servicesbox3contentdesc', 'theme_academic');
    $default = 'There are many variations of passages of Lorem Ipsum available.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox3url.
    $name = 'theme_academic/servicesbox3url';
    $title = get_string('servicesbox3url', 'theme_academic');
    $description = get_string('servicesbox3urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // servicesbox4icon.
    $name = 'theme_academic/servicesbox4icon';
    $title = get_string('servicesbox4icon', 'theme_academic');
    $description = get_string('servicesbox4icondesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'servicesbox4icon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox4heading.
    $name = 'theme_academic/servicesbox4heading';
    $title = get_string('servicesbox4heading', 'theme_academic');
    $description = get_string('servicesbox4headingdesc', 'theme_academic');
    $default = 'Social LMS';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox4content.
    $name = 'theme_academic/servicesbox4content';
    $title = get_string('servicesbox4content', 'theme_academic');
    $description = get_string('servicesbox4contentdesc', 'theme_academic');
    $default = 'There are many variations of passages of Lorem Ipsum available.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // servicesbox4url.
    $name = 'theme_academic/servicesbox4url';
    $title = get_string('servicesbox4url', 'theme_academic');
    $description = get_string('servicesbox4urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_academic', $temp);

// Aboutus setting page.
$temp = new admin_settingpage('theme_academic_aboutus',  get_string('aboutussettings', 'theme_academic'));

    $name = 'theme_academic/displayaboutus';
    $title = get_string('displayaboutus','theme_academic');
    $description = get_string('displayaboutusdesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // aboutusheading.
    $name = 'theme_academic/aboutusheading';
    $title = get_string('aboutusheading', 'theme_academic');
    $description = get_string('aboutusheadingdesc', 'theme_academic');
    $default = 'To Know About Us';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutustagline.
    $name = 'theme_academic/aboutustagline';
    $title = get_string('aboutustagline', 'theme_academic');
    $description = get_string('aboutustaglinedesc', 'theme_academic');
    $default = 'Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus1url.
    $name = 'theme_academic/aboutus1url';
    $title = get_string('aboutus1url', 'theme_academic');
    $description = get_string('aboutus1urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus1image.
    $name = 'theme_academic/aboutus1image';
    $title = get_string('aboutus1image', 'theme_academic');
    $description = get_string('aboutus1imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutus1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus1heading.
    $name = 'theme_academic/aboutus1heading';
    $title = get_string('aboutus1heading', 'theme_academic');
    $description = get_string('aboutus1headingdesc', 'theme_academic');
    $default = 'Our College';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus1content.
    $name = 'theme_academic/aboutus1content';
    $title = get_string('aboutus1content', 'theme_academic');
    $description = get_string('aboutus1contentdesc', 'theme_academic');
    $default = 'There are many variations of passages of Lorem Ipsum available.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // aboutus2url.
    $name = 'theme_academic/aboutus2url';
    $title = get_string('aboutus2url', 'theme_academic');
    $description = get_string('aboutus2urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus2image.
    $name = 'theme_academic/aboutus2image';
    $title = get_string('aboutus2image', 'theme_academic');
    $description = get_string('aboutus2imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutus2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus2heading.
    $name = 'theme_academic/aboutus2heading';
    $title = get_string('aboutus2heading', 'theme_academic');
    $description = get_string('aboutus2headingdesc', 'theme_academic');
    $default = 'Admissions';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus2content.
    $name = 'theme_academic/aboutus2content';
    $title = get_string('aboutus2content', 'theme_academic');
    $description = get_string('aboutus2contentdesc', 'theme_academic');
    $default = 'There are many variations of passages of Lorem Ipsum available.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus3url.
    $name = 'theme_academic/aboutus3url';
    $title = get_string('aboutus3url', 'theme_academic');
    $description = get_string('aboutus3urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus3image.
    $name = 'theme_academic/aboutus3image';
    $title = get_string('aboutus3image', 'theme_academic');
    $description = get_string('aboutus3imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutus3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus3heading.
    $name = 'theme_academic/aboutus3heading';
    $title = get_string('aboutus3heading', 'theme_academic');
    $description = get_string('aboutus3headingdesc', 'theme_academic');
    $default = 'Scholarships';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus3content.
    $name = 'theme_academic/aboutus3content';
    $title = get_string('aboutus3content', 'theme_academic');
    $description = get_string('aboutus3contentdesc', 'theme_academic');
    $default = 'There are many variations of passages of Lorem Ipsum available.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // aboutus4url.
    $name = 'theme_academic/aboutus4url';
    $title = get_string('aboutus4url', 'theme_academic');
    $description = get_string('aboutus4urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus4image.
    $name = 'theme_academic/aboutus4image';
    $title = get_string('aboutus4image', 'theme_academic');
    $description = get_string('aboutus4imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'aboutus4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus4heading.
    $name = 'theme_academic/aboutus4heading';
    $title = get_string('aboutus4heading', 'theme_academic');
    $description = get_string('aboutus4headingdesc', 'theme_academic');
    $default = 'Take a Tour';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // aboutus4content.
    $name = 'theme_academic/aboutus4content';
    $title = get_string('aboutus4content', 'theme_academic');
    $description = get_string('aboutus4contentdesc', 'theme_academic');
    $default = 'There are many variations of passages of Lorem Ipsum available.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $ADMIN->add('theme_academic', $temp);

    // Photo Gallery setting page.
    $temp = new admin_settingpage('theme_academic_photogallery',  get_string('photogallerysettings', 'theme_academic'));

    // displayphotogallery.
    $name = 'theme_academic/displayphotogallery';
    $title = get_string('displayphotogallery', 'theme_academic');
    $description = get_string('displayphotogallerydesc', 'theme_academic');
    $default = 1;
    $choices = array(0 => 'No', 1 => 'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // galleryheading.
    $name = 'theme_academic/galleryheading';
    $title = get_string('galleryheading', 'theme_academic');
    $description = get_string('galleryheadingdesc', 'theme_academic');
    $default = 'OUR GALLERY';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // gallerytagline.
    $name = 'theme_academic/gallerytagline';
    $title = get_string('gallerytagline', 'theme_academic');
    $description = get_string('gallerytaglinedesc', 'theme_academic');
    $default = 'Foto Gallery Kegiatan di BKPSDM Kabupaten Ciamis';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // gallery1image setting.
    $name = 'theme_academic/gallery1image';
    $title = get_string('gallery1image', 'theme_academic');
    $description = get_string('gallery1imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gallery1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // gallery2image setting.
    $name = 'theme_academic/gallery2image';
    $title = get_string('gallery2image', 'theme_academic');
    $description = get_string('gallery2imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gallery2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // gallery3image setting.
    $name = 'theme_academic/gallery3image';
    $title = get_string('gallery3image', 'theme_academic');
    $description = get_string('gallery3imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gallery3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // gallery4image setting.
    $name = 'theme_academic/gallery4image';
    $title = get_string('gallery4image', 'theme_academic');
    $description = get_string('gallery4imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gallery4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // gallery5image setting.
    $name = 'theme_academic/gallery5image';
    $title = get_string('gallery5image', 'theme_academic');
    $description = get_string('gallery5imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gallery5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // gallery6image setting.
    $name = 'theme_academic/gallery6image';
    $title = get_string('gallery6image', 'theme_academic');
    $description = get_string('gallery6imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gallery6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // gallery7image setting.
    $name = 'theme_academic/gallery7image';
    $title = get_string('gallery7image', 'theme_academic');
    $description = get_string('gallery7imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gallery7image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // gallery8image setting.
    $name = 'theme_academic/gallery8image';
    $title = get_string('gallery8image', 'theme_academic');
    $description = get_string('gallery8imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'gallery8image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $ADMIN->add('theme_academic', $temp);

/* Footer Settings */
	$temp = new admin_settingpage('theme_academic_footer', get_string('footersettings', 'theme_academic'));

    $name = 'theme_academic/displayclientlogoarea';
    $title = get_string('displayclientlogoarea','theme_academic');
    $description = get_string('displayclientlogoareadesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);


    // clientlogo1.
    $name = 'theme_academic/clientlogo1';
    $title = get_string('clientlogo1', 'theme_academic');
    $description = get_string('clientlogo1desc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // clientlogo2.
    $name = 'theme_academic/clientlogo2';
    $title = get_string('clientlogo2', 'theme_academic');
    $description = get_string('clientlogo2desc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // clientlogo3.
    $name = 'theme_academic/clientlogo3';
    $title = get_string('clientlogo3', 'theme_academic');
    $description = get_string('clientlogo3desc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // clientlogo4.
    $name = 'theme_academic/clientlogo4';
    $title = get_string('clientlogo4', 'theme_academic');
    $description = get_string('clientlogo4desc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // clientlogo5.
    $name = 'theme_academic/clientlogo5';
    $title = get_string('clientlogo5', 'theme_academic');
    $description = get_string('clientlogo5desc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo5');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // clientlogo6.
    $name = 'theme_academic/clientlogo6';
    $title = get_string('clientlogo6', 'theme_academic');
    $description = get_string('clientlogo6desc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo6');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // clientlogo7.
    $name = 'theme_academic/clientlogo7';
    $title = get_string('clientlogo7', 'theme_academic');
    $description = get_string('clientlogo7desc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo7');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // clientlogo8.
    $name = 'theme_academic/clientlogo8';
    $title = get_string('clientlogo8', 'theme_academic');
    $description = get_string('clientlogo8desc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'clientlogo8');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_academic/displayfooter';
    $title = get_string('displayfooter','theme_academic');
    $description = get_string('displayfooterdesc', 'theme_academic');
    $default = 1;
    $choices = array(0=>'No', 1=>'Yes');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // footersection1heading.
    $name = 'theme_academic/footersection1heading';
    $title = get_string('footersection1heading', 'theme_academic');
    $description = get_string('footersection1headingdesc', 'theme_academic');
    $default = 'ABOUT ACADEMIC';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // footersection1content.
    $name = 'theme_academic/footersection1content';
    $title = get_string('footersection1content', 'theme_academic');
    $description = get_string('footersection1contentdesc', 'theme_academic');
    $default = 'Duis autem vel eum iriure dolor inhendrerit in vulputate velit esse molestieconsequat, vel illum dolore eu feugiatnulla facilisis at vero eros.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // footersection1email.
    $name = 'theme_academic/footersection1email';
    $title = get_string('footersection1email', 'theme_academic');
    $description = get_string('footersection1emaildesc', 'theme_academic');
    $default = 'cmsbrand93@gmail.com';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // footersection1contactno.
    $name = 'theme_academic/footersection1contactno';
    $title = get_string('footersection1contactno', 'theme_academic');
    $description = get_string('footersection1contactnodesc', 'theme_academic');
    $default = '+00 123-456-789';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection1address.
    $name = 'theme_academic/footersection1address';
    $title = get_string('footersection1address', 'theme_academic');
    $description = get_string('footersection1addressdesc', 'theme_academic');
    $default = '123 6th St.Melbourne, FL 32904';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // footersection2heading.
    $name = 'theme_academic/footersection2heading';
    $title = get_string('footersection2heading', 'theme_academic');
    $description = get_string('footersection2headingdesc', 'theme_academic');
    $default = 'INFORMATION';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // footersection2link1.
    $name = 'theme_academic/footersection2link1';
    $title = get_string('footersection2link1', 'theme_academic');
    $description = get_string('footersection2link1desc', 'theme_academic');
    $default = 'About Us';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection2link1url.
    $name = 'theme_academic/footersection2link1url';
    $title = get_string('footersection2link1url', 'theme_academic');
    $description = get_string('footersection2link1urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection2link2.
    $name = 'theme_academic/footersection2link2';
    $title = get_string('footersection2link2', 'theme_academic');
    $description = get_string('footersection2link2desc', 'theme_academic');
    $default = 'Our Stories';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection2link2url.
    $name = 'theme_academic/footersection2link2url';
    $title = get_string('footersection2link2url', 'theme_academic');
    $description = get_string('footersection2link2urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection2link3.
    $name = 'theme_academic/footersection2link3';
    $title = get_string('footersection2link3', 'theme_academic');
    $description = get_string('footersection2link3desc', 'theme_academic');
    $default = 'My Account';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection2link3url.
    $name = 'theme_academic/footersection2link3url';
    $title = get_string('footersection2link3url', 'theme_academic');
    $description = get_string('footersection2link3urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // footersection2link4.
    $name = 'theme_academic/footersection2link4';
    $title = get_string('footersection2link4', 'theme_academic');
    $description = get_string('footersection2link4desc', 'theme_academic');
    $default = 'Our History';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection2link4url.
    $name = 'theme_academic/footersection2link4url';
    $title = get_string('footersection2link4url', 'theme_academic');
    $description = get_string('footersection2link4urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection2link5.
    $name = 'theme_academic/footersection2link5';
    $title = get_string('footersection2link5', 'theme_academic');
    $description = get_string('footersection2link5desc', 'theme_academic');
    $default = 'Sprcialist Info';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection2link5url.
    $name = 'theme_academic/footersection2link5url';
    $title = get_string('footersection2link5url', 'theme_academic');
    $description = get_string('footersection2link5urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);



    // footersection3heading.
    $name = 'theme_academic/footersection3heading';
    $title = get_string('footersection3heading', 'theme_academic');
    $description = get_string('footersection3headingdesc', 'theme_academic');
    $default = 'STUDENT HELP';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // footersection3link1.
    $name = 'theme_academic/footersection3link1';
    $title = get_string('footersection3link1', 'theme_academic');
    $description = get_string('footersection3link1desc', 'theme_academic');
    $default = 'My Info';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection3link1url.
    $name = 'theme_academic/footersection3link1url';
    $title = get_string('footersection3link1url', 'theme_academic');
    $description = get_string('footersection3link1urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection3link2.
    $name = 'theme_academic/footersection3link2';
    $title = get_string('footersection3link2', 'theme_academic');
    $description = get_string('footersection3link2desc', 'theme_academic');
    $default = 'My Questions';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection3link2url.
    $name = 'theme_academic/footersection3link2url';
    $title = get_string('footersection3link2url', 'theme_academic');
    $description = get_string('footersection3link2urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection3link3.
    $name = 'theme_academic/footersection3link3';
    $title = get_string('footersection3link3', 'theme_academic');
    $description = get_string('footersection3link3desc', 'theme_academic');
    $default = 'F.A.Q';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection3link3url.
    $name = 'theme_academic/footersection3link3url';
    $title = get_string('footersection3link3url', 'theme_academic');
    $description = get_string('footersection3link3urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // footersection3link4.
    $name = 'theme_academic/footersection3link4';
    $title = get_string('footersection3link4', 'theme_academic');
    $description = get_string('footersection3link4desc', 'theme_academic');
    $default = 'Serch Courses';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection3link4url.
    $name = 'theme_academic/footersection3link4url';
    $title = get_string('footersection3link4url', 'theme_academic');
    $description = get_string('footersection3link4urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection3link5.
    $name = 'theme_academic/footersection3link5';
    $title = get_string('footersection3link5', 'theme_academic');
    $description = get_string('footersection3link5desc', 'theme_academic');
    $default = 'Latest Informations';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // footersection3link5url.
    $name = 'theme_academic/footersection3link5url';
    $title = get_string('footersection3link5url', 'theme_academic');
    $description = get_string('footersection3link5urldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // footersection4heading.
    $name = 'theme_academic/footersection4heading';
    $title = get_string('footersection4heading', 'theme_academic');
    $description = get_string('footersection4headingdesc', 'theme_academic');
    $default = 'INSTAGRAM';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // instagram1image.
    $name = 'theme_academic/instagram1image';
    $title = get_string('instagram1image', 'theme_academic');
    $description = get_string('instagram1imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram1image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // instagram2image.
    $name = 'theme_academic/instagram2image';
    $title = get_string('instagram2image', 'theme_academic');
    $description = get_string('instagram2imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram2image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // instagram3image.
    $name = 'theme_academic/instagram3image';
    $title = get_string('instagram3image', 'theme_academic');
    $description = get_string('instagram3imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram3image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // instagram4image.
    $name = 'theme_academic/instagram4image';
    $title = get_string('instagram4image', 'theme_academic');
    $description = get_string('instagram4imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram4image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // instagram5image.
    $name = 'theme_academic/instagram5image';
    $title = get_string('instagram5image', 'theme_academic');
    $description = get_string('instagram5imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram5image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // instagram6image.
    $name = 'theme_academic/instagram6image';
    $title = get_string('instagram6image', 'theme_academic');
    $description = get_string('instagram6imagedesc', 'theme_academic');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'instagram6image');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // followus.
    $name = 'theme_academic/followus';
    $title = get_string('followus', 'theme_academic');
    $description = get_string('followusdesc', 'theme_academic');
    $default = 'Follow Us';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // followusurl.
    $name = 'theme_academic/followusurl';
    $title = get_string('followusurl', 'theme_academic');
    $description = get_string('followusurldesc', 'theme_academic');
    $default = '#';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);






































































































    // Copyright setting.
    $name = 'theme_academic/copyright';
    $title = get_string('copyright', 'theme_academic');
    $description = get_string('copyrightdesc', 'theme_academic');
    $default = 'CV. ALPHABET';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);;


    // back to top button
    $name = 'theme_academic/backtotop';
    $title = get_string('backtotop','theme_academic');
    $description = get_string('backtotopdesc', 'theme_academic');
    $default = '1';
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default);
    $temp->add($setting);


    // Footnote setting.
    $name = 'theme_academic/footnote';
    $title = get_string('footnote', 'theme_academic');
    $description = get_string('footnotedesc', 'theme_academic');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

$ADMIN->add('theme_academic', $temp);
