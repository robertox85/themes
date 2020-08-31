<?php
/*
Template Name: Archivo News Carrer
*/
get_header( 2017 );
?>

<div id="HomeCarousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2018/03/Immagine_masterYourCareer_1440x530.jpg" alt="<?php the_title()?>" height="600">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						<?php the_title()?>
					</h1>
					<p><span class="slider_paragraf"><strong>Testo Lancio qui</strong></span>
				</div>
			</div>
		</div>
	</div>
</div>
<section class="body-section">
	<div class="container">
		<div class="row visible-lg visible-md">
			<div class="col-lg-6 visible-lg visible-md">
				<h3 class=" h2">#MasterYourCareer</h3>
				<h3> <a href="#project">PROJECT MANAGER</a> </h3>
				<h3><a href="#marketing">M3 MARKETING MANAGEMENT</a> </h3>
				<h3><a href="#data">BIG DATA MANAGEMENT</a> </h3>
				<h3> <a href="#trade">TRADE MANAGEMENT</a> </h3>
				<h3> <a href="#corporate">CORPORATE FINANCE</a> </h3>
				<h3> <a href="#tourism">TOURISM MANAGEMENT</a> </h3>
				<h3> <a href="#lobby">RELAZIONI ISTITUZIONALI LOBBY E COMUNICAZIONE D’IMPRESA</a> </h3>
			</div>
			<div class="col-lg-6 visible-lg visible-md">
				<h3 class="h2">#MasterYourCreativity</h3>
				<h3> <a href="#art">MASTER OF ART</a> </h3>
				<h3><a href="#cinema">GESTIONE DELLA PRODUZIONE CINEMATOGRAFICA E TELEVISIVA </a> </h3>
				<h3><a href="#fashion">FASHION </a> </h3>
				<h3> <a href="#food">FOOD AND WINE BUSINESS</a> </h3>
				<h3> <a href="#writing">WRITING SCHOOL FOR CINEMA & TELEVISION</a> </h3>
				<h3> <a href="#event">EVENT MANAGEMENT</a> </h3>
			</div>
		</div>
	</div>
</section>







<?php $leggi = array();
$leggi[ 'it' ] = 'Leggi di più';
$leggi[ 'en' ] = 'Read more';
?>
<section class="body-section bg_4_perche">
	<div class="container">




		<div class="row items">

			<?php
			/**
			 * Display a list of the most recent news in Boston
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',
						'terms' => 'project-management-master'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="project"></a>
			<h3 class="block-title h2 white-style"> Project Management </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>


			<div class="spacer-20"></div>

			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr, $size);
	
	?>
					</span>
				</div>


				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				

				</div>

				<div class="clearfix"></div>
			</article>


			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>

		<div class="row items">

			<?php
			/**
			 * Display a list of the most recent news in Boston
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'marketing-management-master'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="marketing"></a>
			<h3 class="block-title h2 white-style"> M3 MARKETING MANAGEMENT </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>


			<div class="spacer-20"></div>

			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr, $size);
	
	?>
					</span>
				</div>


				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				






				</div>

				<div class="clearfix"></div>
			</article>


			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>




		</div>





		<div class="row items">

			<?php
			/**
			 * Display a list of the most recent news in Boston
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'big-data'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="data"></a>
			<h3 class="block-title h2 white-style"> BIG DATA MANAGEMENT </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>


			<div class="spacer-20"></div>

			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr, $size);
	
	?>
					</span>
				</div>


				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				






				</div>

				<div class="clearfix"></div>
			</article>


			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>





		<div class="row items">

			<?php
			/**
			 * Display a list of the most recent news in Boston
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'trade-management'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="trade"></a>
			<h3 class="block-title h2 white-style"> TRADE MANAGEMENT </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>


			<div class="spacer-20"></div>

			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	$img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr, $size);
	
	?>
					</span>
				</div>


				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				






				</div>

				<div class="clearfix"></div>
			</article>


			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>




		</div>


		<div class="row">



			<?php
			/**
			 * Display a list of the most recent news in 
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'corporate-management'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="corporate"></a>
			<h3 class="block-title h2 white-style"> CORPORATE FINANCE </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>

			<div class="spacer-20"></div>


			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	$img_attr = array(
	'class'	=> "img-responsive",
'alt'	=> $post->post_title,
);
echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr, $size);
	
	?>
					</span>
				</div>
				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				


				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>



		<div class="row">
			<?php
			/**
			 * Display a list of the most recent news in 
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'tourism-management'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="tourism"></a>
			<h3 class="block-title h2 white-style"> TOURISM MANAGEMENT </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>

			<div class="spacer-20"></div>


			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr);
	
	?>
					</span>
				</div>
				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				


				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>



		<div class="row">
			<?php
			/**
			 * Display a list of the most recent news in 
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'lobby-comunicazione'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="lobby"></a>
			<h3 class="block-title h2 white-style"> RELAZIONI ISTITUZIONALI LOBBY E COMUNICAZIONE D’IMPRESA </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>

			<div class="spacer-20"></div>


			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr);
	
	?>
					</span>
				</div>
				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				


				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>



		<div class="row">
			<?php
			/**
			 * Display a list of the most recent news in 
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'art'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="art"></a>
			<h3 class="block-title h2 white-style"> MASTER OF ART </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>

			<div class="spacer-20"></div>


			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr);
	
	?>
					</span>
				</div>
				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				


				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>




		<div class="row">
			<?php
			/**
			 * Display a list of the most recent news in 
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'produzione-cinematografica'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="cinema"></a>
			<h3 class="block-title h2 white-style"> Gestione della Produzione Cinematografica e Televisiva – Major del Master In Media Entertainment </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>

			<div class="spacer-20"></div>


			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr);
	
	?>
					</span>
				</div>
				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				


				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>


<a name="fashion"></a>
		<div class="row">
			<?php
			/**
			 * Display a list of the most recent news in 
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'fashion'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
				
			<h3 class="block-title h2 white-style"> FASHION </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>

			<div class="spacer-20"></div>


			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr);
	
	?>
					</span>
				</div>
				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				


				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>


		<div class="row">
			<?php
			/**
			 * Display a list of the most recent news in 
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'food-wine'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="food"></a>
			<h3 class="block-title h2 white-style"> FOOD AND WINE BUSINESS </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>

			<div class="spacer-20"></div>


			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr);
	
	?>
					</span>
				</div>
				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				


				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>


		<div class="row">
			<?php
			/**
			 * Display a list of the most recent news in 
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'writing'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="writing"></a>
			<h3 class="block-title h2 white-style"> WRITING SCHOOL FOR CINEMA & TELEVISION </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>

			<div class="spacer-20"></div>


			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr);
	
	?>
					</span>
				</div>
				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				


				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>

		<div class="row">
			<?php
			/**
			 * Display a list of the most recent news in 
			 *
			 * @class WP_Query http://codex.wordpress.org/Class_Reference/WP_Query
			 */
			$locations_query = new WP_Query( array(
				'post_type' => 'post',
				'posts_per_page' => -1,
				'tax_query' => array(
					array(
						'taxonomy' => 'Master',
						'field' => 'slug',

						'terms' => 'event'
					)
				)
			) );
			// Display the custom loop
			if ( $locations_query->have_posts() ): ?>
			<a name="event"></a>
			<h3 class="block-title h2 white-style"> EVENT MANAGEMENT </h3>

			<?php while ( $locations_query->have_posts() ) : $locations_query->the_post(); ?>

			<div class="spacer-20"></div>


			<article itemscope itemtype="http://schema.org/Article" class="col-md-6">

				<div class="col-md-4">
					<span itemscope itemtype='http://schema.org/ImageObject'>
						<?php 
	 $img_attr = array(
	'class'	=> "img-responsive",
	'alt'	=> $post->post_title,
);
	echo get_the_post_thumbnail($post->ID, 'thumbnail',$img_attr);
	
	?>
					</span>
				</div>
				<div class="col-md-8">
					<h3 itemprop="name headline" class="home-news-headline">
  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
				


				</div>
				<div class="clearfix"></div>
			</article>
			<?php endwhile; wp_reset_postdata(); ?>
			</ul>
			<!--// end .postlist -->
			<?php endif; ?>
		</div>

		<p>
			<?php edit_post_link('<strong>Modifica Pagina</strong>', ''); ?>
		</p>
	</div>
</section>

<?php
get_footer( 2017 );
?>