</div>
<?php
$certificazioni_riconoscimenti = array();
$certificazioni_riconoscimenti['it'] = 'Certificazioni e riconoscimenti';
$certificazioni_riconoscimenti['en'] = "Affiliations and Accreditations";
?>
<?php
$contatti = array();
$contatti['it'] = 'Contatti';
$contatti['en'] = "Contact Information";
?>
<?php
$privacy = array();
$privacy['it'] = "/informativa-sulla-privacy/";
$privacy['en'] = "/en/privacy-policy/";
?>
<?php
$mailing = array();
$mailing['it'] = 'Iscriviti alla nostra newsletter';
$mailing['en'] = "Subscribe to our Mailing List";

$current_blog_id = get_query_var( 'current_blog_id' );
?>

<footer>

    <div class="footer my-0 py-0">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-logos" style="width:100%">
                        <h3 class="color__blue mb-32 mt-48"><?php echo $certificazioni_riconoscimenti[ICL_LANGUAGE_CODE]; ?></h3>
                        <ul style="display:flex; flex-direction: row; justify-content: space-between; flex-wrap: wrap;">
                            <li class="equis"><a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank">Equis</a></li>
                            <li><a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="<?php echo site_url() ?>/wp-content/uploads/2018/01/ISO_9001_2015_BW.jpg" alt="Azienda con sistema di Gestione qualità certificato da DNV GL iISO 9001" class="img-responsive" /></a></li>
                            <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/asfor-ordinario-footer-bw.jpg" alt="LUISS Business School è socio ASFOR (Associazione per la Formazione alla Direzione Aziendale)." width="100" class="img-responsive" /></a></li>
                            <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/rep-luiss-footer-bw.jpg" alt="LUISS Business School è REP – Registrated Education Provider del PMI, il Project Management Institute." width="100" class="img-responsive" /></a></li>
                            <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="<?php echo site_url() ?>/wp-content/uploads/2015/05/regione-lazi-footero-bw.jpg" alt="LUISS Business School è struttura accreditata presso la Regione Lazio per le attività di formazione." width="100" class="img-responsive" /></a></li>
                            <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="<?php echo site_url() ?>/wp-content/uploads/2018/06/grli_BW.png" alt="LUISS Business School è partner GRLI – Globally Responsible Leadership Initiative" width="100" class="img-responsive" /></a></li>
                            <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="<?php echo site_url() ?>/wp-content/uploads/2018/06/prme_BW_rev.png" alt="LUISS Business School è membro PRME – United Nations Principles for Responsible Management Education (PRME)." width="100" class="img-responsive" /></a></li>

                            <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="<?php echo site_url() ?>/wp-content/uploads/2019/01/business-educational-alliance-logoBN.png" alt="LUISS Business School è membro  AACSB " width="100 " class="img-responsive" /></a></li>
                            <li> <a href="<?php echo site_url() ?>/perche-luiss-bs/certificazioni-e-riconoscimenti/" target="_blank"><img src="<?php echo site_url() ?>/wp-content/uploads/2019/08/GBSN-150.png" alt="Global Business School Network" width="150 " class="img-responsive" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <?php if( $current_blog_id === 1 ): ?>
        <div class="container-fluid">
            <div class="row" style="background-image:url(<?php echo get_stylesheet_directory_uri() ?>/pco/images/social-wall-bg.png);background-repat:no-repeat;background-size:cover;backgroun-position:center">
                <div class="col-xs-12">
                    <h3 class="text-center pt-128 pb-24">Social Wall</h3>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
                                <link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
                                <ul class="juicer-feed" data-feed-id="luissbusiness-9274faa2-d37a-4a26-bd24-d134adebd1bb" data-per="6" data-gutter="10"></ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php endif; ?>
        <div class="container-fluid footer_container">
            <div class="container">
                <div class="row pt-128 pb-24" style="border-bottom: 1px solid #fff;">
                    <div class="col-xs-12 col-md-8 px-0">
                        <!-- Begin Mailchimp Signup Form -->
                        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                        <style type="text/css">
                            /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                      We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                        </style>
                        <style type="text/css">
                            #mc-embedded-subscribe-form input[type=checkbox] {
                                display: inline;
                                width: auto;
                                margin-right: 10px;
                            }

                            #mergeRow-gdpr {
                                margin-top: 20px;
                            }

                            #mergeRow-gdpr fieldset label {
                                font-weight: normal;
                            }

                            #mc-embedded-subscribe-form .mc_fieldset {
                                border: none;
                                min-height: 0px;
                                padding-bottom: 0px;
                            }

                            #mc_embed_signup .mc-field-group {
                                padding-bottom: 1%;
                            }
                        </style>
                        <div id="mc_embed_signup">
                            <form action="https://luiss.us4.list-manage.com/subscribe/post?u=fbe9a604a26369735b564dc99&amp;id=5e790bb539" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate px-0 pt-0 pb-32" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                                    <h3 class="color__white pb-24"><?php echo $mailing[ICL_LANGUAGE_CODE]; ?></h3>
                                    <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                                    <div class="mc-field-group">
                                        <label for="mce-EMAIL">Email Address <span class="asterisk">*</span></label>
                                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                                    </div>
                                    <div id="mergeRow-gdpr" class="mergeRow gdpr-mergeRow content__gdprBlock mc-field-group">
                                        <div class="content__gdpr">

                                            <p>Do you consent to the processing of your personal information for promotional purposes, relevant news and information about programmes at LUISS Business School? You may unsubscribe at any time.</p>
                                            <fieldset class="mc_fieldset gdprRequired mc-field-group" name="interestgroup_field">
                                                <label class="checkbox subfield" for="gdpr_1"><input type="checkbox" id="gdpr_1" name="gdpr[1]" value="Y" class="av-checkbox gdpr"><span>Yes, I consent</span> </label>
                                            </fieldset>

                                        </div>
                                        <div class="content__gdprLegal">

                                        </div>
                                    </div>
                                    <div id="mce-responses" class="clear">
                                        <div class="response" id="mce-error-response" style="display:none"></div>
                                        <div class="response" id="mce-success-response" style="display:none"></div>
                                    </div> <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_fbe9a604a26369735b564dc99_5e790bb539" tabindex="-1" value=""></div>
                                    <div class="clear">
                                        <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button button__primary"></div>
                                </div>
                            </form>
                            <p><a href="//businessschool.luiss.it/informativa-sul-trattamento-dei-dati-personali-newsletter/" style="color: #FDBB4D;">Informativa sul trattamento dei dati personali</a></p>
                        </div>
                        <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
                        <script type='text/javascript'>
                            (function($) {
                                window.fnames = new Array();
                                window.ftypes = new Array();
                                fnames[0] = 'EMAIL';
                                ftypes[0] = 'email';
                            }(jQuery));
                            var $mcj = jQuery.noConflict(true);
                        </script>
                        <!--End mc_embed_signup-->
                    </div>

                    <!-- Address -->
                    <div class="col-xs-12 col-md-4 px-0">
                        <h3 class="color__white pb-24"><?php echo $contatti[ICL_LANGUAGE_CODE]; ?></h3>
                        <address>
                            Villa Blanc,
                            Via Nomentana, 216 - 00162 Roma <br />
                            Roma, Italia <br />
                            Tel. +39 06 852251 <br />
                            Email: <a href="mailto:luissbs@luiss.it" class="">luissbs@luiss.it </a>
                        </address>

                        <ul class="footer-socials list-inline">
                            <li><a href="https://www.facebook.com/pages/LUISS-Business-School/152306674798769"><span class="social-icon icon-facebook"></span></a></li>
                            <li><a href="https://twitter.com/LUISSBusiness"><span class="social-icon icon-twitter"></span></a></li>
                            <li><a href="https://instagram.com/luissbusiness/"><span class="social-icon icon-instagram "></span></a> </li>
                            <li><a href="https://www.flickr.com/photos/luissbusiness/albums"><span class="social-icon icon-flickr"></span></a> </li>
                            <li><a href="https://www.youtube.com/user/luissmba"><span class="social-icon icon-youtube"></span></a> </li>
                            <li><a href="https://www.linkedin.com/school/luiss-business-school/"><span class="social-icon icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--/footer-->

    <div class="copyright">
        <div class="container">
            <div class="row px-0 pt-24 pb-64">
                <div class="col-xs-12 px-lg-0">
                    <p>The PMI Registered Education Provider logo is a registered mark of the Project Management Institute, Inc. <br>
                        Use of this website constitutes acceptance of <a href="/cookies/" style="color: #fdbb4d; font-size: 1rem;">Cookie Policy</a>.<br>
                        © LUISS Business School Villa Blanc,Via Nomentana, 216 00162 Roma, Italia - Centralino T 06 852251 - P.IVA 01067231009 </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- .site-footer -->

<?php wp_footer();?>
</div>
<!-- END  #site-canvas -->
</div>
<!-- END #site-wrapper -->

<script async data-main="<?php echo get_bloginfo('template_url') ?>/js/app" src="<?php echo get_bloginfo('template_url') ?>/js/require.js"></script>

<script type="text/javascript">
    _linkedin_partner_id = "1751300";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
    (function() {
        var s = document.getElementsByTagName("script")[0];
        var b = document.createElement("script");
        b.type = "text/javascript";
        b.async = true;
        b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
        s.parentNode.insertBefore(b, s);
    })();
</script>
<noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=1751300&fmt=gif" />
</noscript>

<script type="text/javascript">
    /*<![CDATA[*/
    (function() {
        var sz = document.createElement('script');
        sz.type = 'text/javascript';
        sz.async = true;
        sz.src = '//siteimproveanalytics.com/js/siteanalyze_6100150.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(sz, s);
    })();
    /*]]>*/
</script>

</body>

</html>