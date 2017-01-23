<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    
	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>

	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="stylesheet" href="../css/bootstrap.css">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap.css" rel="stylesheet">
    <link href="./style.css" rel="stylesheet">

    <script type='text/javascript' src='js/jquery.js'></script>
    <script type='text/javascript' src='js/bootstrap.js'></script>
    <script type='text/javascript' src='js/main.js'></script>
    <?php wp_head(); ?>
  </head>
  <body>
      <div class="container-fluid">
      <div class="row">
         <div class="col-xs-6 col-md-3 top_leftSection">
                 <div class="logo">              
                 </div>
               <div class="leftSection1">
                         <P>Because Money Doesn’t Come With Instructions</p>
                       </div>
                       <div class="leftSection2">
                         <p>Sure, dealing with your finances can be intimidating.</p>
                       </div>
                       <div class="leftSection3">
                         <p>That's why we take the time to listen to you,
                            learn your goals and then create your plan
                             using John Doe’s philosophies that reflect
                              the latest academic research.
                         </p>
                       </div>
               </div>
                 <div class="col-xs-12 col-md-9 top_rightSection">
                        <div class="rightSectionRapper">
                        <div class="phoneNumber"><p> +1 959 603 6035 </p></div>
                              <div class="menubar">
                                          <div class="menuRaper">
                                            <nav class="menu">
                                              <ul>
                                                  <li><a href="">Home</a></li>
                                                  <li><a href="">About Me</a></li>
                                                  <li><a href="">Financial Planning</a></li>
                                                  <li><a href="">Investment Help</a></li>
                                                  <li><a href="">Advice</a></li>
                                                  <li><a href="">Contacts</a></li>
                                              </ul>
                                            </nav>
                                          </div>
                                            <div class="topButton">
                                                <a href="">Free Consultation</a>
                                            </div>
                                </div>
                        </div>  
                 </div>  
      </div>
    </div>