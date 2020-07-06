  <h2>Key Facts</h2>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Custom') ) : ?>
    <?php endif; ?>
          <div class="clearfix sidebar-2">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Updates') ) : ?>
  <?php endif; ?>
</div>
        
  <?php echo do_shortcode('[ssba]'); ?>   