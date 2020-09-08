<?php

// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Fondi OK
 *
 *
 */
?>
<?php get_header(); ?>
<body class="master">
<div id="wrapper">
  <div id="header">
    <div id="tratt-header"></div>
    <div id="tratt-header2"></div>
    <div  class="container-16"> 
      <!--form-->
      <div id="international"> <a href="http://www.lbs.luiss.it/en" title="English version">English version</a> </div>
      <div id="logo"><a href="http://www.businessschool.luiss.it/"><img src="http://www.lbs.luiss.it/wp-content/themes/lbs/img/logo.png" title="LUISS Business School"></a></div>
      <?php
include ('nav.php');
?>
    </div>
  </div>
  <div id="testata"></div>
  <div class="container-16">
    <div class="container_16 clearfix">
      <div class="grid_16">
        <div class="breadcrumb">
         <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }
	?>
        </div>
        <div id="contienislide">
          <div class="slideshow"> <img src="http://www.lbs.luiss.it/wp-content/themes/macom/images/slide/slide_macom_00.jpg" alt=""  width="960" height="238" /> <img src="http://www.lbs.luiss.it/wp-content/themes/macom/images/slide/slide_macom_01.jpg" alt=""  width="960" height="238"  /> <img src="http://www.lbs.luiss.it/wp-content/themes/macom/images/slide/slide_macom_02.jpg" alt=""  width="960" height="238"  /> <img src="http://www.lbs.luiss.it/wp-content/themes/macom/images/slide/slide_macom_03.jpg" alt=""  width="960" height="238"  /> </div>
        </div>
      </div>
      <div class="grid_12 alpha" id="area">
        <h1>
          <?php bloginfo('name'); ?>
        </h1>
        <div class="hr"></div>
        <h2>
          <?php the_title(); ?>
        </h2>
         <div class="hr"></div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
        <?php endwhile; endif; ?>
        <div class="clear"></div>
      </div>
      <?php get_sidebar(); ?>
    </div>
  </div>
</div>
<!-- Google Code for SITO - Master Fondi Europei Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 951940219;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "csx1CIfmu14Q--j1xQM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/951940219/?label=csx1CIfmu14Q--j1xQM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<?php get_footer(); ?>
