<div class="container-fluid colonna_key_facts">
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
            
            <div class="col-md-12 py-32">
                <div class="colonna_key_facts-container colonna_key_facts-fixed">
                    <h5><?php echo get_query_var( 'site_name' ) ?></h5>
                    <div class="share_links share_links-fixed">
                        <?php get_template_part('pco/template-parts/content', 'share-inline')?>
                    </div>
                    <?php if (function_exists('dynamic_sidebar')): ?>
                    <?php dynamic_sidebar('Custom')?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>

    <!-- solo su mobile -->
    <div class="d-block d-lg-none download-brocure">
        <?php if (function_exists('dynamic_sidebar')): ?>
            <p><?php echo get_query_var( 'site_name' ) ?></p>
        <?php dynamic_sidebar('Custom')?>
        <?php endif;?>
    </div>
</div>