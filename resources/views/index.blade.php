<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <title>E-Liver | Extrime Adventure
    </title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="E-Liver - La prima piattaforma dedicata agli sport estremi">
    <meta name="keywords" content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="favicon.png">
    <link rel="apple-touch-icon" href="touch-icon-iphone.png">
    <link rel="apple-touch-icon" sizes="152x152" href="touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="180x180" href="touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="167x167" href="touch-icon-ipad-retina.png">
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="{!! asset('css/vendor.min.css') !!}">
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href="{!! asset('css/styles.min.css') !!}">
    <!-- Modernizr-->
    <script src="{!! asset('js/modernizr.min.js') !!}"></script>
</head>
<!-- Body-->
<body>
<!-- Header-->

@include('components.header')


<!-- Page Content-->
<!-- Main Slider-->
@include('section.slider')
<!-- Top Categories/Deals-->
@include('section.top_category')
<!-- Featured Products-->
@include('shop.shop_list')
<!-- CTA-->
@include('section.banner_cta')
<!-- Staff Picks (Widgets)-->
@include('section.widget')
<!-- Popular Brands Carousel-->
@include('section.brand')
<!-- Services-->
@include('section.customer_service')
<!-- Site Footer-->
@include('components.footer')
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-chevron-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="{!! asset('js/vendor.min.js') !!}"></script>
<script src="{!! asset('js/scripts.min.js') !!}"></script>
</body>
</html>