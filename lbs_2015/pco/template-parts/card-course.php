<?php if(is_page_template(
    array(
        'executive-program-2018.php',
        'taxonomy-afc-2018.php',
        'taxonomy-banche-2018.php',
        'taxonomy-flex-2018.php',
        'taxonomy-lobyng-2018.php',
        'taxonomy-management-2018.php',
        'taxonomy-marketing-2018.php',
        'taxonomy-people-2018.php',
        'taxonomy-project-2018.php',
        'taxonomy-real-2018.php',
        'taxonomy-sanita-2018.php',
        'taxonomy-soft-2018.php',
        'taxonomy-sport-2018.php',
        'taxonomy-tax-2018.php',
    )
)
) : ?>
<style>
    :root {
        --current-color: #0077c8;
    }
</style>
<?php elseif(is_page_template('mba.php')) : ?>
<style>
    :root {
        --current-color: #00968F;
    }
</style>
<?php elseif(is_page_template('master.php')) : ?>
<style>
    :root {
        --current-color: #D50032;
    }
</style>
<?php elseif(is_page_template('custom-program-interna.php')) : ?>
<style>
    :root {
        --current-color: #D45D00;
    }
</style>
<?php else : ?>
<?php endif; ?>

<div class="card-course-small p-24 mx-0 mx-md-16 my-16 d-flex flex-column justify-content-between align-items-start" style="border-color:var(--current-color);">
    <div class="first-block">
    <span class="meta text-uppercase color__grey"><?php the_terms($post->ID, 'lunghezza_corsi', $before = '', $sep = ', ', $after = ''); ?></span>

    <h6 class="py-24 mb-0 each-word"><?php the_title(); ?></h6>
    </div>
    
    <div class="second-block">

    <!-- Durata -->
    <?php if ( !empty ( get_field( 'durata' ) ) ) : ?>
    <p class="big mb-8">
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Durata
            <?php elseif (ICL_LANGUAGE_CODE=='en' ) : ?>Duration
            <?php else : ?>
            <?php endif; ?>
        <strong><?php the_field('durata'); ?></strong>
    </p>
    <?php endif; ?>
    
    <!-- Sede Flex -->
    <?php if ( !empty ( get_field( 'online' ) ) ) : ?>

    <p class="big mb-8">
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) : ?>Location
            <?php else : ?>
            <?php endif; ?>
        <strong><?php the_field('online'); ?></strong>
        </p>
    <?php endif; ?>
        
    <!-- Sede Roma -->
    <?php if ( !empty ( get_field( 'testo_inizio' ) ) || !empty( get_field ( 'online' ) ) ) : ?>

    <p class="big mb-8">
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif (ICL_LANGUAGE_CODE=='en' ) : ?>Location
            <?php else : ?>
            <?php endif; ?>
        <strong><?php the_field('testo_inizio'); ?></strong>

    <!-- Inizio Roma -->

        <?php 
        // Load field value.
        $date_string_rome = get_field('data_inizio');
        // Create DateTime object from value (formats must match).
        $date_rome = DateTime::createFromFormat('Ymd', $date_string_rome);
        // Output current date in custom format.
        ?><span>   -   </span>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif (ICL_LANGUAGE_CODE=='en' ) : ?>Start
            <?php else : ?>
            <?php endif; ?>
        <strong>
            
        <?php
        
        if(!empty($date_string_rome)){
            
            echo date_i18n('j M Y', strtotime($date_rome->format('j M Y')));
            // echo $date_rome->format('j M Y')

        }
        

        
        ?>
    
    </strong></p>

    <?php endif; ?>
    <!-- Sede Milano -->
    <?php if ( !empty ( get_field( 'data_inizio_testuale' ) ) ) : ?>

    <p class="big mb-8">
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif (ICL_LANGUAGE_CODE=='en' ) : ?>Location
            <?php else : ?>
            <?php endif; ?>
        <strong><?php the_field('data_inizio_testuale'); ?></strong>

    <!-- Inizio Milano -->

        <?php 
        // Load field value.
        $date_string_mi = get_field('data_fine');
        // Create DateTime object from value (formats must match).
        $date_mi = DateTime::createFromFormat('Ymd', $date_string_mi);
        // Output current date in custom format.
        ?><span>   -   </span>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif (ICL_LANGUAGE_CODE=='en' ) : ?>Start
            <?php else : ?>
            <?php endif; ?>
        <strong>
        
        <?php 
        
        if(!empty($date_string_mi)){
            echo date_i18n('j M Y', strtotime($date_mi->format('j M Y')));
            // echo $date_mi->format('j M Y');
        }
        ?>
        
        </strong></p>
    <?php endif; ?>

    <!-- Sede Belluno -->
    <?php if ( !empty ( get_field( 'veneto' ) ) ) : ?>

    <p class="big mb-8">
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif (ICL_LANGUAGE_CODE=='en' ) : ?>Location
            <?php else : ?>
            <?php endif; ?>
        <strong><?php the_field('veneto'); ?></strong>

    <!-- Inizio Belluno -->

        <?php 
        // Load field value.
        $date_string_be = get_field('data_veneto');
        // Create DateTime object from value (formats must match).
        $date_be = DateTime::createFromFormat('Ymd', $date_string_be);
        // Output current date in custom format.
        ?><span>   -   </span>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif (ICL_LANGUAGE_CODE=='en' ) : ?>Start
            <?php else : ?>
            <?php endif; ?>
        <strong>
        <?php 
        
        if(!empty($date_string_be)){
            echo date_i18n('j M Y', strtotime($date_be->format('j M Y')));
            // echo $date_be->format('j M Y'); 
        }
        
        
        ?>
        </strong></p>
    <?php endif; ?>
    
    <!-- Lingua -->
    <p class="big mb-8"><?php if (ICL_LANGUAGE_CODE=='it') : ?>Lingua
            <?php elseif (ICL_LANGUAGE_CODE=='en' ) : ?>Language
            <?php else : ?>
            <?php endif; ?><strong><?php $terms = get_the_terms($post->ID, 'lingue');
            foreach ( $terms as $term ) {
                echo '<span class="text-capitalize">' . strip_tags(term_description($term->term_id, 'lingue')) . '</span>';
            } ?></strong></p>

    <!-- Pulsanti -->
    <div class="mt-24 d-flex flex-row justify-content-between align-items-stretch flex-wrap flex-lg-nowrap  ctas">
        <a class="button button__secondary my-8 mr-sm-16 mr-md-0 mr-lg-16" href="<?php the_permalink(); ?>">Scopri</a>
        <?php the_field(strip_tags('brochure')); ?>
    </div>
</div>
    </div>