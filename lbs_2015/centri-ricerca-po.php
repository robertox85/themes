<?php
/*
Template Name: Centri - Project Organising
*/
wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header(2017); 
?>

<?php  $titolo_centro = array();
$titolo_centro['it'] = 'Centri di Competenza';
$titolo_centro['en'] = 'Competence Centres';
$contatti       = array();
$contatti['it'] = 'Contatti';
$contatti['en'] = 'Contact Information';
?>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo site_url() ?>/wp-content/uploads/2017/06/PojectManagement.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-8">
                <h1>Project Organising Competence Centre</h1>
                <h2><span class="bg__gold"><?php echo $titolo_centro[ICL_LANGUAGE_CODE];?></span></h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <main id="main" class="site-main">
            <div id="page-content" class="col-md-8">
                <?php
while (have_posts()): the_post();
$post_id = get_the_ID();
?>
                <?php the_content(''); ?>

                <?php
endwhile; // end of the loop. 
?>

            </div>
            <div id="sidebar-menu" class="col-md-3 offset-md-1">

                <?php 
  
  	      wp_nav_menu(
  		      array(
  		
  			'menu' => 'Project Organising'
  		      )
  	     );
?>

                <div class="">
                    <h5 class="color__gold mt-48"><?php echo $contatti[ICL_LANGUAGE_CODE]; ?></h5>
                    <p class="title"><strong>Luiss Business School</strong></p>
                    <p> Villa Blanc,
                        <br />Via Nomentana, 216 - 00162 Roma
                        <br />Italia
                        <br />Email: <a href="mailto:luissbs@luiss.it" class="">luissbs@luiss.it </a></p>
                </div>
            </div>
        </main>
    </div>
    <!--END .row -->
    <p><?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?></p>
</div>
<!--END .container -->
<?php 

get_footer(2017);

?>