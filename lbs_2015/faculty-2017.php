<?php
/**
 * Template Name: Faculty 2017
 * @file faculty.php
 */
// Exit if accessed directly

if ( !defined( 'ABSPATH' ) )exit;

wp_enqueue_style('Bootstrap_Styles','https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css');
get_header( 2017 );
?>

<div class="item-centre box-cover-subhome" style="background-image:url(<?php echo get_site_url() ?>/wp-content/uploads/2017/04/Faculty-luissbs.jpg)">
    <div class="container">
        <div class="row centre mt-128 pt-80">
            <div class="col-md-12">
                <h1><?php echo the_title(); ?></h1>
                <h2><span class="bg__gold"><?php echo get_field('sub_h1') ?></span></h2>
            </div>
        </div>
    </div>
</div>

<!-- Faculty -->
<div class="container-fluid" style="border-bottom: 2px solid #e8e8e8;">
    <div class="container mt-64 mb-48">
        <div class="row">
            <div class="col-xs-12 col-lg-4 section-title">
                <h3 class="color__gold pb-24 mb-0"><?php echo get_field('home_launch_box_title_1') ?></h3>
            </div>
            <div class="col-xs-12 col-md-8">
                <p class="pb-16 mb-0"><?php echo get_field('home_launch_box_excerpt_1') ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Ricerca -->
<div class="container-fluid" style="border-bottom: 2px solid #e8e8e8;">
    <div class="container mt-64 mb-48">
        <div class="row">
            <div class="col-xs-12 col-lg-4 section-title">
                <h3 class="color__gold pb-24 mb-0"><?php echo get_field('home_launch_box_title_2') ?></h3>
            </div>
            <div class="col-xs-12 col-md-8">
                <p class="pb-16 mb-0"><?php echo get_field('home_launch_box_excerpt_2') ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Faculty section -->
<section class="faculty-cards cards bg_faculty py-48 py-md-64">
    <div class="container">
        <div class="row">
            <div class="col-md-5 offset-md-1 section-title pt-48 pt-md-64">
                <img src="<?php echo site_url() ?>/wp-content/uploads/2017/05/Faculty.jpg" alt="Faculty" class="img-responsive">
                <h6 class="color__white py-24">Faculty</h6>
                <a class="button button__primary bg__gold color__white" href="<?php echo get_field('link_tuti_i_docenti') ?>"><?php echo get_field('etichetta_tutti_i_docenti') ?></a>
            </div>
            <div class="col-md-5 section-title pt-48 pt-md-64">
                <img src="<?php echo site_url() ?>/wp-content/uploads/2017/05/AdjunctFaculty.jpg" alt="Faculty" class="img-responsive">
                <h6 class="color__white py-24">Adjunt Faculty</h6>
                <a class="button button__primary bg__gold color__white" href="<?php echo get_field('link_tuti_i_docenti_adjunt') ?>"><?php echo get_field('etichetta_tutti_i_docenti_adjunt') ?></a>
            </div>
        </div>
    </div>
</section>

<!-- search -->
<?php $search = array();
		$Search['it'] = 'Cerca per insegnamento o per docente:';
		$Search['en'] = 'Search by course or professor: ';
		
		$search_button_text = array();
		$search_button_text['it'] = 'Cerca';
		$search_button_text['en'] = 'Search';
?>
<section class="bg__gold py-48 py-md-80">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 section-title">
                <h3 class="color__white pb-8">Faculty Directory</h3>
                <p class="color__white pb-24">
                    <?php echo $Search[ICL_LANGUAGE_CODE]; ?>
                </p>
            </div>
        </div>
                <form style="align-items:baseline; width: 100%" action="/faculty-research/docenti/" method="get" class="d-flex flex-row align-items-stretch justify-content-between">
                <input type="text" class="live-search" name="docente" id="search-query" value="" style="width:75%; height:auto" />
                <button type="submit" class="button button__primary bg__white color__blue" style="width: 20%; margin-bottom:0;">
                <?php echo $search_button_text[ICL_LANGUAGE_CODE]  ?>
                </button>
                <div id="live-search-output"></div>
                </form>
    </div>
</section>




<script src="<?php echo get_bloginfo('template_url') ?>/js/jquery.auto-complete.min.js"></script>
<script>
    var listato = "";

    function hideList() {
        $(listato).hide();
    }
    // $('.carousel').carousel({
    //   interval: 5000 //changes the speed
    // })

    $(function() {
        $("#search-query").autoComplete({
            source: function(term, response) {
                $.ajax({
                    url: '<?php echo get_bloginfo('
					template_url ') ?>/json/docenti-<?php echo ICL_LANGUAGE_CODE  ?>.json',
                    cache: true,
                    dataType: "json",
                    cache: false,
                    //context: $(this.element[0]).parent().next(),
                    data: {
                        name_startsWith: term
                    },
                    success: function(data) {
                        var listing = "";
                        var maxResults = 0;
                        for (var i = 0; i < data.list.length; i++) {
                            if (data.list[i].docente_searchstring.toLowerCase().indexOf(term.toLowerCase()) > -1) {
                                if (maxResults > 30) {
                                    break;
                                }
                                listing += '<li><a href="' + data.list[i].docente_permalink + '" class="item">' + data.list[i].docente_cognome + ' ';
                                listing += data.list[i].docente_nome + '<br><span class="insegnamento">' + data.list[i].docente_insegnamenti + '</span></a></li>';
                                maxResults++;
                            }
                        }
                        if (maxResults === 0) {
                            $('#live-search-output').html('');
                        } else {
                            $('#live-search-output').html('<div class="live-search-results"><ul>' + listing + '</ul></div>').show();;
                        }

                    },
                    error: function(data) {
                        console.log("err", data);
                    }
                });
            },
            minLength: 5
        });
        $("#live_search").blur(function() {
            listato = $('#live-search-output');
            setTimeout(hideList, 500);
        }).focus(function() {
            if ($("#live-search-output .searchResult").length > 0) {
                $('#live-search-output').show();
            }
        });
    });
</script>
<?php edit_post_link('<p><strong>Modifica Pagina</strong></p>'); ?>
<?php get_footer(2017); ?>