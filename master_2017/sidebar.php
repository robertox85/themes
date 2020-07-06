  <h2>Key Facts</h2>
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Custom') ) : ?>
    <?php endif; ?>
          <div class="clearfix sidebar-2">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Updates') ) : ?>
  <?php endif; ?>
</div>
        
<?php
   $blog_id = get_current_blog_id();
   if ( 52 == $blog_id) {
?>




 


<?php } ?>
        
  <?php echo do_shortcode('[ssba]'); ?>   