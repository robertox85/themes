<div class="container colonna_key_facts">
    <div class="row row-default pt-32 pb-16">
        <div class="col-xs-12 col-lg-8 w-100 keyfacts-box">
            <h5 class="color__white">Key Facts</h5>
            <div
                class="d-flex flex-row flex-lg-nowrap flex-wrap justify-content-start align-items-start align-items-lg-center">
                <?php  
                    $date = DateTime::createFromFormat('Ymd', get_field('data_inizio'));	
		
                    if(get_field('testo_inizio')) { echo '<div class="block pr-16 pr-lg-48"><p class="color__white text-uppercase p-0 mt-lg-32 mb-lg-16 mt-16 mb-8">' . get_field('testo_inizio') . '</p>';}
			
                    if (get_field('data_inizio')) {  echo '<div class="textwidget"><p class="big color__white mt-0 mb-32"><strong>' . $date->format('d M Y') . '</strong></p></div> </div>';}
                
		
                    $date_m = DateTime::createFromFormat('Ymd', get_field('data_fine'));	
		
                    if(get_field('data_inizio_testuale')) { echo '<div class="block pr-16 pr-lg-48"><p class="color__white text-uppercase p-0 mt-lg-32 mb-lg-16 mt-16 mb-8">' . get_field('data_inizio_testuale') . '</p>';}
			
                    if (get_field('data_fine')) {  echo '<div class="textwidget"><p class="big color__white mt-0 mb-32"><strong>' . $date_m->format('d M Y') . '</strong></p></div> </div>';}
		
                    $date_v = DateTime::createFromFormat('Ymd', get_field('data_veneto'));	

                    if(get_field('veneto')) { echo '<div class="block pr-16 pr-lg-48"><p class="color__white text-uppercase p-0 mt-lg-32 mb-lg-16 mt-16 mb-8">' . get_field('veneto') . '</p>';}
			
                    if(get_field('data_veneto')) {  echo '<div class="textwidget"><p class="big color__white mt-0 mb-32"><strong>' . $date_v->format('d M Y') . '</strong></p></div> </div>';}
	
                    if(get_field('titolo_costo')) {
                    echo '<div class="block pr-16 pr-lg-48"><p class="color__white text-uppercase p-0 mt-lg-32 mb-lg-16 mt-16 mb-8">'. get_field('titolo_costo').'</p><div class="textwidget"><p class="big color__white mt-0 mb-32"><strong>'. get_field('costo').'</strong></p></div></div>';
                    }
			
                    if(get_field('titolo_durata')) { echo '<div class="block pr-16 pr-lg-48"><p class="color__white text-uppercase p-0 mt-lg-32 mb-lg-16 mt-16 mb-8">' . get_field('titolo_durata').'</p>' ; }
                    
                    if(get_field('durata')) { echo '<div class="textwidget"><p class="big color__white mt-0 mb-32"><strong>'. get_field('durata') .'</strong></p></div> </div>'; }
			
                    if(get_field('codice_corso')) {
                    echo '<div class="block pr-16 pr-lg-48"><p class="color__white text-uppercase p-0 mt-lg-32 mb-lg-16 mt-16 mb-8">'. get_field('testo_codice_corso').'</p><div class="textwidget"><p class="big color__white mt-0 mb-32"><strong>'. get_field('codice_corso').'</strong></p></div> </div>'; }
                
                    ?>

                <?php
                    if ( get_field( 'key_facts' ) ) {
					echo '<div class="block pr-16 pr-lg-48"><p class="color__white text-uppercase p-0 mt-lg-32 mb-lg-16 mt-16 mb-8">' . get_field( 'key_facts' ) . '</p><div class="textwidget correction">' . get_field('campo_key_facts') . '</div> </div>'; }
                    ?>
            </div>
            <!-- questa riga quando c'è lo scroll -->
        </div>
        <div class="col-xs-12 col-lg-4 block">
            <div class="share_links">
                <?php get_template_part('pco/template-parts/content', 'share-white')?>
            </div>
            <div class="textwidget keyfacts-box">
                <?php
                        if ( get_field( 'brochure' ) ) {
				        echo '<span>' . get_field( 'brochure' ) . '</span>'; } ?>
            </div>
        </div>
    </div>

    <!-- questa riga quando c'è lo scroll -->
    <div class="row row-fixed row-hidden">
        <a class="col-1 mr-24 my-16 border-right-white" href="<?php echo site_url() ?>" title="Home page">
            <img src="<?php echo site_url() ?>/wp-content/themes/master_2017/img/lbs-bianco.png"
                alt="Luiss Business School Logo" id="logo-img" />
        </a>

        <h5 class="col-6 ml-24 color__white"><?php echo get_the_title() ?></h5>

        <div class="col-4 textwidget keyfacts-box">
            <?php
            if ( get_field( 'brochure' ) ) {
            echo '<span>' . get_field( 'brochure' ) . '</span>'; } ?>
        </div>
    </div>

    <!-- solo su mobile -->
 <div class="p-24 d-block d-lg-none download-brocure shadow-top">
    
    <p class="text-center color__white"><?php echo get_the_title() ?></p>

    <div class="col-12 textwidget keyfacts-box">
        <?php
        if ( get_field( 'brochure' ) ) {
        echo '<span>' . get_field( 'brochure' ) . '</span>'; } ?>
    </div>
</div>
</div>
 