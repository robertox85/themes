<?php
   /*
   Template Name: AFC 2017
   */
   get_header(2017);
   ?>
<?php
   $sub_intro       = array();
   $sub_intro['it'] = 'I ruoli di chi opera nella funzione Amministrazione, Finanza e Controllo stanno subendo cambiamenti profondi che richiedono l&#8217;integrazione di competenze e capacità ampie e diversificate. I nostri Open Programmes rispondono a questi fabbisogni. Arricchendo e completando le tue conoscenze, potrai affrontare con successo nuove sfide professionali.';
   $sub_intro['en'] = 'The roles of managers and professionals in Accounting, Finance and Control Unit are undergoing deep changes which require the integration of large and different skills and abilities. Our Open Programmes respond to these needs . Developping and integrating your knowledge, you can successfully face new challenges .';
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
        <?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>
         <div class="col-md-8 sx">
            <img  src="/wp-content/uploads/2018/06/Finanza-Aziendale_Landing.jpg" alt="Prendi-il-controllo-della-tua-carriera"  class="img-responsive"/>
         </div>
         <div class="col-md-4 grid-row-quotes grid-col">
            <p><?php
               echo $sub_intro[ICL_LANGUAGE_CODE];
               ?></p>
         </div>
      </div>
   </div>
   <?php
      $tematica       = array();
      $tematica['it'] = 'Tematiche';
      $tematica['en'] = '';
      ?>
</section>     
   <section  class="body-section bg_2_perche">
      <div class="container">
         <div class="row">
            <div class="col-lg-10">
               <h2 class="block-title h2 white-style"><?php
                  echo $tematica[ICL_LANGUAGE_CODE];
                  ?></h2>
            </div>
            <?php
               $terms = get_terms(tematiche, array(
                'orderby' => 'name',
                'order' => 'ASC',
                'exclude' => array(
                 81,
                 101,
                 348,
                 103,
                 96,
                 34
                )
               ));
               
               
               $page_title = trim(html_entity_decode(get_the_title()));
               
               if (!empty($terms) && !is_wp_error($terms)) {
                foreach ($terms as $term) {
               ?>
            <div class="col-md-4">
               <div class="feature">
                  <h3 class="white-style block-title"> <a href="<?php
                     echo $term->slug;
                     ?>"><?php
                     echo $term->name;
                     ?></a> </h3>
               </div>
            </div>
            <?php
               } // END foreach
               } // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
               ?>
            <?php
               $select_first_choice['it'] = 'Scegli una tematica';
               $select_first_choice['en'] = 'Choose an Area';
               ?>
            <div class="tematiche-mobile">
               <select id="tematica" name="tematica" class="col-xs-12" >
                  <option value=""><?php
                     echo $select_first_choice[ICL_LANGUAGE_CODE];
                     ?></option>
                  <?php
                     $terms      = get_terms('tematiche');
                     $page_title = trim(html_entity_decode(get_the_title()));
                     
                     if (!empty($terms) && !is_wp_error($terms)) {
                      foreach ($terms as $term) {
                       $selected = '';
                       if (!(strcmp($term->name, $page_title))) {
                        $selected = ' selected="selected" ';
                       }
                       echo '<option value="' . $term->term_id . '" ' . $selected . ' data-url="' . $term->slug . '">' . $term->name . '</option>';
                      } // END foreach
                     } // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
                     ?>
               </select>
               <script>
                  document.getElementById('tematica').onchange = function() {
                  window.location.href = this.children[this.selectedIndex].getAttribute('data-url');
                  }
               </script> 
            </div>
         </div>
      </div>
   </section>
   <?php
      $query_tax_value = 131;
      $tax_query       = array();
      $tax_query[]     = array(
       'taxonomy' => 'lunghezza_corsi',
       'field' => 'id',
       'terms' => (int) $query_tax_value
      );
      
      
      $query_tax_value = 29;
      $tax_query[]     = array(
       'taxonomy' => 'tematiche',
       'field' => 'id',
       'terms' => (int) $query_tax_value
      );
      
      
      
      
      
      //var_dump($tax_query);
      $course_cat       = array();
      $course_cat['it'] = 61;
      $course_cat['en'] = 62;
      
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
      <div class="wide-row">
         <div class="container">
            <header class="row">
               <div class="col-lg-10">
                  <h2>Executive Master</h2>
               </div>
            </header>
         </div>
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
               ?>" class="col-md-4 master-preview fix-box">
               <div class="course-item master-thumb" style="padding: 5px;">
                  <div class="course-hover">
                     <div class="course-name clear-fix">
                        <?php
                           $default_attr = array(
                               'class' => "responsive"
                           );
                           the_post_thumbnail('thumb', $default_attr);
                           ?>
                        <div class="exe-image">
                           <h3><span> <?php
                              the_title();
                              ?></span></h3>
                        </div>
                     </div>
                     <div class="hover-bg bg-color-1"></div>
                     <span class="more-info">More Info</span> 
                  </div>
                  <div class="course-date bg-color-1 clear-fix">
                     <h3  class="course-info  nopadding col-md-5" ><span class="glyphicon glyphicon-calendar"></span> Lunghezza corsi:</h3>
                     <p class="col-md-5">
                        <?php
                           $terms = get_the_terms($post->ID, 'lunghezza_corsi');
                           foreach ($terms as $term) {
                               echo '<span class="course-type">' . $term->name . '</span>';
                           }
                           ?>
                     </p>
                     <div class="clearfix"></div>
                     <h3  class="course-info  nopadding col-md-5"> <span class="glyphicon glyphicon-tags"></span> Roma:</h3>
                     <p class="col-md-5"><span class="course-type"><?php
                        echo get_date(get_field('data_inizio'), "standard");
                        ?></span></p>
                        
                      <div class="clearfix"></div>  
                      <?php     
                       if(get_field('data_fine')) { echo '<h3  class="course-info  nopadding col-md-5"> <span class="glyphicon glyphicon-tags"></span> Milano:</h3>
                     <p class="col-md-5">
                       <span class="course-type">' . get_date(get_field('data_fine'), "standard") . '</span></p>  ';}
                     ?>  
                  </div>
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
      $query_tax_value = 25;
      $tax_query       = array();
      $tax_query[]     = array(
       'taxonomy' => 'lunghezza_corsi',
       'field' => 'id',
       'terms' => (int) $query_tax_value
      );
      
      
      $query_tax_value = 29;
      $tax_query[]     = array(
       'taxonomy' => 'tematiche',
       'field' => 'id',
       'terms' => (int) $query_tax_value
      );
      
      
      
      
      
      //var_dump($tax_query);
      $course_cat       = array();
      $course_cat['it'] = 61;
      $course_cat['en'] = 62;
      
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
      <div class="wide-row">
         <div class="container">
            <header class="row">
               <div class="col-lg-10">
                  <h2>Executive Program</h2>
               </div>
            </header>
         </div>
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
               ?>" class="col-md-4 master-preview fix-box">
               <div class="course-item master-thumb" style="padding: 5px;">
                  <div class="course-hover">
                     <div class="course-name clear-fix">
                        <?php
                           $default_attr = array(
                               'class' => "responsive"
                           );
                           the_post_thumbnail('thumb', $default_attr);
                           ?>
                        <div class="exe-image">
                           <h3><span> <?php
                              the_title();
                              ?></span></h3>
                        </div>
                     </div>
                     <div class="hover-bg bg-color-1"></div>
                     <span class="more-info">More Info</span> 
                  </div>
                  <div class="course-date bg-color-1 clear-fix">
                     <h3  class="course-info  nopadding col-md-5" ><span class="glyphicon glyphicon-calendar"></span> Lunghezza corsi:</h3>
                     <p class="col-md-5">
                        <?php
                           $terms = get_the_terms($post->ID, 'lunghezza_corsi');
                           foreach ($terms as $term) {
                               echo '<span class="course-type">' . $term->name . '</span>';
                           }
                           ?>
                     </p>
                     <div class="clearfix"></div>
                     <h3  class="course-info  nopadding col-md-5"> <span class="glyphicon glyphicon-tags"></span> Roma:</h3>
                     <p class="col-md-5"><span class="course-type"><?php
                        echo get_date(get_field('data_inizio'), "standard");
                        ?></span></p>
                     <div class="clearfix"></div>
                        <?php     
                       if(get_field('data_fine')) { echo '<h3  class="course-info  nopadding col-md-5"> <span class="glyphicon glyphicon-tags"></span> Milano:</h3>
                     <p class="col-md-5">
                       <span class="course-type">' . get_date(get_field('data_fine'), "standard") . '</span></p>  ';}
                     ?>   
                  </div>
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
               $query_tax_value = 26;
               $tax_query       = array();
               $tax_query[]     = array(
                'taxonomy' => 'lunghezza_corsi',
                'field' => 'id',
                'terms' => (int) $query_tax_value
               );
               
               
               $query_tax_value = 29;
               $tax_query[]     = array(
                'taxonomy' => 'tematiche',
                'field' => 'id',
                'terms' => (int) $query_tax_value
               );
               
               
               
               
               
               //var_dump($tax_query);
               $course_cat       = array();
               $course_cat['it'] = 61;
               $course_cat['en'] = 62;
               
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
             //    array(
               //   'key' => 'data_inizio', // which meta to query
               //   'value' => date("Y-m-d"),
                 // 'compare' => '>=', // method of comparison
                 // 'type' => 'DATE'
                // )
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
               
               if ($query->have_posts()) { ?>
               
 <section class="stories stories-cards cards">
      <div class="wide-row">
         <div class="container">
            <header class="row">
               <div class="col-lg-10">
                  <h2>Executive Course</h2>
               </div>
            </header>
         </div>
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
               ?>" class="col-md-4 master-preview fix-box">
               <div class="course-item master-thumb" style="padding: 5px;">
                  <div class="course-hover">
                     <div class="course-name clear-fix">
                        <?php
                           $default_attr = array(
                               'class' => "responsive"
                           );
                           the_post_thumbnail('thumb', $default_attr);
                           ?>
                        <div class="exe-image">
                           <h3><span> <?php
                              the_title();
                              ?></span></h3>
                        </div>
                     </div>
                     <div class="hover-bg bg-color-1"></div>
                     <span class="more-info">More Info</span> 
                  </div>
                  <div class="course-date bg-color-1 clear-fix">
                     <h3  class="course-info  nopadding col-md-5" ><span class="glyphicon glyphicon-calendar"></span> Lunghezza corsi:</h3>
                     <p class="col-md-5">
                        <?php
                           $terms = get_the_terms($post->ID, 'lunghezza_corsi');
                           foreach ($terms as $term) {
                               echo '<span class="course-type">' . $term->name . '</span>';
                           }
                           ?>
                     </p>
                     <div class="clearfix"></div>
                     <h3  class="course-info  nopadding col-md-5"> <span class="glyphicon glyphicon-tags"></span> Roma:</h3>
                     <p class="col-md-5"><span class="course-type"><?php
                        echo get_date(get_field('data_inizio'), "standard");
                        ?></span></p>
                        <div class="clearfix"></div>
                    <?php     
                       if(get_field('data_fine')) { echo '<h3  class="course-info  nopadding col-md-5"> <span class="glyphicon glyphicon-tags"></span> Milano:</h3>
                     <p class="col-md-5">
                       <span class="course-type">' . get_date(get_field('data_fine'), "standard") . '</span></p>  ';}
                     ?>    
                  </div>
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
	 </div><?php edit_post_link('<p class="button arr featured-links">Modifica Pagina</p>', ''); ?>
   </div>
   </section>  
<?php
   get_footer(2017);
   ?>