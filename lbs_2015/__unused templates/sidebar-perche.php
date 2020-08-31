<?php get_template_part('course-finder-widget-new'); ?>



<div id="sidebar" class="clearfix">
  <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('perche') ) : ?>
  <?php endif; ?>
</div>
<!-- end sidebar -->