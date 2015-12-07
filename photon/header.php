<!DOCTYPE HTML>
<html prefix="og: http://ogp.me/ns#">
    <head>
        <title>{content_meta_title}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!--  Site Meta Data  -->
        <meta name="keywords" content="{content_meta_keywords}">
        <meta name="description" content="{content_meta_description}">

        <!--  Site Open Graph Meta Data  -->
        <meta property="og:title" content="{content_meta_title}">
        <meta property="og:type" content="{og_type}">
        <meta property="og:url" content="{content_url}">
        <meta property="og:image" content="{content_image}">
        <meta property="og:description" content="{og_description}">
        <meta property="og:site_name" content="{og_site_name}">
        <?php include 'header_scripts.php'; ?>
    </head>
    <body class="<?php print mw_var('photon_layout'); ?>">
    <div id="site-main">
    <module type="shop/cart" template="small" id="header-cart">
    <div id="sidenav" class="active">

          <div id="side-nav-content">
            <div class="edit" rel="global" field="header">
              <module type="logo" id="logo"  />
              <module type="menu" name="header_menu" id="main-navigation" template="photon" />
              <hr>
              <module type="social_links" id="nav-social-links">
            </div>
            <div id="copyright" class="edit" field="copyright" rel="global">
              <a href="<?php  print admin_url(); ?>">Admin</a> | <?php print powered_by_link(); ?>
            </div>
          </div>
          <span id="mobile-menu"><span></span><span></span><span></span></span>
    </div>
    <div id="main-content">
        <div id="main-content-holder">