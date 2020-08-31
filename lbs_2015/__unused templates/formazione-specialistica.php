<?php

// Exit if accessed directly

if (!defined('ABSPATH')) exit;
/**
 * Template Name: Formazione Specialistica 2017
 * @file formazione-specialistica.php
 */
get_header(2017);?>
<?php   $post = array();
		$post['it'] = 'POST LAUREAM';
		$post['en'] = 'POSTGRADUATE PROGRAMMES';
?>
<?php   $executive = array();
		$executive['it'] = 'FORMAZIONE MANAGERIALE';
		$executive['en'] = 'MANAGERIAL  EDUCATION';
?>

<?php $lingua_corso_en = array();
$lingua_corso_en[ 'it' ] = 'INGLESE';
$lingua_corso_en[ 'en' ] = 'ENGLISH';
?>

<?php $lingua_corso_it = array();
$lingua_corso_it[ 'it' ] = 'ITALIANO';
$lingua_corso_it[ 'en' ] = 'ITALIAN';
?> 



<?php
$sub_home = array();
$sub_home['it'] = 'Usiamo innovativi metodi di insegnamento e track specialistiche per formare profili professionali capaci di affrontare con successo la sfida competitiva globale.';
$sub_home['en'] = 'Through innovative teaching methods and specialist tracks, we trainee professional profiles who are able to successfully face the global competitive challenge.';
?>

<?php
$img_m1 = array();
$img_m1['it'] = '/wp-content/uploads/2018/05/Specialistici.png';
$img_m1['en'] = '/wp-content/uploads/2018/05/Specialistici.png';
?>


<?php
$img_m2 = array();
$img_m2['it'] = '/wp-content/uploads/2018/05/Specialistici.png';
$img_m2['en'] = '/wp-content/uploads/2018/05/Specialistici.png';
?>

<?php
$img_m3 = array();
$img_m3['it'] = '/wp-content/uploads/2018/05/Specialistici.png';
$img_m3['en'] = '/wp-content/uploads/2018/05/Specialistici.png';
?>

<?php
$img_m4 = array();
$img_m4['it'] = '/wp-content/uploads/2018/05/Specialistici.png';
$img_m4['en'] = '/wp-content/uploads/2018/05/Specialistici.png';
?>
<div class="section sub-home sub-home-master" id="sub-home">
	<div class="container">
		<div class="row sub-home-list">
			<div class="sub-home-grid">
				<div class="col-md-12">
					<div class="sub-home-heading">
						<header>
					    <h1> <?php wp_title('', true,''); ?> </h1>
						</header>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="featurette-divider"></div>
<section class="cards courses-cards">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="vid">
					<img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/Rafforza-il-tuo-background-specialistico.jpg" alt="Rafforza il tuo background specialistico" class="img-responsive">
				</div>
			</div>
			<div class="col-md-4 grid-row-quotes grid-col">
				<p>
					<?php
echo $sub_home[ICL_LANGUAGE_CODE]; ?>
				</p>
			</div>
		</div>
		<div class="featurette-divider"></div>
		

<?php
    
      
      
      //var_dump($tax_query);
      $course_cat       = array();
      $course_cat['it'] = 140;
      $course_cat['en'] = 142;
		
		
		//var_dump($tax_query);
$tax_query=array();	 		
$tax_query['it']= 27;
$tax_query['en']= 28;
      
      $args = array(
       'post_type' => 'page',
       'post_status' => 'publish',
       'cat' => $course_cat[ICL_LANGUAGE_CODE],
       'pagination' => true,
       'tax_query' => $tax_query,
       'posts_per_page' => '-1',
       'meta_key' => 'data_inizio',
       'orderby' => 'meta_value_num',
       'meta_query' => array(
        //array(
        // 'key' => 'data_inizio', // which meta to query
        // 'value' => date("Y-m-d"),
        // 'compare' => '>=', // method of comparison
        // 'type' => 'DATE'
        //)
       ),
       'cache_results' => false,
       'suppress_filters' => false,
       'order' => 'ASC'
      );
      //echo '<pre>';
      //var_dump($args);
      //echo '</pre>';
      wp_cache_flush();
      $query = new WP_Query($args);
      
      //$corsi = $wpdb->get_results($query, OBJECT); 
      
      //echo '<h2>WP_Query SQL Query</h2><p>'.$query->request.'</p>';
      //echo '<h2>Last query</h2><p>'.$wpdb->last_query.'</p>';
      
      if ($query->have_posts()) {
       
      ?>
   <section class="stories stories-cards cards">

         
         
 
      <div class="container">
         <div class="row">
            <?php
               while ($query->have_posts()) {
                $query->the_post();
               ?>

            <!--BEGIN MASTER -->
            <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>" class="col-md-4 master-preview">
               <div class="course-item master-thumb">
                 
                 <div class="course-hover">
							<div class="course-name clear-fix">
								<?php
                           $default_attr = array(
                               'class' => "responsive"
                           );
                           the_post_thumbnail('thumb', $default_attr);
                           ?>
								<div class="master-image">
									<h3><span> <?php
                              the_title();
                              ?></span></h3>
									<p>
								
									 <?php $terms = get_the_terms( $post->ID , 'lingue' ); foreach ( $terms as $term )
				   { 
				   echo '<span class="">'.$term->description.'</span>';
				   }?>
								
								
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
                 
        
                  
               </div>
            </a>
            <!--END MASTER -->
            <?php
               }
               
               wp_reset_postdata();
               ?>
            <?php
               } else {
               ?>
            <?php
               if (ICL_LANGUAGE_CODE == 'it') {
               ?>
            <!--
               <div class="info">
                  <p>Non ci sono corsi con le caratteristiche selezionate</p>
                </div>
               -->
            <?php
               } else {
               ?>
            <!--
               <div class="info">
                  <p>No courses found with the requested features</p>
                </div>
               -->
            <?php
               }
               ?>
            <?php
               }
               ?>
         </div>
      </div>
   </section>







 <?php
    
      
      
      //var_dump($tax_query);
      $course_cat       = array();
      $course_cat['it'] = 136;
      $course_cat['en'] = 138;
		
		
		//var_dump($tax_query);
$tax_query=array();	 		
$tax_query['it']= 27;
$tax_query['en']= 28;
      
      $args = array(
       'post_type' => 'page',
       'post_status' => 'publish',
       'cat' => $course_cat[ICL_LANGUAGE_CODE],
       'pagination' => true,
       'tax_query' => $tax_query,
       'posts_per_page' => '-1',
       'meta_key' => 'data_inizio',
       'orderby' => 'meta_value_num',
       'meta_query' => array(
        //array(
        // 'key' => 'data_inizio', // which meta to query
        // 'value' => date("Y-m-d"),
        // 'compare' => '>=', // method of comparison
        // 'type' => 'DATE'
        //)
       ),
       'cache_results' => false,
       'suppress_filters' => false,
       'order' => 'ASC'
      );
      //echo '<pre>';
      //var_dump($args);
      //echo '</pre>';
      wp_cache_flush();
      $query = new WP_Query($args);
      
      //$corsi = $wpdb->get_results($query, OBJECT); 
      
      //echo '<h2>WP_Query SQL Query</h2><p>'.$query->request.'</p>';
      //echo '<h2>Last query</h2><p>'.$wpdb->last_query.'</p>';
      
      if ($query->have_posts()) {
       
      ?>
   <section class="stories stories-cards cards">

         <div class="container">
            <header class="row">
               <div class="col-lg-10">
                			<h2 class="section-h2 h2"><?php echo $executive[ICL_LANGUAGE_CODE]; ?> </h2>	
               </div>
            </header>
         </div>
 
      <div class="container">
         <div class="row">
            <?php
               while ($query->have_posts()) {
                $query->the_post();
               ?>

            <!--BEGIN MASTER -->
            <a title="<?php
               the_title();
               ?>" href="<?php
               the_permalink();
               ?>" class="col-md-4 master-preview">
               <div class="course-item master-thumb">
                 
                 
                 <div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" class="img-responsive">
								<div class="master-image">
									<h3><span> <?php
                              the_title();
                              ?></span></h3>
									<p>
								
									 <?php $terms = get_the_terms( $post->ID , 'lingue' ); foreach ( $terms as $term )
				   { 
				   echo '<span class="">'.$term->description.'</span>';
				   }?>
								
								
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
                 
        
                  
               </div>
            </a>
            <!--END MASTER -->
            <?php
               }
               
               wp_reset_postdata();
               ?>
            <?php
               } else {
               ?>
            <?php
               if (ICL_LANGUAGE_CODE == 'it') {
               ?>
            <!--
               <div class="info">
                  <p>Non ci sono corsi con le caratteristiche selezionate</p>
                </div>
               -->
            <?php
               } else {
               ?>
            <!--
               <div class="info">
                  <p>No courses found with the requested features</p>
                </div>
               -->
            <?php
               }
               ?>
            <?php
               }
               ?>
         </div>
      </div>
   </section>


 <?php

 //var_dump($tax_query);
$course_cat       = array();
$course_cat['it'] = 133;
$course_cat['en'] = 134;
		
		
		//var_dump($tax_query);
$tax_query=array();	 		
$tax_query['it']= 27;
$tax_query['en']= 28;
      
      $args = array(
       'post_type' => 'page',
       'post_status' => 'publish',
       'cat' => $course_cat[ICL_LANGUAGE_CODE],
       'pagination' => true,
       'tax_query' => $tax_query,
       'posts_per_page' => '-1',
       'meta_key' => 'data_inizio',
       'orderby' => 'meta_value_num',
       'meta_query' => array(
        //array(
        // 'key' => 'data_inizio', // which meta to query
        // 'value' => date("Y-m-d"),
        // 'compare' => '>=', // method of comparison
        // 'type' => 'DATE'
        //)
       ),
       'cache_results' => false,
       'suppress_filters' => false,
       'order' => 'ASC'
      );
      //echo '<pre>';
      //var_dump($args);
      //echo '</pre>';
      wp_cache_flush();
      $query = new WP_Query($args);
      
      //$corsi = $wpdb->get_results($query, OBJECT); 
      
      //echo '<h2>WP_Query SQL Query</h2><p>'.$query->request.'</p>';
      //echo '<h2>Last query</h2><p>'.$wpdb->last_query.'</p>';
      
      if ($query->have_posts()) {
       
      ?>
   <section class="stories stories-cards cards">

         <div class="container">
            <header class="row">
               <div class="col-lg-10">
                		<h2 class="section-h2 h2">Summer School</h2>
               </div>
            </header>
         </div>
 
      <div class="container">
         <div class="row">
            <?php
               while ($query->have_posts()) {
                $query->the_post();
               ?>

            <!--BEGIN MASTER -->
            <a title="<?php
               the_title();
               ?>" href="<?php
               the_permalink();
               ?>" class="col-md-4 master-preview">
               <div class="course-item master-thumb">
                 
                 
                 <div class="course-hover">
							<div class="course-name clear-fix">
								<img src="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" data-at2x="<?php echo $img_m3[ICL_LANGUAGE_CODE]; ?>" class="img-responsive">
								<div class="master-image">
									<h3><span> <?php
                              the_title();
                              ?></span></h3>
									<p>
								
									 <?php $terms = get_the_terms( $post->ID , 'lingue' ); foreach ( $terms as $term )
				   { 
				   echo '<span class="course-type">'.$term->description.'</span>';
				   }?>
								
								
									</p>
								</div>
							</div>
							<div class="hover-bg bg-color-1"></div><span class="more-info">More Info</span> </div>
                 
        
                  
               </div>
            </a>
            <!--END MASTER -->
            <?php
               }
               
               wp_reset_postdata();
               ?>
            <?php
               } else {
               ?>
            <?php
               if (ICL_LANGUAGE_CODE == 'it') {
               ?>
            <!--
               <div class="info">
                  <p>Non ci sono corsi con le caratteristiche selezionate</p>
                </div>
               -->
            <?php
               } else {
               ?>
            <!--
               <div class="info">
                  <p>No courses found with the requested features</p>
                </div>
               -->
            <?php
               }
               ?>
            <?php
               }
               ?>
         </div>
      </div>
   </section>





<div class="featurette-divider"></div>

<?php
get_footer(2017); ?>