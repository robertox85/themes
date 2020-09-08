<?php 
$label_button=array();
$label_button['it']='Scopri';
$label_button['en']='Find out more';
?>
<style>
:root {
  --current-color: #cc8a00;
}
</style>
<section class="bg__blue py-64">
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h3 class="color__white">
					<?php echo get_field('home_launch_box_excerpt_bottom') ?>
				</h3>
			</div>
		</div>
	</div>
</section>
<section style="background-color: #F7F9FA">
	<div class="container">
		<div class="row">
			<div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_1') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_1') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_1') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_2') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_2') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_2') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_3') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_3') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_3') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>
            
            <div class="col-md-3 accordion-card px-24 pt-48 pb-24 my-24 my-md-48 d-flex flex-column align-items-start justify-content-between"><div class="firs-block">
                <h6 class="pb-16"><?php echo get_field('home_launch_box_title_4') ?></h6>
                <p class="pb-32"><?php echo get_field('home_launch_box_excerpt_4') ?></p>
                </div><div class="second-block"><a class="button button__secondary" href="<?php echo get_field('home_launch_box_url_4') ?>"><?php echo $label_button[ICL_LANGUAGE_CODE] ?></a></div>
			</div>	
		</div>
	</div>
</section>
