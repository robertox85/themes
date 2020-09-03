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
<?php 

// get the home page ID
$home_page_id = get_option('page_on_front');
$image = get_field('images', $home_page_id);

?>
<div class="container-fluid container-header px-0 px-lg-1"
    style="min-height:480px; background-image:url(<?php echo $image['url']; ?>); background-repeat:no-repeat; background-size: cover;background-position:center;">
    <div class="container px-24 px-md-0 py-lg-48">
        <header id="header-master" class="row px-md-0">
            <h1 class="col-md-12 small">
                <?php
                global $blog_id;
                $current_blog_details = get_blog_details(array('blog_id' => $blog_id));
                echo $current_blog_details->blogname;
            ?>
            </h1>
            <p class="col-md-6">
                <?php echo get_field('paragrafo') ?>
            </p>
            <div class="clearfix"></div>
            <!--END .row -->
        </header>
    </div>
</div>
<!--END .container -->


<?php 
// KEY FACTS
set_query_var('site_name', $current_blog_details->blogname);
get_template_part( 'pco/template-parts/content', 'keyfacts' );
 
?>

<div class="container-fluid colonna_main">


    <div class="row">
        <nav class="col-lg-3 pl-lg-0">


            <?php
			
            wp_nav_menu(array(
                'menu' => 'Master',
                'container_class' => 'd-block d-lg-none text-center pt-32',
                'walker'         => new Walker_Nav_Menu_Dropdown(),
                'items_wrap'     => '<select class="select w-100"><option disabled selected>Menu</option>%3$s</select>',
              ));
			  

								wp_nav_menu(array(
									'menu' => 'Master',
									'container_id' => '',
									'container_class' => 'bg__white d-none d-lg-block',
									'container' => 'div',
									'menu_class' => 'list-unstyled sidebar_navigation ',
								));

								?>
        </nav>

        <main id="main" class="site-main site-master col-lg-6" role="main">
            <div id="page-content" class="columns  space">

                <?php if (!is_front_page()) {?>
                    <h2 class="page-title"><?php echo the_title(); ?></h2>
                <?php }?>

                <?php if(is_page('executive-experience')): ?>
                    <p>L’offerta formativa Executive Education della Luiss Business School, si caratterizza per un approccio
                        metodologico fortemente interattivo ed esperienziale che coinvolge il partecipante ben oltre la
                        didattica tradizionale.</p>

                    <p>L’esperienza di apprendimento è costruita intorno alla persona, con l’obiettivo di ampliarne il
                        network, e promuoverne lo sviluppo professionale e personale, fornendo strumenti immediatamente
                        applicabili nel proprio contesto organizzativo per coglierne in maniera efficace le sfide. Ad ogni
                        percorso di apprendimento sono associati attività e servizi che si sviluppano, prima, durante e dopo
                        la fase di aula.
                    </p>
                <?php 
						
						$array = array(
							
							array(
								'area' => 'Metodologia didattica',
								'programmi' => array(

									array(
										'icona'	 => 'https://businessschool.luiss.it/executive-human-resource-management/wp-content/uploads/sites/62/2018/12/Pre_Program.png',
										'titolo' => 'Pre-Program',
										'contenuto'	 => 'Prevede lo svolgimento di attività propedeutiche prima dell’inizio del programma, quali la somministrazione di materiali didattici e test di autovalutazione, volti a facilitare e contemporaneamente massimizzare l’apprendimento in aula.'
									),
									array(
										'icona'	 => 'https://businessschool.luiss.it/executive-human-resource-management/wp-content/uploads/sites/62/2018/12/Experimental_learning.png',
										'titolo' => 'Experiential learning',
										'contenuto'	 => 'L’approccio seguito è definito Evidence Based Training ed è fondato sulle tre fasi briefing-simulazione-debriefing. I briefing applicano le teorie Team-Gain e Good-Judgement. I partecipanti, saranno coinvolti in laboratori e business case, in cui dovranno fare leva sulle proprie competenze per analizzare le problematiche, stabilire le priorità e riorganizzare le risorse a disposizione per il raggiungimento degli obiettivi fissati. L’apprendimento esperienziale, permettendo di affrontare in un contesto protetto situazioni di complessità, consente di migliorare le capacità di Problem Solving, il Critical Thinking e le Creatività.'
									),

								)
							),

							array(
								'area' => 'Sviluppo professionale e networking',
								'programmi' => array(

									array(
										'icona'	 => 'https://businessschool.luiss.it/leadership-in-action/wp-content/uploads/sites/68/2020/02/NetworkingActivities-e1582113726490.png',
										'titolo' => 'Networking activities',
										'contenuto'	 => 'Attraverso il percorso di individual coaching con un professionista qualificato dalle migliori associazioni internazionali, in un contesto non valutativo e confidenziale, i partecipanti potranno personalizzare l’apprendimento in aula applicandolo al proprio contesto, integrando la loro storia professionale con gli obiettivi futuri e acquisendo una migliore consapevolezza delle proprie risorse, aree di forza e di sviluppo.'
									),

								)
							),

							array(
								'area' => 'Business impact',
								'programmi' => array(

									array(
										'icona'	 => 'https://businessschool.luiss.it/executive-human-resource-management/wp-content/uploads/sites/62/2018/12/Executive_follow_up.png',
										'titolo' => 'Executive follow Up',
										'contenuto'	 => 'I partecipanti avranno l’opportunità di un successivo momento di confronto con la faculty per verificare l’applicazione di quanto appreso in aula.'
									),

								)
							),
                        );
                        
                        $i = 0;

					?>

                <?php foreach($array as $area):  
					$area_id = strtolower(str_replace(' ','_',$area['area']));
					
					?>
                <div class="panel-group accordion" id="<?php echo $area_id ?>" role="tablist"
                    aria-multiselectable="true">
                    <h2 class="h2"><?php echo $area['area'] ?></h2>
                    <?php if(isset($area['programmi'])): ?>
                    <?php foreach($area['programmi'] as $programma): 
							$expanded = ($i == 0) ? 'true':'false';
							$in = ($i == 0) ? 'show':'';
							$collapsed = ($i == 0) ? '':'collapsed';
							?>
                    <div class="panel-accordion mt-32">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h6 class="panel-title">
                                 
                                <a role="button" data-toggle="collapse" data-parent="#<?php echo $area_id ?>"
                                    href="#accordion-content-<?php echo $i ?>" aria-expanded="<?php echo $expanded  ?>"
                                    aria-controls="accordion-content-<?php echo $i ?>"
                                    class="accordion-toggle page-default <?php echo $collapsed ?>">
                                    <!-- Titolo -->
                                    <img class="mr-48" src="<?php echo $programma['icona'] ?>" alt="" width="100" height="100">   
                                    <?php echo $programma['titolo'] ?>
                                </a>
                            </h6>
                        </div>
                        <div id="accordion-content-<?php echo $i ?>" class="panel-collapse collapse <?php echo $in ?>"
                            role="tabpanel" aria-labelledby="headingOne">
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
            </div>
        </main>

        <aside class="col-lg-3 col-md-3 space sidebar-master">

            <?php get_sidebar();?>

        </aside>

    </div>


</div>
<!--END .container -->
<?php endwhile; // end of the loop. ?>

<?php //get_main_site_footer();?>
<?php get_footer() ?>

<!-- MODAL -->
<?php get_template_part('pco/template-parts/content', 'modal')?>