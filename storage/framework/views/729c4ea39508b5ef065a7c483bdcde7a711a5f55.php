<!DOCTYPE html>
<!--
 * A Design by GraphBerry
 * Author: GraphBerry
 * Author URL: http://graphberry.com
 * License: http://graphberry.com/pages/license
-->
<html lang="en">
    
    <head>
        <meta charset=utf-8>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gobernacion</title>
        <!-- Load Roboto font -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!-- Load css styles -->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/bootstrap-responsive.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/pluton.css')); ?>" />
        <!--[if IE 7]>
            <link rel="stylesheet" type="text/css" href="css/pluton-ie7.css" />
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/jquery.cslider.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/jquery.bxslider.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/animate.css')); ?>" />
        <!-- Fav and touch icons -->
        <!--Nav-->
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/normalize.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/demo.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/icons.css')); ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/component.css')); ?>" />
        <!--end Nav-->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/apple-touch-icon-72.png">
        <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57.png">
        <link rel="shortcut icon" href="images/ico/gbs.ico">
    </head>
    
    <body>
        <?php /*<?php echo $__env->make('extends.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
        <!-- Start home section -->
         <?php echo $__env->yieldContent('content'); ?>
        <!-- Contact section edn -->
        <!-- ScrollUp button end -->
        <!-- Include javascript -->
        <script src="<?php echo e(asset('js/jquery.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.mixitup.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/modernizr.custom.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/modernizrx.custom.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.bxslider.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.cslider.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.placeholder.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('js/jquery.inview.js')); ?>"></script>
        <!-- Load google maps api and call initializeMap function defined in app.js -->
        <!--<script async="" defer="" type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&callback=initializeMap"></script>-->
        <!-- css3-mediaqueries.js for IE8 or older -->
        <!--[if lt IE 9]>
            <script src="js/respond.min.js"></script>
        <![endif]-->
        <script type="text/javascript" src="<?php echo e(asset('js/app.js')); ?>"></script>
        <!--scrpt Nav-->
        <script src="<?php echo e(asset('js/classie.js')); ?>"></script>
        <script src="<?php echo e(asset('js/mlpushmenu.js')); ?>"></script>
        <script>
            new mlPushMenu($('#mp-menu')[0], $('.trigger')[0]);
            /*new mlPushMenu( document.getElementById( 'mp-menu' ), document.getElementById( 'trigger' ) );*/
        </script>
        <!--end script nav-->
         <?php echo $__env->yieldContent('js'); ?>
    </body>
</html>