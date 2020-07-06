<?php
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

/**
 * Template Name: Storie
 * @file storie.php
*/

get_header(2017); 
?>







<div class="section sub-home sub-home-executive-programme" id="sub-home">
  <div class="container">
    <div class="row sub-home-list">
      <div class="sub-home-grid">
        <div class="col-md-12">
          <div class="sub-home-heading">
            <header>
              <h1><?php
the_title();
?></h1>
            </header>
          </div>
        </div>
      </div>
    </div>
</div>
</div>




<div class="featurette-divider"></div>
<section class="cards courses-cards" >
  <div class="container">
    <div class="row">
      <div class="col-md-8 sx">
      <img  src="/wp-content/uploads/2015/09/LUISS-BS-MBA-Graduation-Day-sh.jpg" alt="LUISS BS MBA Graduation Day, a moment that you will always remember
"  class="img-responsive"/> 

      </div>
      <div class="col-md-4 grid-row-quotes grid-col">
        <p>ALUMNI MADE IN LUISS Business School</p>
      </div>
    </div>
  </div>

</section>








<section class="stories stories-cards cards">
  
 <div class="wide-row">
    <div class="container">
      <header class="row">
        <div class="col-lg-10 space">
       <!--   <h2>ALUMNI MADE IN LUISS Business School</h2>-->
        </div>
      </header>
    </div>
  </div>
  
 <?php  
 
 $post_parent['it']=125;
 $post_parent['en']=1558;
 
 $args = array(
	'posts_per_page'   => 7,
	'offset'           => 0,
	'orderby'          => 'ID',
	'order'            => 'DESC',
	'post_type'        => 'page',
	'post_status'      => 'publish',
	'post_parent'      => $post_parent[ICL_LANGUAGE_CODE],
	'suppress_filters' => true );
	 
$storie =  get_posts($args);
if (!(empty( $storie))) { ?> 
<div class="row">
    <div class="container">

<?php 
$s = 0;

$storia_class = array();
$storia_class[1] = 'big with-img';
$storia_class[2] = 'small black';
$storia_class[3] = 'medium with-img';
$storia_class[4] = 'small yellow';
$storia_class[5] = 'medium with-img';
$storia_class[6] = 'small black';
$storia_class[7] = 'big with-img';



foreach(  $storie as $storia )  {
$s++	

?>
<?php if (in_array($s, array(1,3,6))) {  ?>
 <div class="col-lg-4 col-md-8 nopadding">
 <?php } // END if ?>    
     
<div class="<?php echo $storia_class[$s] ?>">
    <article>
    <a href="<?php echo get_permalink($storia->ID) ?>" title="<?php echo readmore(ICL_LANGUAGE_CODE) ?>">
    <?php if (in_array($s, array(1,3,5,7))) { 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $storia->post_title,
);
	echo get_the_post_thumbnail($storia->ID, 'thumbnail',$img_attr);
	
	}?>
	<div class="text">
    <h3 class="headline"><?php echo $storia->post_title ?></h3>
    <?php if (in_array($s, array(1,7))) {  ?>
    <p><?php echo $storia->post_excerpt ?></p>
     <?php } // END if ?> 
    </div>
    </a>
    </article>
</div>
<?php if (in_array($s, array(2,5,7))) {  ?>
</div>
 <?php } // END if ?>    

<?php } // END foreach ?>
    </div><!-- END row -->
  </div><!-- END container -->
<?php } // END if ?>


  
</section>


<?php get_footer(2017); ?>