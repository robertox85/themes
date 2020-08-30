<?php wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
?>
<div class="row">
        <!--BEGIN widget course finder -->
        
        <?php 
		$finder_description = array();
			$finder_description['it'] = 'Vuoi scoprire qual è il corso ideale per te? Scoprilo in 3 semplici step!';
		$finder_description['en'] = "Do you want to discover your ideal course? Here are 3 simple steps of our Programme Finder!";

		$finder_button_open = array();
		$finder_button_open['it'] = 'Inizia da qui';
		$finder_button_open['en'] = 'Find your Course';
		
		$finder_button_close = array();
		$finder_button_close['it'] = 'Chiudi';
		$finder_button_close['en'] = 'Close';
		
		$finder_button_button_send = array();
		$finder_button_button_send['it'] = 'Trova il tuo corso';
		$finder_button_button_send['en'] = 'Find your Course';
		
		$finder_form_action = array();
		$finder_form_action['it'] = '/offerta-formativa/course-finder/';
		$finder_form_action['en'] = '/en/programs/course-finder/';
		
	
		
		?> 
        

      <div class="col-12 col-md-8 offset-lg-2 my-80 p-48 section-title bg__white" style="border: 1px solid #e8e8e8;">
        <h3 class="color__gold pb-26">Programme Explorer</h3>
        <p class="big pb-24"><?php echo $finder_description[ICL_LANGUAGE_CODE]; ?></p>
        <form id="form-course-finder" action="<?php echo $finder_form_action[ICL_LANGUAGE_CODE] ?>" method="get">
        <ul>

        <?php $selected_taxonomies =array('lingue','lunghezza_corsi','tematiche');	  
$custom_taxonomies = corsi_get_taxonomies($selected_taxonomies);
		$choose_label['it']='scegli';
			$choose_label['en']='choose';
 foreach ($custom_taxonomies as $taxonomy) {  ?>
 
 <li><label><?php echo $taxonomy[ICL_LANGUAGE_CODE]['label'] ?>
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
       
        <p class="mt-48"><button class="finder-send-button" type="submit"><?php echo $finder_button_button_send[ICL_LANGUAGE_CODE]; ?></button>
        </form>
        
        <p><button class="finder-button" type="button"><?php echo $finder_button_open[ICL_LANGUAGE_CODE]; ?></button></p>

    </div>




      <script>
	$(function() {  
		$( ".finder-button" ).click(function() {
		if ($(this).hasClass('close-finder-form')) {
		$('#form-course-finder').slideUp('fast');
		$(this).removeClass('close-finder-form');
		$(this).text('<?php echo $finder_button_open[ICL_LANGUAGE_CODE] ?>');
		} else {
		$('#form-course-finder').slideDown('fast');
		$(this).addClass('close-finder-form');
		$(this).text('<?php  echo $finder_button_close[ICL_LANGUAGE_CODE] ?>');
		}
		});
	});

	</script>
       
      <!--END widget course finder -->     

</div>