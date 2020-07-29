<div class="container">
    <div class="row py-24">
        <div class="col-xs-12 col-md-8 w-100 keyfacts-box">
            <h5 class="color__white">Key Facts</h5>
            <div class="d-flex flex-lg-row flex-column justify-content-between align-items-start justify-content-lg-between align-items-lg-center">
                <?php  
                    $date = DateTime::createFromFormat('Ymd', get_field('data_inizio'));	
		
                    if(get_field('testo_inizio')) { echo '<div class="block"><p class="color__white text-uppercase p-0 mt-32 mb-16">' . get_field('testo_inizio') . '</p>';}
			
                    if (get_field('data_inizio')) {  echo '<div class="textwidget"><h6 class="color__white mt-0 mb-32">' . $date->format('d M Y') . '</h6></div> </div>';}
		
                    $date_m = DateTime::createFromFormat('Ymd', get_field('data_fine'));	
		
                    if(get_field('data_inizio_testuale')) { echo '<div class="block"><p class="color__white text-uppercase p-0 mt-32 mb-16">' . get_field('data_inizio_testuale') . '</p>';}
			
                    if (get_field('data_fine')) {  echo '<div class="textwidget"><h6 class="color__white mt-0 mb-32"' . $date_m->format('d M Y') . '</h6></div> </div>';}
		
                    $date_v = DateTime::createFromFormat('Ymd', get_field('data_veneto'));	

                    if(get_field('veneto')) { echo '<div class="block"><p class="color__white text-uppercase p-0 mt-32 mb-16">' . get_field('veneto') . '</p>';}
			
                    if(get_field('data_veneto')) {  echo '<div class="textwidget"><h6 class="color__white mt-0 mb-32"' . $date_v->format('d M Y') . '</h6></div> </div>';}
	
                    if(get_field('titolo_costo')) {
                    echo '<div class="block"><p class="color__white text-uppercase p-0 mt-32 mb-16">'. get_field('titolo_costo').'</p><div class="textwidget"><h6 class="color__white mt-0 mb-32">'. get_field('costo').'</h6></div></div>';
                    }
			
                    if(get_field('titolo_durata')) { echo '<div class="block"><p class="color__white text-uppercase p-0 mt-32 mb-16">' . get_field('titolo_durata').'</p>' ; }
                    
                    if(get_field('durata')) { echo '<div class="textwidget"><h6 class="color__white mt-0 mb-32">'. get_field('durata') .'</h6></div> </div>'; }
			
                    if(get_field('codice_corso')) {
                    echo '<div class="block"><p class="color__white text-uppercase p-0 mt-32 mb-16">'. get_field('testo_codice_corso').'</p><div class="textwidget"><h6 class="color__white mt-0 mb-32">'. get_field('codice_corso').'</h6></div> </div>'; }
                
                    ?>

                    <?php
                    if ( get_field( 'key_facts' ) ) {
					echo '<div class="block"><p class="color__white text-uppercase p-0 mt-32 mb-16">' . get_field( 'key_facts' ) . '</p><div class="textwidget"><h6 class="color__white mt-0 mb-32">' . get_field('campo_key_facts') . '</h6></div> </div>'; }
                    ?>
            </div>
            <!-- questa riga quando c'è lo scroll -->
        </div>
         <div class="col-xs-12 col-md-4 block">
                        <div class="share_links">
                <?php get_template_part('pco/template-parts/content', 'share')?>
            </div>
                        <div class="textwidget keyfacts-box">
                        <?php
                        if ( get_field( 'brochure' ) ) {
				        echo '<span>' . get_field( 'brochure' ) . '</span>'; } ?>
                        </div>
                    </div>
    </div>
</div>