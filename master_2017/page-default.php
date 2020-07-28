<?php
/**
 * Template Name: Pagina generica (All Traking)
 * @file page-default.php
 */
get_header();
while (have_posts()): the_post();
    ?>
<style type="text/css">
.mobileShow {
    display: none;
}

/* Smartphone Portrait and Landscape */

@media only screen and (min-device-width: 320px) and (max-device-width: 480px) {
    .mobileShow {
        display: inline;
    }

    .all {
        width: 100%;
        padding-top: 2%;
        text-transform: uppercase
    }
}
</style>
<?php $image = get_field('images');?>
<div class="container-fluid container-header px-0 py-40"
    style="min-height:480px; background-image:url(<?php echo $image['url']; ?>); background-repeat:no-repeat; background-size: cover;background-position:center;">
    <div class="container">
        <header id="header-master" class="row px-0">
            <div class="col-12">
                <h1 class="small p-0">
                    <?php
								global $blog_id;
								$current_blog_details = get_blog_details(array('blog_id' => $blog_id));
								echo $current_blog_details->blogname;
								?>
                </h1>
                <p>
                    <?php echo get_field('paragrafo') ?>
                </p>
            </div>
            <div class="clearfix"></div>
            <!--END .row -->
        </header>
    </div>
</div>
<!--END .container -->

<div class="container-fluid colonna_key_facts">
    <div class="container">
        <div class="row">
            <div class="col-md-12 py-32">
                <h5>Key Facts</h5>
                <div class="position-absolute share_links">


                    <?php get_template_part('pco/template-parts/content', 'share')?>


                </div>
                <div class="colonna_key_facts-container">
                    <?php if (function_exists('dynamic_sidebar')): ?>
                    <?php dynamic_sidebar('Custom')?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="container-fluid">


    <div class="row">
        <nav class="col-lg-3 col-md-3 pl-0">

            <?php

								wp_nav_menu(array(
									'menu' => 'Master',
									'container_id' => '',
									'container_class' => 'bg__white',
									'container' => 'div',
									'menu_class' => 'list-unstyled sidebar_navigation ',
								));

								?>
        </nav>

        <main id="main" class="site-main site-master col-lg-6 col-md-6" role="main">
            <div id="page-content" class="columns  space">

                <?php if (!is_front_page()) {?>
                <h2><?php echo the_title(); ?></h2>
                <?php }?>

                <?php if(is_page('executive-experience')): ?>

                <?php 
						$i = 0;
						$array = array(
							
							array(
								'area' => 'Metodologia didattica',
								'programmi' => array(

									array(
										'icona'	 => 'https://businessschool.luiss.it/executive-human-resource-management/wp-content/uploads/sites/62/2018/12/Pre_Program.png',
										'titolo' => 'PRE-PROGRAM',
										'contenuto'	 => 'Prevede lo svolgimento di attività propedeutiche prima dell’inizio del programma, quali la somministrazione di materiali didattici e test di autovalutazione, volti a facilitare e contemporaneamente massimizzare l’apprendimento in aula.'
									),
									array(
										'icona'	 => 'https://businessschool.luiss.it/executive-human-resource-management/wp-content/uploads/sites/62/2018/12/Experimental_learning.png',
										'titolo' => 'EXPERIENTIAL LEARNING',
										'contenuto'	 => 'L’approccio seguito è definito Evidence Based Training ed è fondato sulle tre fasi briefing-simulazione-debriefing. I briefing applicano le teorie Team-Gain e Good-Judgement. I partecipanti, saranno coinvolti in laboratori e business case, in cui dovranno fare leva sulle proprie competenze per analizzare le problematiche, stabilire le priorità e riorganizzare le risorse a disposizione per il raggiungimento degli obiettivi fissati. L’apprendimento esperienziale, permettendo di affrontare in un contesto protetto situazioni di complessità, consente di migliorare le capacità di Problem Solving, il Critical Thinking e le Creatività.'
									),

								)
							),

							array(
								'area' => 'Sviluppo professionale e networking',
								'programmi' => array(

									array(
										'icona'	 => 'https://businessschool.luiss.it/leadership-in-action/wp-content/uploads/sites/68/2020/02/NetworkingActivities-e1582113726490.png',
										'titolo' => 'NETWORKING ACTIVITIES',
										'contenuto'	 => 'Attraverso il percorso di individual coaching con un professionista qualificato dalle migliori associazioni internazionali, in un contesto non valutativo e confidenziale, i partecipanti potranno personalizzare l’apprendimento in aula applicandolo al proprio contesto, integrando la loro storia professionale con gli obiettivi futuri e acquisendo una migliore consapevolezza delle proprie risorse, aree di forza e di sviluppo.'
									),

								)
							),

							array(
								'area' => 'Business impact',
								'programmi' => array(

									array(
										'icona'	 => 'https://businessschool.luiss.it/executive-human-resource-management/wp-content/uploads/sites/62/2018/12/Executive_follow_up.png',
										'titolo' => 'EXECUTIVE FOLLOW UP',
										'contenuto'	 => 'I partecipanti avranno l’opportunità di un successivo momento di confronto con la faculty per verificare l’applicazione di quanto appreso in aula.'
									),

								)
							),
						)

					?>

				<?php foreach($array as $area):  
					$area_id = strtolower(str_replace(' ','_',$area['area']));
					
					?>
                <div class="panel-group accordion" id="<?php echo $area_id ?>"
                    role="tablist" aria-multiselectable="true">
                    <h2 class="h2"><?php echo $area['area'] ?></h2>
                    <?php if(isset($area['programmi'])): ?>
						<?php foreach($area['programmi'] as $programma): 
							$expanded = ($i == 0) ? 'true':'false';
							$in = ($i == 0) ? 'in':'';
							$collapsed = ($i == 0) ? '':'collapsed';
							?>
							<div class="panel-accordion mt-32">
								<div class="panel-heading" role="tab" id="headingOne">
									<h6 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#<?php echo $area_id ?>"
											href="#accordion-content-<?php echo $i ?>" aria-expanded="<?php echo $expanded  ?>" aria-controls="accordion-content-<?php echo $i ?>"
											class="accordion-toggle <?php echo $collapsed ?>">
											<!-- Titolo -->
											<img class="mr-48" src="<?php echo $programma['icona'] ?>" alt="" width="100" height="100"> <?php echo $programma['titolo'] ?>
										</a>
									</h6>
								</div>
								<div id="accordion-content-<?php echo $i ?>" class="panel-collapse collapse <?php echo $in ?>" role="tabpanel"
									aria-labelledby="headingOne">
									<div class="panel-body">

										<!-- Contenuto -->
										<?php echo $programma['contenuto'] ?>

									</div>
								</div>
							</div>
						<?php 
						$i++; 
						endforeach; ?>
                    <?php endif; ?>
                </div>
                <?php endforeach; ?>
                
						
            
            <?php else: ?>
				<?php the_content('');?>
            <?php endif; ?>

    
    <p>
        <?php edit_post_link('<strong>Modifica Pagina</strong>', '');?>
    </p>
    </main>

    <aside class="col-lg-3 col-md-3 col-sm-12 space sidebar-master">

        <?php get_sidebar();?>

    </aside>

    <div class="col-md-1 col-sm-1 nopadding"></div>

</div>



<div class="clearfix"></div>
</div>
<!--END .container -->
<?php endwhile; // end of the loop. ?>

<?php get_main_site_footer();?>

<!-- MODAL -->
<?php get_template_part('pco/template-parts/content', 'modal')?>