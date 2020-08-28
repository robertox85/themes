<?php 
$label_progettospeciale=array();
$label_progettospeciale['it']='Scopri';
$label_progettospeciale['en']='Find out more';
?>
<section class="bg__gold py-64">
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
<section style="color: #F7F9FA">
	<div class="container">
		<div class="row">
			<div class="col-md-3 accordion-card p-24 my-24 my-md-48">
                <h6 class="pb-24"><?php echo get_field('home_launch_box_title_1') ?></h6>
                <p><?php echo get_field('home_launch_box_excerpt_1') ?></p>
                <a class="button button__primary bg__gold color__white" href="<?php echo get_field('home_launch_box_url_1') ?>"><?php echo $label_progettospeciale[ICL_LANGUAGE_CODE] ?></a>
			</div>
            
            <div class="col-md-3 accordion-card p-24 my-24 my-md-48">
                <h6 class="pb-24"><?php echo get_field('home_launch_box_title_2') ?></h6>
                <p><?php echo get_field('home_launch_box_excerpt_2') ?></p>
                <a class="button button__primary bg__gold color__white" href="<?php echo get_field('home_launch_box_url_2') ?>"><?php echo $label_progettospeciale[ICL_LANGUAGE_CODE] ?></a>
			</div>
            
            <div class="col-md-3 accordion-card p-24 my-24 my-md-48">
                <h6 class="pb-24"><?php echo get_field('home_launch_box_title_3') ?></h6>
                <p><?php echo get_field('home_launch_box_excerpt_3') ?></p>
                <a class="button button__primary bg__gold color__white" href="<?php echo get_field('home_launch_box_url_3') ?>"><?php echo $label_progettospeciale[ICL_LANGUAGE_CODE] ?></a>
			</div>
            
            <div class="col-md-3 accordion-card p-24 my-24 my-md-48">
                <h6 class="pb-24"><?php echo get_field('home_launch_box_title_4') ?></h6>
                <p><?php echo get_field('home_launch_box_excerpt_4') ?></p>
                <a class="button button__primary bg__gold color__white" href="<?php echo get_field('home_launch_box_url_4') ?>"><?php echo $label_progettospeciale[ICL_LANGUAGE_CODE] ?></a>
			</div>	
		</div>
	</div>
</section>
