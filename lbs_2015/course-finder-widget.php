
<?php $finder_button = array();
		$finder_button['it'] = 'Inizia da qui';
		$finder_button['en'] = 'Starts from here';
?>



<div class="finder-text">
        <h2 class="finder-title">Programme Explorer</h2>
        <hr class="hide-for-small" style="color:#202020" />
        <!--<p class="finder-description"> --><?php // echo $finder_description [ICL_LANGUAGE_CODE] ; ?><!--</p> -->
        <div class="featurette-divider"></div>
        
        <form id="form-course-finder" action="/offerta-formativa/course-finder/" method="get">
        <ul>
        
        
        <?php $selected_taxonomies =array('lingue','lunghezza_corsi','tematiche');	  
$custom_taxonomies = corsi_get_taxonomies($selected_taxonomies);
			$choose_label['it']='scegli';
			$choose_label['en']='choose';
 foreach ($custom_taxonomies as $taxonomy) {  ?>
 
 <li><label style="color:#3c3c3c"><?php echo $taxonomy[ICL_LANGUAGE_CODE]['label'] ?>
        <select name="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>" id="<?php echo $taxonomy[ICL_LANGUAGE_CODE]['name'] ?>" >
		<option value=""><?php echo $choose_label[ICL_LANGUAGE_CODE]; ?></option>
		<?php 
        $terms = get_terms($taxonomy[ICL_LANGUAGE_CODE]['name']);


 		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
     	foreach ( $terms as $term ) { 
		$selected ='';
		if(  isset($_GET[$taxonomy[ICL_LANGUAGE_CODE]['name']])  && ($taxonomy[ICL_LANGUAGE_CODE]['name']==$term->term_id) ) {
		$selected =' selected="selected" ';	
		}
		echo '<option value="'.$term->term_id.'" '.$selected.'>'.$term->name.'</option>';
     	} // END foreach
		} // END if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
		?>
        </select></label></li>
 

<?php } // END foreach ?>
        
        
        
    
        
        </ul>
        <?php $finder_send_button = array();
		$finder_send_button['it'] = 'Trova il tuo corso';
		$finder_send_button['en'] = 'Find your Course';
		
		
		
		
		?>
         <p><button class="finder-send-button" type="submit"><?php echo $finder_send_button[ICL_LANGUAGE_CODE]; ?></button>
        </form>
        
        <p><button class="finder-button" type="button"><?php echo $finder_button [ICL_LANGUAGE_CODE]; ?></button></p>
      </div>
    </div>
    
