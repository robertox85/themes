<div class="col-md-4 col-sm-6">
    <span><?php the_terms($post->ID, 'lunghezza_corsi', $before = '', $sep = ', ', $after = '' ); ?></span>
    <h6><?php the_title(); ?></h6>
    <?php if( get_field('durata') ): ?>
    <p><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Durata
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Duration
            <?php else : ?>
            <?php endif; ?></strong> <?php the_field('durata'); ?></p>
    <?php endif; ?>
    <!-- Sede/Inizio Roma -->
    <?php if( get_field('testo_inizio') ): ?>
    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
            <?php else : ?>
            <?php endif; ?></strong> <?php the_field('testo_inizio'); ?></p>
<<<<<<< HEAD
    <?php endif; ?>
    <?php if(get_field('data_inizio')): ?>
=======
    <?php 
// Load field value.
$date_string = get_field('data_inizio');
// Create DateTime object from value (formats must match).
$date = DateTime::createFromFormat('Ymd', $date_string);
// Output current date in custom format.
?>
>>>>>>> parent of 83dcab3... Update card-course.php
    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
            <?php else : ?>
            <?php endif; ?> </strong> <?php echo $date->format('j M Y'); ?></p>
    <?php endif; ?>
    <!-- Sede/Inizio Milano -->
    <?php if( get_field('data_inizio_testuale') ): ?>
    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
            <?php else : ?>
            <?php endif; ?></strong> <?php the_field('data_inizio_testuale'); ?></p>
    <?php endif; ?>
    <?php if(get_field('data_fine')): ?>
    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
            <?php else : ?>
            <?php endif; ?></strong> <?php echo he_field('data_fine'); ?></p>
    <?php endif; ?>
    <!-- Sede/Inizio Belluno -->
    <?php if(get_field('veneto') ): ?>
    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
            <?php else : ?>
            <?php endif; ?></strong> <?php the_field('veneto'); ?></p>
    <?php endif; ?>
    
    <?php if(get_field('data_veneto')): ?>
    <?php endif; ?>
    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
            <?php else : ?>
            <?php endif; ?> </strong> <?php echo the_field('data_veneto'); ?></p>

    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Lingua
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Language
            <?php else : ?>
            <?php endif; ?></strong><?php $terms = get_the_terms( $post->ID, 'lingue' );
                foreach ( $terms as $term ) {
  echo '<span class="text-capitalize">' . strip_tags(term_description( $term->term_id, 'lingue')) . '</span>';
                } ?></p>
    <div class="row">
        <div class="col-xs-12">
            <a href="<?php the_permalink();
?>">Scopri</a>
            <?php the_field(strip_tags('brochure')); ?>
        </div>
    </div>
</div>