<div class="card-course-small p-24 m-16">
    <span class="meta text-uppercase"><?php the_terms($post->ID, 'lunghezza_corsi', $before = '', $sep = ', ', $after = '' ); ?></span>

    <h6 class="py-24 mb-0 each-word
              <?php if(is_page_template(array(
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
))) : ?>
               color__light_blue
               <?php elseif(is_page_template('mba.php')) : ?>
               color__green
               
               <?php elseif(is_page_template('master.php')) : ?>
    color__red
    <?php endif; ?>
                "><?php the_title(); ?></h6>

    <!-- Durata -->
    <?php if( get_field('durata') ): ?>
    <p class="big mb-8"><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Durata
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Duration
            <?php else : ?>
            <?php endif; ?></strong>
        <?php the_field('durata'); ?>
    </p>
    <?php endif; ?>

    <!-- Sede Roma -->
    <?php if( get_field('testo_inizio') ): ?>

    <p class="big mb-8"><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
            <?php else : ?>
            <?php endif; ?></strong>
        <?php the_field('testo_inizio'); ?>

    <!-- Inizio Roma -->

    <?php 
// Load field value.
$date_string_rome = get_field('data_inizio');
// Create DateTime object from value (formats must match).
$date_rome = DateTime::createFromFormat('Ymd', $date_string_rome);
// Output current date in custom format.
?><span> | </span>
    <strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
            <?php else : ?>
            <?php endif; ?></strong>
        <?php echo $date_rome->format('j M Y'); ?></p>

<?php endif; ?>
    <!-- Sede Milano -->
    <?php if( get_field('data_inizio_testuale') ): ?>

    <p class="big mb-8"><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
            <?php else : ?>
            <?php endif; ?></strong>
        <?php the_field('data_inizio_testuale'); ?>

    <!-- Inizio Milano -->

    <?php 
// Load field value.
$date_string_mi = get_field('data_fine');
// Create DateTime object from value (formats must match).
$date_mi = DateTime::createFromFormat('Ymd', $date_string_mi);
// Output current date in custom format.
?><span> | </span>
    <strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
            <?php else : ?>
            <?php endif; ?></strong>
        <?php echo $date_mi->format('j M Y'); ?></p>
    <?php endif; ?>

    <!-- Sede Belluno -->
    <?php if( get_field('veneto') ): ?>

    <p class="big mb-8"><strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Sede
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Location
            <?php else : ?>
            <?php endif; ?></strong>
        <?php the_field('veneto'); ?>

    <!-- Inizio Belluno -->

    <?php 
// Load field value.
$date_string_be = get_field('data_veneto');
// Create DateTime object from value (formats must match).
$date_be = DateTime::createFromFormat('Ymd', $date_string_be);
// Output current date in custom format.
?><span> | </span>
    <strong>
            <?php if (ICL_LANGUAGE_CODE=='it') : ?>Inizio
            <?php elseif ( ICL_LANGUAGE_CODE=='en' ) :?>Start
            <?php else : ?>
            <?php endif; ?></strong>
        <?php echo $date_be->format('j M Y'); ?></p>
<?php endif; ?>
    
    <!-- Lingua -->
    <p class="big mb-8"><strong><?php if (ICL_LANGUAGE_CODE=='it') : ?>Lingua
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