<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en" id="Page"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en" id="Page"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" xmlns:fb="http://www.facebook.com/2008/fbml" xml:lang="en" lang="en" id="Page"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo bloginfo('template_url'); ?>/http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo bloginfo('template_url'); ?>/<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif|Open+Sans+Condensed:300,700,300italic' rel='stylesheet' type='text/css' />
     <!-- Bootstrap -->
    <link href="<?php echo bloginfo('template_url'); ?>/<?php bloginfo('template_url'); ?>/css/theme.custom.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo bloginfo('template_url'); ?>/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="<?php echo bloginfo('template_url'); ?>/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_enqueue_script( 'theme.functions', get_template_directory_uri() . '/js/theme.functions.js', array( 'jquery' ) ); ?>
    <link href="<?php echo bloginfo('template_url'); ?>/<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" />
	<?php wp_head(); ?>
    <meta name="viewport" content="width=device-width" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <title>Oxfam GB | leading UK charity fighting global poverty</title>
    <meta name="description" content="Oxfam is a globally renowned aid and development charity with 70 years of experience, working and campaigning with partners in over 90 countries worldwide." />
    <meta name="keywords" content="oxfam, donate, charity, campaigns, international development, emergencies, poverty, hunger, food, fundraising, shop, second hand, jobs, teachers" />
    <!-- SMART APP BANNER FOR iOS-->
    <meta name="apple-itunes-app" content="app-id=1135420297">

    <!-- SMART APP BANNER FOR ANDROID -->
    <meta name="google-play-app" content="app-id=uk.org.oxfam.myoxfam">
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/media/Custom/CSS/SmartAppBanner/smartAppBanner.css">
    <script src="<?php echo bloginfo('template_url'); ?>/media/Custom/Javascript/SmartAppBanner/smartAppBanner.js"></script>
    <script src="<?php echo bloginfo('template_url'); ?>/media/Custom/Javascript/SmartAppBanner/smartAppBannerAndroid.js"></script>

    <meta name="google-site-verification" content="F_PVNCFY4XfayD195A8YhtFYMJzwfurVeFulhnKT7Y4" />
    <meta name="p:domain_verify" content="14495c8070f22af60ce0b6def5968368" />
	
    <style>
        .ui-mobile-viewport .sm-featured-item .wysiwyg,
        .ui-mobile-viewport .sm-featured-item .sm-image p {
            margin-top: 0!important;
        }
        
        .ui-mobile-viewport .emergency-promo-bar-outer.Header {
            display: none;
        }
        /* WWLWP Styles */
        
        .OxfamWebFont {
            font-family: 'OxfamTStar', Arial, 'Trebuchet MS', sans-serif;
        }
        
        #Container {
            margin: 0 auto!important;
            width: 100%!important;
        }
        
        #Content {
            width: auto!important;
            margin: 0 auto;
        }
        
        .component {
            width: 910px!important;
            margin: 0 auto;
        }
        
        .component-nobg {
            width: 100%!important;
            margin: 0 auto;
        }
        
        .heroFullWidth .component,
        .heroFullWidth .module-set-1cols .module-col {
            width: 100%!important;
        }
        
        .navigation-primary,
        #ContentTop {
            margin: 0 auto!important;
        }
        
        .social-networking-page-top.social-networking-width-signup.component {
            width: 880px!important;
        }
        
        .ui-mobile-viewport .component-body.heroFullWidth {
            padding: 0;
        }
        
        .statComponent {
            background-color: #E0DDD0!important;
            padding-top: 40px!important;
            padding-bottom: 40px!important;
            border-bottom: none!important
        }
        
        .statComponent a:hover {
            text-decoration: none!important;
            color: #F47B29!important
        }
        
        .ui-mobile-viewport .component {
            width: 100%!important;
            margin: 0 auto;
        }
        
        .ui-mobile-viewport .statComponent p,
        .ui-mobile-viewport .statComponent a {
            font-size: 32px!important
        }
        
        .ui-mobile-viewport .statComponent a {
            clear: both;
            display: block;
        }
        
        .pie-legend {
            clear: both!important;
            font-size: 16px!important;
            list-style-type: none!important;
            margin-left: 0!important;
            margin-bottom: 40px!important;
        }
        
        .pie-legend li {
            clear: both!important;
            margin-bottom: 25px!important;
            margin-left: 0;
            padding-top: 5px!important;
            font-size: 16px!important;
        }
        
        .pie-legend span {
            display: block;
            width: 40px;
            height: 27px;
            float: left;
            margin-right: 15px;
            color: #fff;
            font-weight: bold;
            padding-top: 11px;
            text-align: center;
            top: -11px;
            position: relative;
        }
        
        .ui-mobile-viewport .pie-legend {
            margin-left: -15px!important;
        }
        
        .ui-mobile-viewport .pie-legend li span {
            background-color: #666!important;
            width: 96%;
            clear: both;
            margin: 0 auto;
        }
        
        .ui-mobile-viewport .pie-legend li {
            margin-bottom: 20px;
            font-size: 14px!important;
            text-align: center;
        }
        
        h2.howWeSpendYourMoney {
            font-size: 40px!important;
            padding: 20px 0 30px 5px;
            line-height: 1;
            font-family: 'OxfamTStar', Arial, 'Trebuchet MS', sans-serif;
            text-transform: uppercase;
            font-weight: 400!important;
        }
        
        .ui-mobile-viewport h2.howWeSpendYourMoney,
        .ui-mobile-viewport .everyAction h2 {
            font-size: 20px!important;
            font-weight: 700;
            font-family: Arial, 'Trebuchet MS', sans-serif;
        }
        
        .videoWrapper {
            position: relative;
            padding-bottom: 56.25%;
            /* 16:9 */
            padding-top: 25px;
            height: 0;
        }
        
        .videoWrapper iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }
        
        h1.block-title.block-title-page,
        div#ContentTop {
            display: none;
        }
        
        .portfolio-showcase {
            margin-top: -50px!important;
        }
    </style>

    <meta property="og:image" content="/-/media/Images/OGB/default_FBShare_pic3.gif" />
    <meta property="og:image:secure_url" content="/-/media/Images/OGB/default_FBShare_pic3.gif" />
    <meta property="og:title" content="Oxfam GB | leading UK charity fighting global poverty" />
    <meta property="og:description" content="Oxfam is a globally renowned aid and development charity with 70 years of experience, working and campaigning with partners in over 90 countries worldwide." />
    <meta property="og:url" content="http://www.oxfam.org.uk" />
    <meta property="og:site_name" content="Oxfam GB" />
    <meta property="og:type" content="website" />
    <link rel="canonical" href="<?php echo bloginfo('template_url'); ?>/http://www.oxfam.org.uk" />

    <meta name="format-detection" content="telephone=no">

    <!--[if !IE]> -->
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo bloginfo('template_url'); ?>/_Client/Static/Styles/compressed/Core.css?cb=1120630" />
    <link type="text/css" rel="stylesheet" media="all" href="<?php echo bloginfo('template_url'); ?>/_Client/Static/Styles/compressed/Libraries.css?cb=1120630" />

    <link type="text/css" rel="stylesheet" media="print" href="<?php echo bloginfo('template_url'); ?>/_Client/Static/Styles/compressed/Print.css?cb=1120630" />

    <!--[if IE 8]><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><![endif]-->
    <script type="text/javascript">
        var jsTag = document.getElementById('Page');
        if (jsTag) {
            jsTag.className = 'js';
        }
    </script>
    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/_Client/Scripts/Lib/WebFontLoader/webfont.min.js?cb=1120630">
    </script>
    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/_Client/Scripts/Lib/jQuery/jquery-1.7.1.min.js?cb=1120630">
    </script>
    <script src="<?php echo bloginfo('template_url'); ?>/_clientv2/scripts/PostConfig/PostConfig.js"></script>

    <meta name="environment" content="Ogb" />
    <meta name="display_title" content="Oxfam GB - leading UK charity fighting global poverty" />
    <meta name="page_type" content="Pages" />

    <script>
        dataLayer = [];
    </script>

    <!-- Eductaion responsive CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/media/Custom/CSS/education_responsive_minified.gif">

    <!-- Google Analytics -->
    <script>
        (function(i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function() {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-929330-1', 'auto');
        ga('require', 'displayfeatures');
        ga('send', 'pageview');
    </script>
    <!-- End Google Analytics -->

    <!-- Start Visual Website Optimizer Code -->
    <script type='text/javascript'>
        function VWOReadCookie(e) {
            var t = e + "=";
            var n = document.cookie.split(";");
            for (var r = 0; r < n.length; r++) {
                var i = n[r];
                while (i.charAt(0) == " ") i = i.substring(1, i.length);
                if (i.indexOf(t) == 0) return i.substring(t.length, i.length)
            }
            return null
        }
        if (VWOReadCookie("s_vi") == null) {
            if (typeof(document.cookie) != "undefined") {
                document.cookie = "VWO_vis_type=nv"
            }
        }
        _vis_opt_check_segment = {
            '92': true
        }
        var _vis_opt_account_id = 25201;
        var _vis_opt_protocol = (('https:' == document.location.protocol) ? 'https://' : 'http://');
        document.write('<s' + 'cript src="<?php echo bloginfo('template_url'); ?>/' + _vis_opt_protocol +
            'dev.visualwebsiteoptimizer.com/deploy/js_visitor_settings.php?v=1&a=' + _vis_opt_account_id + '&url=' + encodeURIComponent(document.URL) + '&random=' + Math.random() + '" type="text/javascript">' + '<\/s' + 'cript>');
    </script>
    <script type='text/javascript'>
        if (typeof(_vis_opt_settings_loaded) == "boolean") {
            document.write('<s' + 'cript src="<?php echo bloginfo('template_url'); ?>/' + _vis_opt_protocol +
                'd5phz18u4wuww.cloudfront.net/vis_opt.js" type="text/javascript">' + '<\/s' + 'cript>');
        }
    </script>
    <script type='text/javascript'>
        if (typeof(_vis_opt_settings_loaded) == "boolean" && typeof(_vis_opt_top_initialize) == "function") {
            _vis_opt_top_initialize();
            vwo_$(document).ready(function() {
                _vis_opt_bottom_initialize();
            });
        }
    </script>
    <!-- End Visual Website Optimizer Code -->

    <style>
        /* Fix for Twitter bird + VWO clash */
        
        .pw-button-twitter span.pw-button__native {
            border-radius: 3px;
            background-color: #1b95e0;
            padding: 1px 0;
            background-position: 0 2px;
            background-repeat: no-repeat;
            background-image: url('media/Images/Shared/Icons/twitterBird.gif');
            width: auto!important;
            display: block!important;
        }
        
        .pw-button-twitter span.pw-button__native a {
            color: white;
            background-position: 1px 9px;
            padding: 0px 10px 2px 27px;
            display: block;
            line-height: 1.5;
            width: 40px!important;
            font-size: 11px;
            font-family: Verdana, Tahoma!important;
        }
    </style>

    <!-- Google Tag Manager -->
    <noscript>
        <iframe src="<?php echo bloginfo('template_url'); ?>///www.googletagmanager.com/ns.html?id=GTM-9FPJ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-9FPJ');
    </script>
    <!-- End Google Tag Manager -->

    <script type="text/javascript">
        var NREUMQ = NREUMQ || [];
        NREUMQ.push(["mark", "firstbyte", new Date().getTime()]);
    </script>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <div class="header">
        <div class="site-branding">
			<?php //threza_the_custom_logo(); ?>
		</div><!-- .site-branding -->
    </div>
</div>

    <form method="post" action="/?intcmp=ogb-nav-ogb" id="frmMain" data-role="page">

        <div class="aspNetHidden">
        </div>

        <script type="text/javascript">
            var onSSL = false;
        </script>

        <ul id="Skiplinks">
            <li><a href="<?php echo bloginfo('template_url'); ?>/#NavigationPrimary">Skip to primary navigation</a></li>
            <li><a href="<?php echo bloginfo('template_url'); ?>/#ContentPrimary">Skip to primary content</a></li>
            <li><a href="<?php echo bloginfo('template_url'); ?>/#ContentSecondary">Skip to secondary content</a></li>
        </ul>

        <!--[if lt IE 7]>  <![endif]-->
        <div id="Header" class="header" data-role="header">

            <div class="layout-outer">
                <div class="layout-inner">

                    <div class="site-trail">
                        <a href="<?php echo bloginfo('template_url'); ?>//" class="logo group"><span><img src="<?php echo bloginfo('template_url'); ?>/_Client/Images/Global/Logo.png" alt="Oxfam" /></span></a>

                        <ul class="shop-sub-nav navigation-tertiary">

                            <li>
                                <a href="<?php echo bloginfo('template_url'); ?>//en">Home</a>
                            </li>

                            <li>
                                <a href="<?php echo bloginfo('template_url'); ?>//education">Teachers</a>
                            </li>

                            <li>
                                <a href="<?php echo bloginfo('template_url'); ?>/http://policy-practice.oxfam.org.uk">Policy & Practice</a>
                            </li>

                            <li>
                                <a href="<?php echo bloginfo('template_url'); ?>//shop/local-shops">Shop finder</a>
                            </li>

                            <li class="last">
                                <a href="<?php echo bloginfo('template_url'); ?>//blogs">Blogs</a>
                            </li>

                        </ul>

                    </div>

                    <ul id="NavigationTertiary" class="navigation-tertiary navigation-tertiary-shop">
                        <li class="register"><a id="header_0_headerinner_0_Register" class="register" href="<?php echo bloginfo('template_url'); ?>//account/register/">Create my Oxfam account</a> <span></span></li>
                        <li class="login"><a id="header_0_headerinner_0_StandardLogin" class="login" href="<?php echo bloginfo('template_url'); ?>/https://www.oxfam.org.uk/account/login">Login</a></li>
                        <li id="header_0_headerinner_0_basketloggedoutli" class="basket last">
                            <a href="<?php echo bloginfo('template_url'); ?>//shop/basket/" class="basket">My Basket (0) <svg class="icon sprite-logo"><use xlink:href="<?php echo bloginfo('template_url'); ?>//_clientv2/images/icons-main.svg?1120630#sprite-basket"></use></svg></a>
                        </li>
                    </ul>

                    <div class="mobile-menu">
                        <fieldset id="SiteSearch" class="site-search">
                            <legend>Search</legend>
                            <div id="header_0_headerinner_1_SiteSearchPanel" class="frow frow-text frow-combined" onkeypress="javascript:return WebForm_FireDefaultButton(event, &#39;header_0_headerinner_1_Search&#39;)">

                                <label for="header_0_headerinner_1_SearchField">Search</label>
                                <div class="nice-selectbox"><span class="select-text">&nbsp;All</span>
                                    <select name="header_0$headerinner_1$SearchSections" id="header_0_headerinner_1_SearchSections" class="searchfilterlist" wtx-context="91904E6D-85AB-4B27-B602-827AE0230737">
                                        <option selected="selected" value="Ogb|/search-results?q={0};show_all=ogb_mixed">&nbsp;All</option>
                                        <option value="Ogb|/shop/search-results?q={0};show_all=products">&nbsp;Online Shop</option>
                                        <option value="Ogb|/education/search?q={0}">&nbsp;Education</option>
                                        <option value="Professionals|/search?q={0}">&nbsp;Policy &amp; Practice</option>
                                        <option value="Ogb|/shop/local-shops/?search={0}">&nbsp;Shop Finder</option>

                                    </select>
                                </div>
                                <input name="header_0$headerinner_1$SearchField" type="text" id="header_0_headerinner_1_SearchField" class="pre-populated required" name="SearchField" />
                                <input type="submit" name="header_0$headerinner_1$Search" value="search" id="header_0_headerinner_1_Search" class="submit" />

                            </div>
                        </fieldset>
                    </div>

                </div>
            </div>
        </div>
        <div id="NavigationPrimary" class="navigation-primary">
            <ul class="primary-nav">
                <li class="first"><a href="<?php echo bloginfo('template_url'); ?>//what-we-do" class="internal">What we do</a></li>
                <li><a href="<?php echo bloginfo('template_url'); ?>//get-involved" class="internal">Get involved</a></li>
                <li><a href="<?php echo bloginfo('template_url'); ?>//shop" class="internal">Shop online</a></li>
                <li class="last active"><a href="<?php echo bloginfo('template_url'); ?>//donate" class="internal">Donate</a></li>
            </ul>
        </div>