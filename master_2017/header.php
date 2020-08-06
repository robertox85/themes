<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>">
    <title>
        <?php
global $page, $paged;
wp_title('|', true, 'right');
bloginfo('name');
?>
    </title>
    <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory');?>/img/favicon.ico" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-63172324-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-63172324-1', {
        'anonymize_ip': true
    });
    gtag('config', 'UA-63172324-1', {
        'optimize_id': 'GTM-K2JVW5J'
    });
    gtag('config', 'UA-63172324-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 672809849  havas-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-672809849"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'AW-672809849');
    </script>
    <!-- Global site tag (gtag.js) - Google Ads: 969246841 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-969246841"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'AW-969246841');
    </script>
    <!-- Facebook Pixel Code -->
    <script>
    ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
            n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '203976930981295');
    fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" src="https://www.facebook.com/tr?id=203976930981295&ev=PageView
&noscript=1" />
    </noscript>
    <!-- Hotjar Tracking Code for https://businessschool.luiss.it/ -->
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 1739676,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script data-obct type="text/javascript">
    /** DO NOT MODIFY THIS CODE**/ ! function(_window, _document) {
        var OB_ADV_ID = '00a4dea5852c992781d1c553f9553aaea5';
        if (_window.obApi) {
            var toArray = function(object) {
                return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];
            };
            _window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));
            return;
        }
        var api = _window.obApi = function() {
            api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);
        };
        api.version = '1.1';
        api.loaded = true;
        api.marketerId = OB_ADV_ID;
        api.queue = [];
        var tag = _document.createElement('script');
        tag.async = true;
        tag.src = '//amplify.outbrain.com/cp/obtp.js';
        tag.type = 'text/javascript';
        var script = _document.getElementsByTagName('script')[0];
        script.parentNode.insertBefore(tag, script);
    }(window, document);
    obApi('track', 'PAGE_VIEW');
    </script>


    <link href="<?php bloginfo('template_directory');?>/getbootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">



    <!-- SNIPCART -->
    <!-- Snipcart stylesheet -->
    <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.16/default/snipcart.css" />
    <script src="https://cdn.snipcart.com/themes/v3.0.16/default/snipcart.js"></script>
    <style type="text/css">
    .snipcart * {
        font-family: "ITC Officina Sans W01";
    }

    .snipcart-modal__container {
        z-index: 1000;
    }

    .snipcart-input__input:-webkit-autofill {
        background-color: transparent !important;
    }

    .snipcart__icon--blue-light path {
        fill: #fdbb4d;
    }

    .snipcart__icon--blue-dark path {
        fill: #fdbb4d;
    }

    .snipcart-payment-form--focused {
        border: 1px solid #fdbb4d !important;
    }

    .snipcart-discount-box__form {
        border: 1px solid #fdbb4d;
    }

    .snipcart-discount-box__form .snipcart-input {
        outline: none;
    }

    .snipcart-discount-box__form .snipcart-input:focus-within {
        border: none;
    }

    .snipcart-discount-box__form .snipcart-discount-box__submit {
        color: #fdbb4d;
    }

    .snipcart__box--badge-highlight {
        background: #fdbb4d;
    }

    .snipcart__font--subtitle {
        font-family: "ITC Officina Sans W01 Bold";
    }

    .snipcart-input {
        outline-color: #fdbb4d;
    }

    .snipcart-input:focus-within {
        border: 1px solid #fdbb4d;
    }

    .snipcart-form__select:focus {
        border: 1px solid #fdbb4d;
    }

    .snipcart-typeahead__suggestions {
        border: 1px solid #fdbb4d;
    }

    .snipcart-textbox--focus {
        border: 1px solid #fdbb4d;
    }

    .snipcart-checkbox:checked+label:before {
        border: 1px solid #fdbb4d;
        background-color: #fdbb4d;
    }

    .snipcart-checkbox:focus+label:before,
    .snipcart-checkbox:hover+label:before {
        border: 1px solid #fdbb4d;
    }

    .snipcart-cart-button {
        font-family: "Droid Sans Mono W01";
    }

    .snipcart-cart-button.snipcart-cart-button--highlight {
        background-image: linear-gradient(90deg, #fdbb4d, #fdbb4d);
    }

    .snipcart__actions--link {
        color: #fdbb4d;
    }
    </style>
    <!-- Display stock quantity -->
    <div hidden id="snipcart" data-api-key="MjZiMzk5YWItNmYwNi00YmNmLTk3Y2ItNTU3OTZmZWIwZWU0NjM3Mjg0MTQ3OTIxMjgwNTM1">
    </div>
    <!-- Snipcart custom script -->
    <script>
    window.SNIPCART_STOCK_LAMBDA_URL = 'https://lw0s05w009.execute-api.eu-west-1.amazonaws.com/api/';
    </script>


    <?php wp_head();?>


</head>

<body <?php body_class();?>>
    <div id="site-wrapper">
        <div id="site-canvas">

            <!-- DESKTOP -->
            <header id="masthead" class="d-none d-lg-block pb-24 pl-0">
                <div class="container">
                    <div class="row">
                        <div id="mobile-menu-trigger">

                            <a class="main-menu-toggle menu-icon" title="apri il menu"><span></span>
                            </a>


                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4" id="logo">
                            <a href="<?php echo network_home_url() ?>" title="Home page">
                                <img src="<?php echo site_url() ?>/wp-content/themes/master_2017/img/logo-new.png"
                                    alt="Luiss Business School Logo" id="logo-img" />
                            </a>
                        </div>
                        <nav id="secondary-nav" class="col-md-6">
                            <ul>
                                <li><a href="http://www.luiss.it/">Luiss.it</a></li>
                                <li><a href="javascript:void(0)" id="network-offcanvas-trigger">Luiss Network</a></li>
                                <li><a href="https://businessschool.luiss.it/milano"><strong>Milano</strong></a></li>
                                <li><a href="https://businessschool.luiss.it/belluno"><strong>Belluno</strong></a></li>
                            </ul>
                        </nav>
                        <div class="col-md-2">
                            <?php language_selector_flags();?>
                        </div>

                    </div>
                    <!-- END .row -->
                </div>
                <!-- END .container -->
            </header>
    



            <!-- MOBILE -->
            <header id="masthead" class="d-block d-lg-none pb-24 pl-0 shadow-bottom">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        

                        <a class="col-xs-1 main-menu-toggle hamburger  hamburger--collapse" type="button" >
                          <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                          </span>
                        </a> 

                        <a class="col-xs-8 mx-24 mx-md-0" href="<?php echo site_url() ?>" title="Home page">
                            <img src="<?php echo site_url() ?>/wp-content/themes/master_2017/img/logo-new.png"
                                alt="Luiss Business School Logo" id="logo-img" />
                        </a>

                        <?php language_selector_flags();?>
                    </div>
                    <!-- END .row -->
                </div>
                <!-- END .container -->
            </header>

            <!-- // Navigation bar to use in single pages (nav-it.php) -->
            <?php get_template_part('nav', 'it');  ?>

            

            <nav id="network-container-offcanvas">
                <div class="container">
                    <div class="row">
                        <div class="large-centered columns" id="network-container-offcanvas-ul">
                            <div class="col-xs-6 col-sm-3">
                                <ul>
                                    <li><a href="http://www.luissuniversitypress.it/">University Press</a></li>
                                    <li><a href="http://www.luiss.tv/">LUISS TV</a></li>
                                    <li><a href="http://www.radioluiss.it/">Radio LUISS</a></li>
                                    <li><a href="http://www.store.luiss.it/">LUISS Store</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <ul>
                                    <li><a href="http://www.luissenlabs.com/">LUISS Enlabs</a></li>
                                    <li><a href="http://www.laureatiluiss.it/">Associazione Laureati</a></li>
                                    <li><a href="http://www.ilab.luiss.it/">i-lab</a></li>
                                    <li><a href="http://www.fondazionecapriglione.luiss.it/">Fondazione Capriglione
                                            Onlus</a></li>
                                </ul>
                            </div>
                            <div class="col-xs-6 col-sm-3">
                                <ul>
                                    <li><a href="http://www.amministrazioneincammino.luiss.it/">Amministrazione in
                                            cammino</a></li>
                                    <li><a href="http://archivioceradi.luiss.it/">Archivio Ceradi</a></li>
                                    <li><a href="http://www.romeinternationalschool.it/">Rome International School</a>
                                    </li>
                                    <li><a href="http://www.emdeaconsulting.com/">EMDEA Junior Consulting</a></li>
                                </ul>
                            </div>
                            <button class="close-menu">x</button>
                        </div>
                    </div>
                </div>
            </nav>


            <nav id="breadcrumb-top-2" class="d-none d-lg-block">
                <div class="container px-0">
                    <div class="row breadcrumb px-0 pt-24 pb-16">
                        <?php 
                            if (function_exists('bcn_display')) {
                              bcn_display();
                            }
                            $back_to_top_text = array();
                            $back_to_top_text['it'] = 'Torna su';
                            $back_to_top_text['en'] = 'Back to top';

                          ?>
                        <span class="back-to-top"><a id="backtotop" href="javascript:void(0)"><i
                                    class="fa fa-angle-up"></i>
                                <?php echo $back_to_top_text[ICL_LANGUAGE_CODE] ?></a></span> </div>
                    <!--END .row -->
                </div>
                <!-- .END container -->
            </nav>