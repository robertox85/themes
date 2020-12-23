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
	<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
   ym(67761961, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/67761961" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

    <link href="<?php bloginfo('template_directory');?>/getbootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">



    <!-- SNIPCART -->
    <!-- Snipcart stylesheet -->
    <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.0.16/default/snipcart.css" />
    <style type="text/css">
    input[type="text"] {
            border: none;
        }

        .snipcart * {
            font-family: 'Luiss Sans', Arial, Helvetica, sans-serif !important;
            font-weight: 400;
        }

        .snipcart-modal__container {
            z-index: 1000;
        }

        .snipcart-input__input:-webkit-autofill {
            background-color: transparent !important;
        }

        .snipcart__icon--blue-light path {
            fill: #CC8A00;
        }

        .snipcart__icon--blue-dark path {
            fill: #CC8A00;
        }

        .snipcart-payment-form--focused {
            border: 1px solid #CC8A00 !important;
        }

        @media screen and (max-width: 800px) {
            .snipcart-item-line__title {
                padding: 0 10px;
            }
        }

        .snipcart-discount-box__form {
            border: 1px solid #CC8A00;
        }

        .snipcart-discount-box__form .snipcart-input {
            outline: none;
        }

        .snipcart-discount-box__form .snipcart-input:focus-within {
            border: none;
        }

        .snipcart-discount-box__form .snipcart-discount-box__submit {
            color: #CC8A00;
        }

        .snipcart__box--badge-highlight {
            background: #CC8A00;
        }

        .snipcart__font--subtitle {
            font-family: 'Luiss Sans', Arial, Helvetica, sans-serif !important;
        }

        .snipcart-input {
            outline-color: #CC8A00;
        }

        .snipcart-input:focus-within {
            border: 1px solid #CC8A00;
        }

        .snipcart-form__select:focus {
            border: 1px solid #CC8A00;
        }

        .snipcart-typeahead__suggestions {
            border: 1px solid #CC8A00;
        }

        .snipcart-textbox--focus {
            border: 1px solid #CC8A00;
        }

        .snipcart-checkbox:checked+label:before {
            border: 1px solid #CC8A00;
            background-color: #CC8A00;
        }

        .snipcart-checkbox:focus+label:before,
        .snipcart-checkbox:hover+label:before {
            border: 1px solid #CC8A00;
        }

        .snipcart-cart-button {
            font-family: 'Luiss Sans', Arial, Helvetica, sans-serif !important;
            text-transform: uppercase;
            font-weight:600;
        }

        .snipcart-cart-button.snipcart-cart-button--highlight {
            background-image: linear-gradient(90deg, #CC8A00, #CC8A00);
        }

        .snipcart__actions--link {
            color: #CC8A00;
        }
        
        
        /* Aggiunte */

        .snipcart__box--badge, .snipcart__font--subtitle, .snipcart__font--xlarge {
        font-size: 24px !important;
        line-height: 32px !important;
        font-weight: 600 !important;
        }

        .snipcart-item-description {
        max-width: 500px;
        line-height: 28px !important;
        font-size: 18px !important;
        }
        
        .snipcart,
        .snipcart h3,
        .snipcart h3 a,
        .snipcart h3 a:hover {
        font-size: 18px;
        line-height:28px;
        }
        
         .snipcart-form__label {
            font-size: 16px;
            line-height:24px;
        font-weight: 400;
        }
        
        .snipcart__font--tiny {
            font-weight: 400;
        }
        
    </style>

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
            <header id="masthead" class="d-none d-lg-block">
                <div class="container px-0 pt-16 pb-24">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <div class="header-first-block d-flex align-items-center flex-row justify-content-start">
                            <div class="" id="logo">
                                <a href="<?php echo network_home_url() ?>" title="Home page">
                                    <img src="<?php echo site_url(); ?>/wp-content/themes/master_2017/img/logo-new-2.png"
                                        alt="Luiss Business School Logo" id="logo-img" />
                                </a>
                            </div>
                        </div>
                        <div class="header-second-block">
                            <nav id="secondary-nav" class="">
                                <ul>
                                    <li><a href="https://www.luiss.it/">Luiss.it</a></li>
                                    <li><a href="https://www.luiss.it/network">Luiss Network</a>
                                    </li>
                                    <li><a href="<?php echo network_home_url() ?>milano"><strong>Milano</strong></a></li>
                                    <li><a href="<?php echo network_home_url() ?>belluno"><strong>Belluno</strong></a></li>
                                </ul>
                            </nav>
                            <?php language_selector_flags();?>
                        </div>
                    </div>
                </div>
                <!-- END .container -->
            </header>

            <!-- MOBILE -->
            <header id="masthead" class="d-lg-none">
                <div class="container px-0 py-16">
                    <div class="d-flex align-items-center flex-row justify-content-between">
                        <div class="header-first-block d-flex align-items-center flex-row justify-content-start">
                            <a class="main-menu-toggle hamburger  hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </a>
                            <a class="" href="<?php echo network_home_url() ?>" title="Home page">
                                <img src="<?php echo site_url(); ?>/wp-content/themes/master_2017/img/logo-new-2.png"
                                    alt="Luiss Business School Logo" id="logo-img" />
                            </a>
                        </div>
                        <div class="header-second-block">
                            <?php language_selector_flags();?>
                        </div>
                    </div>
                </div>
                <!-- END .container -->
            </header>

            

            <!-- // Navigation bar to use in single pages (nav-it.php) -->
            <?php get_template_part('nav', 'en');  ?>


<!--
            <nav id="network-container-offcanvas">
                <div class="container px-0">
                    <div class="row">
                        <div class="container px-0" id="network-container-offcanvas-ul">
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
-->
<!--
            <nav id="breadcrumb-top-2" class="d-none d-lg-block">
                <div class="container px-0">
                    <div class="row breadcrumb px-0 pt-24 pb-16">
                        <?php 
                            // if (function_exists('bcn_display')) {
                            //   bcn_display();
                            // }
                            // $back_to_top_text = array();
                            // $back_to_top_text['it'] = 'Torna su';
                            // $back_to_top_text['en'] = 'Back to top';

                          ?>
                        <span class="back-to-top"><a id="backtotop" href="javascript:void(0)"><i
                                    class="fa fa-angle-up"></i>
                                <?php //echo $back_to_top_text[ICL_LANGUAGE_CODE] ?></a></span>
                    </div>
                </div>
            </nav>
    -->