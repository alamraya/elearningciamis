<?php
$THEME->name = 'academic';
$THEME->doctype = 'html5';
$THEME->parents = array('bootstrapbase','clean');
$THEME->sheets = array('custom','font-awesome','carousel','responsiveslides','gallerystyle');
$THEME->supportscssoptimisation = false;
$THEME->yuicssmodules = array();
$THEME->enable_dock = false;
$THEME->editor_sheets = array();
$THEME->layouts = array(
// The site home page.
'frontpage' => array(
'file' => 'frontpage.php',
'regions' => array('side-pre','side-post'),
'defaultregion' => 'side-pre',
'options' => array('nonavbar'=>true, 'frontpage'=>true),
),
// Main course page.
'course' => array(
'file' => 'course.php',
'regions' => array('side-pre','side-post'),
'defaultregion' => 'side-pre',
'options' => array('langmenu'=>true),
),
// Login page.
'login' => array(
'file' => 'login.php',
'regions' => array(),
'options' => array('langmenu'=>true),
),
);
$THEME->rendererfactory = 'theme_overridden_renderer_factory';
$THEME->csspostprocess = 'theme_academic_process_css';
$THEME->javascripts_footer = array('main','common');
$THEME->javascripts = array('jquery-3.2.1.min','owl.carousel.min','responsiveslides.min');