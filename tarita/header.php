<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
<head>
    <title>{content_meta_title}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">


    <meta name="keywords" content="{content_meta_keywords}">
    <meta name="description" content="{content_meta_description}">


    <meta property="og:title" content="{content_meta_title}">
    <meta property="og:type" content="{og_type}">
    <meta property="og:url" content="{content_url}">
    <meta property="og:image" content="{content_image}">
    <meta property="og:description" content="{og_description}">
    <meta property="og:site_name" content="{og_site_name}">

    <?php $color = get_option("color", "tarita"); ?>
    <?php $theme = get_option("theme", "tarita"); ?>

    <link rel="stylesheet" href="<?php print TEMPLATE_URL(); ?>assets/plugins/bootstrap/css/bootstrap.min.css"
          media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/css/style.css" media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/css/app.css" media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/css/headers/header-default.css" media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/css/custom.css" media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/plugins/revolution-slider/rs-plugin/css/settings.css" media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/plugins/parallax-slider/css/parallax-slider.css"  media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/css/page_pricing.css">
    <?php if ($color != ''): ?>
        <link id="tarita_color" rel="stylesheet"
              href="<?php print TEMPLATE_URL; ?>assets/css/theme-colors/<?php print $color; ?>.css" media="all">
    <?php endif; ?>
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/css/theme-skins/dark.css" media="all">


    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/plugins/line-icons/line-icons.css" media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/plugins/fancybox/source/jquery.fancybox.css"
          media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/plugins/flexslider/flexslider.css" media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/plugins/parallax-slider/css/parallax-slider.css"
          media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/plugins/font-awesome/css/font-awesome.min.css"
          media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/plugins/fancybox/source/jquery.fancybox.css"
          media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/css/pages/blog_magazine.css" media="all">
    <link rel="stylesheet" href="<?php print TEMPLATE_URL; ?>assets/plugins/owl-carousel/owl-carousel/owl.carousel.css"
          media="all">


    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/js/plugins/revolution-slider.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/js/app.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/js/custom.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/js/plugins/owl-carousel.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/js/plugins/parallax-slider.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/parallax-slider/js/modernizr.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/parallax-slider/js/jquery.cslider.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/flexslider/jquery.flexslider-min.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/plugins/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php print TEMPLATE_URL; ?>assets/js/plugins/fancy-box.js"></script>
    <script>
        jQuery(document).ready(function () {
            FancyBox.initFancybox();
        });

    </script>

</head>
<body class="<?php if ($theme == "dark") echo "dark"; ?>">
<div class="wrapper">
    <div class="edit" field="header" rel="header">
        <div class="header">
            <div class="navbar navbar-default mega-menu">
                    <div class="mw-row">
                        <div class="mw-col" style="width:30%">
                            <div class="navbar-header">

                                <a class="navbar-brand">
                                    <module type="logo" id="logo"/>
                                </a>
                            </div>

                        </div>

                        <div class="mw-col" style="width:60%;">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-responsive-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="fa fa-bars"></span>
                            </button>
                            <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
                                <module type="menu" name="header_menu" template="tabs"/>
                            </div>

                        </div>

                        <div class="mw-col" style="width: 10%;">

                        </div>
                </div>
            </div>
        </div>
    </div>


    <module type="breadcrumb"/>