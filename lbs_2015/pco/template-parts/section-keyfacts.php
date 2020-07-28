<div class="container">
        <div class="row">
            <div class="col-md-12 py-32 w-100">
                <h5>Key Facts</h5>
                <div class="share_links">
                    <?php get_template_part('pco/template-parts/content', 'share')?>
                </div>
                <div class="">
                    <?php   
  
	  $date = DateTime::createFromFormat('Ymd', get_field('data_inizio'));	
		
	 if(get_field('testo_inizio')) { echo '<div class="block"><h3>' . get_field('testo_inizio') . '</h3>';}
			
	if (get_field('data_inizio')) {  echo '<div class="textwidget"><p>' . $date->format('d/m/Y') . '</p></div> </div>';}
		
		  $date_m = DateTime::createFromFormat('Ymd', get_field('data_fine'));	
		
		 if(get_field('data_inizio_testuale')) { echo '<div class="block"><h3>' . get_field('data_inizio_testuale') . '</h3>';}
			
	if (get_field('data_fine')) {  echo '<div class="textwidget"><p>' . $date_m->format('d/m/Y') . '</p></div> </div>';}
		
		  $date_v = DateTime::createFromFormat('Ymd', get_field('data_veneto'));	
		
		 if(get_field('veneto')) { echo '<div class="block"><h3>' . get_field('veneto') . '</h3>';}
			
	if (get_field('data_veneto')) {  echo '<div class="textwidget"><p>' . $date_v->format('d/m/Y') . '</p></div> </div>';}
		
			
	//if(get_field('data_inizio_testuale')) { echo'' . get_field('data_inizio_testuale') .'';}
	
				if(get_field('titolo_costo'))
	{
echo '<div class="block"><h3>'. get_field('titolo_costo').'</h3><div class="textwidget"><p>'. get_field('costo').'</p></div> </div>';
    }
			
			 if(get_field('titolo_durata')) { echo '<div class="block"><h3>'. get_field('titolo_durata').'</h3>' ; }
             if(get_field('durata')) { echo '<div class="textwidget"><p>'. get_field('durata') .'</p></div> </div>'; }
			
			
						if(get_field('codice_corso'))
	{
echo '<div class="block"><h3>'. get_field('testo_codice_corso').'</h3><div class="textwidget"><p>'. get_field('codice_corso').'</p></div> </div>';
    }
		 ?>


                    <?php
				if ( get_field( 'key_facts' ) ) {
					echo '<div class="block"><h3>' . get_field( 'key_facts' ) . '</h3><div class="textwidget"><p>' . get_field( 'campo_key_facts' ) . '</p></div> </div>';
				}

				?>

                    <div class="block">
                        <div class="textwidget">
                            <?php
                       if ( get_field( 'brochure' ) ) {
						echo '<span>' . get_field( 'brochure' ) . '</span>';
						   
					}
					?>

                        </div>
                    </div>

                </div>
                <!-- questa riga quando c'è lo scroll -->
            </div>
        </div>
</div>