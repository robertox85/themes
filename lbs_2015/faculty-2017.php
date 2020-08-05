<?php
/**
 * Template Name: Faculty 2017
 * @file faculty.php
 */
// Exit if accessed directly

if ( !defined( 'ABSPATH' ) )exit;


get_header( 2017 );
?>





<style type="text/css">
	.bg_faculty {
		background: url(<?php echo get_site_url() ?>/wp-content/uploads/2017/03/Immagine_Faculty_filtro_2.jpg) no-repeat center center fixed;
		-moz-background-size: cover;
		-webkit-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	}
</style>

<div id="Carousel" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
		<div class="item active"><img src="<?php echo get_site_url() ?>/wp-content/uploads/2017/04/Faculty-luissbs.jpg" alt="Faculty">
			<div class="container">
				<div class="carousel-caption">
					<h1>
						<?php the_title()?>
					</h1>
					<p><span class="slider_paragraf"><strong><?php echo get_field('sub_h1') ?></strong></span>
				</div>
			</div>
		</div>
	</div>
</div>


<?php $link_1 = array();
		$link_1['it'] = '/faculty-research/aree-di-ricerca/';
		$link_1['en'] = '/en/faculty-research/research-area/';
?>
<?php   $link_2 = array();
		$link_2['it'] = '/faculty-research/docenti/';
		$link_2['en'] = '/en/faculty-research/teachers/';
?>
<section class="body-section">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="feature">
					<h2 class="block-title h2">
						<?php echo get_field('home_launch_box_title_1') ?>
					</h2>
					<p>
						<?php echo get_field('home_launch_box_excerpt_1') ?> </p>
				</div>
			</div>
			<div class="col-md-5 pull-right">
				<div class="feature">
					<h2 class="block-title h2 pull-right">
						<?php echo get_field('home_launch_box_title_2') ?>
					</h2>
					<p class=" pull-right text-right">
						<?php echo get_field('home_launch_box_excerpt_2') ?>
					</p>
					
				</div>
			</div>
		</div>
	</div>
</section>


<section class="body-section faculty-cards cards bg_faculty">

	<!-- END wide-row -->

	<div class="container">
		<div class="row">
			<h2 class="block-title h2 white-style">Faculty</h2>
			<div class="col-md-9">
				<a href="<?php echo html_entity_decode(get_field('link_tuti_i_docenti')); ?>" class=""><img src="<?php echo site_url() ?>/wp-content/uploads/2017/05/Faculty.jpg" alt="Faculty" class="img-responsive"></a>
			</div>





			<div class="col-md-3">
				<a href="<?php echo html_entity_decode(get_field('link_tuti_i_docenti')); ?>" class="button"><span class="white-style"><?php echo html_entity_decode(get_field('etichetta_tutti_i_docenti')); ?></span></a>
			</div>
		</div>







		<div class="row" style="margin-bottom: 2%">
			<h2 class="block-title h2 white-style">ADJUNT FACULTY</h2>
			<div class="col-md-9">
				<a href="<?php echo html_entity_decode(get_field('link_tuti_i_docenti')); ?>" class=""><img src="<?php echo site_url() ?>/wp-content/uploads/2017/05/AdjunctFaculty.jpg" alt="Faculty" class="img-responsive"></a>
			</div>
			<div class="col-md-3">
				<a href="<?php echo html_entity_decode(get_field('link_tuti_i_docenti_adjunt')); ?>" class="button "><span class="white-style"> <?php echo html_entity_decode(get_field('etichetta_tutti_i_docenti_adjunt')); ?></span></a>
			</div>
		</div>
		
		<!-- END container -->
	</div>
	<!-- END row -->
	<?php $search = array();
		$Search['it'] = 'Cerca per insegnamento o per docente:';
		$Search['en'] = 'Search by course or professor: ';
		
		$search_button_text = array();
		$search_button_text['it'] = 'Cerca';
		$search_button_text['en'] = 'Search';
?>
	<div class="ricerca-col">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 space">
					<h2>Faculty Directory</h2>
					<label>
						<?php echo $Search[ICL_LANGUAGE_CODE]; ?> </label>
					<form action="/faculty-research/docenti/" method="get">
						<input type="text" class="live-search col-md-10" name="docente" id="search-query" value=""/>
						<button type="submit" class="button white col-md-2">
							<?php echo $search_button_text[ICL_LANGUAGE_CODE]  ?>
						</button>
						<div id="live-search-output"></div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>



<script src="<?php echo get_bloginfo('template_url') ?>/js/jquery.auto-complete.min.js"></script>
<script>
	var listato = "";

	function hideList() {
		$( listato ).hide();
	}
	// $('.carousel').carousel({
	//   interval: 5000 //changes the speed
	// })

	$( function () {
		$( "#search-query" ).autoComplete( {
			source: function ( term, response ) {
				$.ajax( {
					url: '<?php echo get_bloginfo('
					template_url ') ?>/json/docenti-<?php echo ICL_LANGUAGE_CODE  ?>.json',
					cache: true,
					dataType: "json",
					cache: false,
					//context: $(this.element[0]).parent().next(),
					data: {
						name_startsWith: term
					},
					success: function ( data ) {
						var listing = "";
						var maxResults = 0;
						for ( var i = 0; i < data.list.length; i++ ) {
							if ( data.list[ i ].docente_searchstring.toLowerCase().indexOf( term.toLowerCase() ) > -1 ) {
								if ( maxResults > 30 ) {
									break;
								}
								listing += '<li><a href="' + data.list[ i ].docente_permalink + '" class="item">' + data.list[ i ].docente_cognome + ' ';
								listing += data.list[ i ].docente_nome + '<br><span class="insegnamento">' + data.list[ i ].docente_insegnamenti + '</span></a></li>';
								maxResults++;
							}
						}
						if ( maxResults === 0 ) {
							$( '#live-search-output' ).html( '' );
						} else {
							$( '#live-search-output' ).html( '<div class="live-search-results"><ul>' + listing + '</ul></div>' ).show();;
						}

					},
					error: function ( data ) {
						console.log( "err", data );
					}
				} );
			},
			minLength: 5
		} );
		$( "#live_search" ).blur( function () {
			listato = $( '#live-search-output' );
			setTimeout( hideList, 500 );
		} ).focus( function () {
			if ( $( "#live-search-output .searchResult" ).length > 0 ) {
				$( '#live-search-output' ).show();
			}
		} );
	} );
</script>
<?php get_footer(2017); ?>