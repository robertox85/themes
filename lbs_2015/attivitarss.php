<?php 
// Exit if accessed directly
if ( !defined('ABSPATH')) exit;

// Get RSS Feed(s)
include_once(ABSPATH . WPINC . '/feed.php');

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed('http://www.luiss.it/taxonomy/term/41/all/feed');
if (!is_wp_error( $rss ) ) : // Checks that the object is created correctly 
    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity(5); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items(0, $maxitems); 
endif;
?>
<?php if ($maxitems == 0) echo '<li>Non ci sono Attivit&agrave; in corso.</li>';
    else
    // Loop through each feed item and display each item as a hyperlink.
    foreach ( $rss_items as $item ) : ?>

<ul> <li> <a href='<?php echo esc_url( $item->get_permalink() ); ?>'
        title='<?php echo 'Posted '.$item->get_date('j F Y | g:i a'); ?>' class="arr"> <?php echo esc_html( $item->get_title() ); ?></a></li> </ul>
<?php endforeach; wp_reset_query(); ?>
