<?php

$page_slug = get_post_field( 'post_name' );
$pages = array('download-brochure', 'brochure', 'download-brochure-master-macofin', 'scarica-la-brochure', 'downlaod-brochure', 'download-brochre', 'compila-il-form', 'richiedi-informazioni', 'download-brchure', 'download-drochure');
$found = false;
foreach ($pages as $page) {
    if ($page_slug === $page) {
        $found = true;
        break;
    }
}
$is_page_download_brochure = ($found) ? 'is_page_download_brochure' : '';

?>

<style>
.colonna_key_facts.is_page_download_brochure .colonna_key_facts-container .featured-links,
.colonna_key_facts.is_page_download_brochure .download-brocure.shadow-top{
    display: none!important;
}

.colonna_key_facts.is_page_download_brochure .share_links:not(.share_links-fixed){
    top: 8rem;
}
</style>

<div class="container-fluid colonna_key_facts <?php echo $is_page_download_brochure ?>">
    <div class="container">
        <!-- questa riga la vediamo quando non c'è scroll -->
        <div id="toast-container" class="toast toast-top-right fade toast-success" aria-live="polite" role="alert" aria-atomic="true" data-delay="1500">
            <div class="toast-message">Link copiato negli appunti!</div>
        </div>
        <div class="row row-default">
            
            <div class="col-md-12 py-32 w-100">
                <h5>Key Facts</h5>
                <div class="share_links">


                    <?php get_template_part('pco/template-parts/content', 'share')?>


                </div>
                <div class="colonna_key_facts-container">
                    <?php if (function_exists('dynamic_sidebar')): ?>
                    <?php dynamic_sidebar('Custom')?>
                    <?php endif;?>
                </div>
            </div>
            
        </div>
        <!-- questa riga quando c'è lo scroll -->
        <div class="row row-fixed row-hidden">
            
            <div class="col-md-12 py-0">
                <div class="colonna_key_facts-container colonna_key_facts-fixed">
                    
                    <a class="mr-24 border-right-white" href="<?php echo site_url() ?>" title="Home page">
                        <img src="<?php echo site_url() ?>/wp-content/themes/master_2017/img/lbs-bianco.png" alt="Luiss Business School Logo" id="logo-img" />
                    </a>

                    <h5 class="ml-24"><?php echo get_query_var( 'site_name' ) ?></h5>

                    
                    <?php if (function_exists('dynamic_sidebar')): ?>
                    <?php dynamic_sidebar('Custom')?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>

    <!-- solo su mobile -->
    <div class="p-24 d-block d-lg-none download-brocure shadow-top">
        <?php if (function_exists('dynamic_sidebar')): ?>
            <p class="text-center"><?php echo get_query_var( 'site_name' ) ?></p>
        <?php dynamic_sidebar('Custom')?>
        <?php endif;?>
    </div>
</div>