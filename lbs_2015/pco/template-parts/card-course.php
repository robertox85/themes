<div class="col-md-4 col-sm-6">
    <span><?php the_terms($post->ID, 'lunghezza_corsi', $before = '', $sep = ', ', $after = '' ); ?></span>

    <h6><?php the_title(); ?></h6>

    <!-- Durata -->
    <?php if( get_field('durata') ): ?>
    <p><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Durata
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Duration
            <?php else : ?>
            <?php endif; ?></strong>
        <?php the_field('durata'); ?>
    </p>
    <?php endif; ?>

    <!-- Sede Roma -->
    <?php if( get_field('testo_inizio') ): ?>

    <p><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
            <?php else : ?>
            <?php endif; ?></strong>
        <?php the_field('testo_inizio'); ?></p>

    <!-- Inizio Roma -->

    <?php 
// Load field value.
$date_string_rome = get_field('data_inizio');
// Create DateTime object from value (formats must match).
$date_rome = DateTime::createFromFormat('Ymd', $date_string_rome);
// Output current date in custom format.
?>
    <p><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
            <?php else : ?>
            <?php endif; ?></strong>
        <?php echo $date_rome->format('j M Y'); ?></p>

<?php endif; ?>
    <!-- Sede Milano -->
    <?php if( get_field('data_inizio_testuale') ): ?>

    <p><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
            <?php else : ?>
            <?php endif; ?></strong>
        <?php the_field('data_inizio_testuale'); ?></p>

    <!-- Inizio Milano -->

    <?php 
// Load field value.
$date_string_mi = get_field('data_fine');
// Create DateTime object from value (formats must match).
$date_mi = DateTime::createFromFormat('Ymd', $date_string_mi);
// Output current date in custom format.
?>
    <p><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
            <?php else : ?>
            <?php endif; ?></strong>
        <?php echo $date_mi->format('j M Y'); ?></p>
    <?php endif; ?>

    <!-- Sede Belluno -->
    <?php if( get_field('veneto') ): ?>

    <p><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
            <?php else : ?>
            <?php endif; ?></strong>
        <?php the_field('veneto'); ?></p>

    <!-- Inizio Belluno -->

    <?php 
// Load field value.
$date_string_be = get_field('data_veneto');
// Create DateTime object from value (formats must match).
$date_be = DateTime::createFromFormat('Ymd', $date_string_be);
// Output current date in custom format.
?>
    <p><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
            <?php else : ?>
            <?php endif; ?></strong>
        <?php echo $date_be->format('j M Y'); ?></p>
<?php endif; ?>
    
    <!-- Lingua -->
    <p><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Lingua
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Language
            <?php else : ?>
            <?php endif; ?></strong><?php $terms = get_the_terms( $post->ID, 'lingue' );
                foreach ( $terms as $term ) {
  echo '<span class="text-capitalize">' . strip_tags(term_description( $term->term_id, 'lingue')) . '</span>';
                } ?></p>

    <!-- Pulsanti -->
    <div class="row">
        <div class="col-xs-12">
        <a href="<?php the_permalink(); ?>">Scopri</a>
        <?php the_field(strip_tags('brochure')); ?>
        </div>
    </div>
</div>